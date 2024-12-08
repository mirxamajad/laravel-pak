<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Support Ticket')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('admin.Support Ticket')); ?></h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body ticket-message">
                            <div class="list-group">
                                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($message->admin_id == 0): ?>
                                        <div class="list-group-item list-group-item-action flex-column align-items-start author_message mb-2">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"> <?php echo e($ticket->user->name); ?> <small>(<?php echo e(__('admin.Author')); ?>)</small></h6> <small><?php echo e($message->created_at->diffForHumans()); ?></small>
                                            </div>
                                            <p class="mb-1"><?php echo html_decode(clean(nl2br($message->message))); ?></p>

                                            <?php if($message->documents): ?>
                                                <div class="gallery">
                                                    <?php $__currentLoopData = $message->documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a href="<?php echo e(route('admin.download-file', $document->file_name)); ?>" class="upload_photo"><i class="fas fa-link"></i> <?php echo e($document->file_name); ?></a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    <?php else: ?>
                                        <div class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"><?php echo e($message->admin ? $message->admin->name : ''); ?> <small>(<?php echo e(__('admin.Administrator')); ?>)</small></h6> <small><?php echo e($message->created_at->diffForHumans()); ?> </small>
                                            </div>
                                            <p class="mb-1"><?php echo html_decode(clean(nl2br($message->message))); ?></p>

                                            <?php if($message->documents): ?>
                                                <div class="gallery">
                                                    <?php $__currentLoopData = $message->documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a href="<?php echo e(route('admin.download-file', $document->file_name)); ?>" class="upload_photo"><i class="fas fa-link"></i> <?php echo e($document->file_name); ?></a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            <?php endif; ?>

                                        </div>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>

                            <div class="message-box mt-4">
                                <form action="<?php echo e(route('admin.store-ticket-message')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <textarea required name="message" placeholder="<?php echo e(__('admin.Type here')); ?>.." class="form-control text-area-5" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <input type="hidden" value="<?php echo e($ticket->id); ?>" name="ticket_id">
                                    <input type="hidden" value="<?php echo e($ticket->user->id); ?>" name="user_id">
                                    <div class="form-group d-none">
                                        <input type="file" name="documents[]" multiple class="form-control">
                                        <span class="text-danger"><?php echo e(__('admin.Maximum file size 2MB')); ?></span>
                                    </div>

                                    <button class="btn btn-primary" type="submit"><?php echo e(__('admin.Submit')); ?></button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h6><?php echo e(__('admin.Ticket Information')); ?></h6>
                            <hr>
                            <p><?php echo e(__('admin.Subject')); ?>: <?php echo e(html_decode($ticket->subject)); ?></p>
                            <p><?php echo e(__('admin.Ticket Id')); ?>: <?php echo e($ticket->ticket_id); ?></p>
                            <p><?php echo e(__('admin.Order Id')); ?>: <a href="<?php echo e(route('admin.order-show',$ticket->orderItems->order_id)); ?>"><?php echo e($ticket->orderItems->order_id); ?></a></p>
                            <p><?php echo e(__('admin.Created')); ?>: <?php echo e($ticket->created_at->format('h:m A, d-M-Y')); ?></p>
                            <p><?php echo e(__('admin.Status')); ?>:
                                <?php if($ticket->status == 'pending'): ?>
                                <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?></span>
                                <?php elseif($ticket->status == 'in_progress'): ?>
                                <span class="badge badge-success"><?php echo e(__('admin.In Progress')); ?></span>
                                <?php elseif($ticket->status == 'closed'): ?>
                                <span class="badge badge-danger"><?php echo e(__('admin.Closed')); ?></span>
                                <?php endif; ?>
                            </p>

                            <h6 class="mt-3"><?php echo e(__('admin.User Information')); ?></h6>
                            <hr>

                            <?php if($ticket->ticket_from == 'Client'): ?>
                                <p>
                                    <?php echo e(__('admin.Name')); ?>: <a href="<?php echo e(route('admin.customer-show',$ticket->user->id)); ?>"><?php echo e($ticket->user->name); ?></a>
                                </p>
                                <p><?php echo e(__('admin.User Type')); ?> : <?php echo e(__('admin.Client')); ?></p>
                                <p><?php echo e(__('admin.Email')); ?> : <?php echo e($ticket->user->email); ?></p>
                                <p><?php echo e(__('admin.Phone')); ?> : <?php echo e($ticket->user->Phone); ?></p>
                            <?php else: ?>
                                <p>
                                    <?php echo e(__('admin.Name')); ?>: <a href="<?php echo e(route('admin.provider-show',$ticket->user->id)); ?>"><?php echo e($ticket->user->name); ?></a>
                                </p>
                                <p><?php echo e(__('admin.User Type')); ?> : <?php echo e(__('admin.Provider')); ?></p>
                                <p><?php echo e(__('admin.Email')); ?> : <?php echo e($ticket->user->email); ?></p>
                                <p><?php echo e(__('admin.Phone')); ?> : <?php echo e($ticket->user->Phone); ?></p>
                            <?php endif; ?>

                            <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger" onclick="deleteData(<?php echo e($ticket->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i> <?php echo e(__('admin.Delete')); ?></a>

                            <?php if($ticket->status != 'closed'): ?>
                                <a data-toggle="modal" data-target="#closeTicket" href="javascript:;" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> <?php echo e(__('admin.Closed')); ?></a>
                            <?php endif; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="closeTicket">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><?php echo e(__('admin.Ticket Closed Confirmation')); ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <p><?php echo e(__('admin.Are You sure closed this ticket ?')); ?></p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <form action="<?php echo e(route('admin.ticket-closed', $ticket->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("PUT"); ?>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Yes, Closed')); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteData(id){
        $("#deleteForm").attr("action",'<?php echo e(url("admin/ticket-delete/")); ?>'+"/"+id)
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\Modules/SupportTicket\Resources/views/admin/ticket_show.blade.php ENDPATH**/ ?>
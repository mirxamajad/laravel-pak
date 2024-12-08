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
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped report_table" id="dataTable">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('admin.SN')); ?></th>
                                    <th ><?php echo e(__('admin.From')); ?></th>
                                    <th ><?php echo e(__('admin.Ticket Info')); ?></th>
                                    <th ><?php echo e(__('admin.Unread Message')); ?></th>
                                    <th><?php echo e(__('admin.Status')); ?></th>
                                    <th ><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td>
                                            <?php if($ticket->ticket_from == 'Client'): ?>
                                                <p>
                                                    <?php echo e(__('admin.Name')); ?>: <a href="<?php echo e(route('admin.customer-show',$ticket->user->id)); ?>"><?php echo e($ticket->user->name); ?></a>
                                                </p>
                                                <p><?php echo e(__('admin.User Type')); ?> : <?php echo e(__('admin.User')); ?></p>
                                                <p><?php echo e(__('admin.Email')); ?> : <?php echo e($ticket->user->email); ?></p>
                                                <p><?php echo e(__('admin.Phone')); ?> : <?php echo e($ticket->user->Phone); ?></p>
                                            <?php else: ?>
                                                <p>
                                                    <?php echo e(__('admin.Name')); ?>: <a href="<?php echo e(route('admin.provider-show',$ticket->user->id)); ?>"><?php echo e($ticket->user->name); ?></a>
                                                </p>

                                                <p><?php echo e(__('admin.User Type')); ?> : <?php echo e(__('admin.Seller')); ?></p>
                                                <p><?php echo e(__('admin.Email')); ?> : <?php echo e($ticket->user->email); ?></p>
                                                <p><?php echo e(__('admin.Phone')); ?> : <?php echo e($ticket->user->Phone); ?></p>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <p><?php echo e(__('admin.Subject')); ?>: <?php echo e(html_decode($ticket->subject)); ?></p>
                                            <p><?php echo e(__('admin.Ticket Id')); ?>: <?php echo e($ticket->ticket_id); ?></p>
                                            <p><?php echo e(__('admin.Order Id')); ?>: <a href="<?php echo e(route('admin.order-show',$ticket->orderItems->order_id)); ?>"><?php echo e($ticket->orderItems->order_id); ?></a></p>
                                            <p><?php echo e(__('admin.Created')); ?>: <?php echo e($ticket->created_at->format('h:m A, d-M-Y')); ?></p>
                                        </td>

                                        <td>
                                            <?php
                                                $unseen = $ticket->messages->where('admin_id',0)->where('unseen_admin', 0)->count();
                                            ?>
                                            <?php if($unseen > 0): ?>
                                            <span class="badge badge-danger"><?php echo e($unseen); ?></span>
                                            <?php endif; ?>

                                        </td>


                                        <td>
                                            <?php if($ticket->status == 'pending'): ?>
                                            <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?></span>
                                            <?php elseif($ticket->status == 'in_progress'): ?>
                                            <span class="badge badge-success"><?php echo e(__('admin.In Progress')); ?></span>
                                            <?php elseif($ticket->status == 'closed'): ?>
                                            <span class="badge badge-danger"><?php echo e(__('admin.Closed')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                        <a href="<?php echo e(route('admin.ticket-show',$ticket->ticket_id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($ticket->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>

                                    </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

<script>
    function deleteData(id){
        $("#deleteForm").attr("action",'<?php echo e(url("admin/ticket-delete/")); ?>'+"/"+id)
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\Modules/SupportTicket\Resources/views/admin/ticket.blade.php ENDPATH**/ ?>
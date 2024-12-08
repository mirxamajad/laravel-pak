<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Order Item Details')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seller-content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('admin.Order Item Details')); ?></h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body ticket-message">
                            <div class="list-group">
                                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($message->send_seller == 0): ?>
                                        <div class="list-group-item list-group-item-action flex-column align-items-start author_message mb-2">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"> <?php echo e($customer->name); ?></h6> <small><?php echo e($message->created_at->diffForHumans()); ?></small>
                                            </div>
                                            <p class="mb-1"><?php echo html_decode(clean(nl2br($message->message))); ?></p>



                                        </div>
                                    <?php else: ?>
                                        <div class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"><?php echo e($seller->name); ?> <small>(<?php echo e(__('admin.me')); ?>)</small></h6> <small><?php echo e($message->created_at->diffForHumans()); ?> </small>
                                            </div>
                                            <p class="mb-1"><?php echo html_decode(clean(nl2br($message->message))); ?></p>

                                        </div>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>

                            <div class="message-box mt-4">
                                <form action="<?php echo e(route('seller.store-product-message', $item->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <textarea required name="message" placeholder="<?php echo e(__('admin.Type here')); ?>.." class="form-control text-area-5" id="" cols="30" rows="10"></textarea>
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
                            <h6><?php echo e(__('admin.Order Information')); ?></h6>
                            <hr>
                            <p><?php echo e(__('admin.Product')); ?>: <?php echo e(html_decode($item->product_name)); ?></p>
                            <p><?php echo e(__('admin.Service')); ?>: <?php echo e(html_decode($item->variant_name)); ?></p>
                            <p><?php echo e(__('admin.Option')); ?>: <?php echo e(html_decode($item->option_name)); ?></p>
                            <p><?php echo e(__('admin.Qty')); ?>: <?php echo e(html_decode($item->qty)); ?></p>
                            <p><?php echo e(__('admin.Amount')); ?>: <?php echo e($setting->currency_icon); ?><?php echo e(round($item->option_price)); ?></p>


                            <p><?php echo e(__('admin.Order Id')); ?>: #<?php echo e($item->track_id); ?></p>
                            <p><?php echo e(__('admin.Created')); ?>: <?php echo e($item->created_at->format('h:m A, d-M-Y')); ?></p>
                            <p><?php echo e(__('admin.Status')); ?>:
                                <?php if($item->approve_by_user == 'pending'): ?>
                                <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?> </span>
                                <?php elseif($item->approve_by_user == 'approved'): ?>
                                <span class="badge badge-success"><?php echo e(__('admin.Complete')); ?> </span>
                                <?php else: ?>
                                <span class="badge badge-danger"><?php echo e(__('admin.Canceled')); ?> </span>
                                <?php endif; ?>
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('seller.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/seller/order_details.blade.php ENDPATH**/ ?>
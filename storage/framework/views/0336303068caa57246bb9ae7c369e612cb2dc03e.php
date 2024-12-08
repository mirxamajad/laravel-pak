<?php $__env->startSection('title'); ?>
<title><?php echo e($title); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seller-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e($title); ?></h1>
          </div>

          <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                      <div class="card-body">
                        <div class="table-responsive table-invoice">
                          <table class="table table-striped" id="dataTable">
                              <thead>
                                  <tr>
                                      <th width="5%"><?php echo e(__('admin.SN')); ?></th>
                                      <th width="10%"><?php echo e(__('admin.Customer')); ?></th>
                                      <th width="10%"><?php echo e(__('admin.Order Id')); ?></th>
                                      <th width="10%"><?php echo e(__('admin.Date')); ?></th>
                                      <th width="10%"><?php echo e(__('admin.Quantity')); ?></th>
                                      <th width="10%"><?php echo e(__('admin.Amount')); ?></th>
                                      <th width="10%"><?php echo e(__('admin.Order Status')); ?></th>
                                      <th width="10%"><?php echo e(__('admin.Payment')); ?></th>
                                      <th width="15%"><?php echo e(__('admin.Action')); ?></th>
                                    </tr>
                              </thead>
                              <tbody>
                                  <?php $__currentLoopData = $order_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $order_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                          <td><?php echo e(++$index); ?></td>
                                          <td><?php echo e($order_item->user->name); ?></td>
                                          <td>#<?php echo e($order_item->track_id); ?></td>
                                          <td><?php echo e(Carbon\Carbon::parse($order_item->created_at)->format('d F, Y')); ?></td>
                                          <td><?php echo e($order_item->qty); ?></td>
                                          <td><?php echo e($setting->currency_icon); ?><?php echo e(round($order_item->option_price)); ?></td>
                                          <td>
                                              <?php if($order_item->approve_by_user == 'pending'): ?>
                                              <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?> </span>
                                              <?php elseif($order_item->approve_by_user == 'approved'): ?>
                                              <span class="badge badge-success"><?php echo e(__('admin.Complete')); ?> </span>
                                              <?php else: ?>
                                              <span class="badge badge-danger"><?php echo e(__('admin.Canceled')); ?> </span>
                                              <?php endif; ?>
                                          </td>
                                          <td>
                                            <span class="badge badge-success"><?php echo e(__('admin.success')); ?> </span>
                                          </td>

                                          <td>

                                            <a href="<?php echo e(url('seller/order-show',  ['item_id' => $order_item->id, 'order_id' => $order_item->track_id])); ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>



                                      </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
          </div>
        </section>
      </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('seller.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/seller/order.blade.php ENDPATH**/ ?>
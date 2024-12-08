<?php $__env->startSection('title'); ?>
<title><?php echo e($title); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
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
                                  <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                          <td><?php echo e(++$index); ?></td>
                                          <td><a href="<?php echo e(route('admin.customer-show', $order->user->id)); ?>"><?php echo e($order->user->name); ?></a></td>
                                          <td><?php echo e($order->order_id); ?></td>
                                          <td><?php echo e(Carbon\Carbon::parse($order->created_at)->format('d F, Y')); ?></td>
                                          <td><?php echo e($order->cart_qty); ?></td>
                                          <td><?php echo e($setting->currency_icon); ?><?php echo e(round($order->total_amount)); ?></td>
                                          <td>
                                              <?php if($order->order_status == 1): ?>
                                              <span class="badge badge-success"><?php echo e(__('admin.Complete')); ?> </span>
                                              <?php elseif($order->order_status == 0): ?>
                                              <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?> </span>
                                              <?php endif; ?>
                                          </td>
                                          <td>
                                              <?php if($order->payment_status == 'success'): ?>
                                              <span class="badge badge-success"><?php echo e(__('admin.success')); ?> </span>
                                              <?php else: ?>
                                              <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?></span>
                                              <?php endif; ?>
                                          </td>

                                          <td>

                                          <a href="<?php echo e(route('admin.order-show',$order->id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                          <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($order->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
          </div>
        </section>
      </div>


<script>
  "use strict";
    function deleteData(id){
        $("#deleteForm").attr("action",'<?php echo e(url("admin/delete-order/")); ?>'+"/"+id)
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/order.blade.php ENDPATH**/ ?>
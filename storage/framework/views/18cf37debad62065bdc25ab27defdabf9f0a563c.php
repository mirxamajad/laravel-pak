<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Order Details')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Invoice')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Invoice')); ?></div>
            </div>
          </div>
          <div class="section-body">
            <div class="invoice">
              <div class="invoice-print">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="invoice-title">
                      <h2><img src="<?php echo e(asset($setting->logo)); ?>" alt="" width="120px"></h2>
                      <div class="invoice-number"><?php echo e(__('admin.Order Id')); ?> #<?php echo e($order->order_id); ?></div>
                    </div>
                    <hr>
                    <?php
                        $orderAddress = $order->user;
                    ?>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong><?php echo e(__('admin.User Information')); ?>:</strong><br>
                            <?php echo e($orderAddress->name); ?><br>
                            <?php if($orderAddress->email): ?>
                            <?php echo e($orderAddress->email); ?><br>
                            <?php endif; ?>
                            <?php if($orderAddress->phone): ?>
                            <?php echo e($orderAddress->phone); ?><br>
                            <?php endif; ?>
                            <?php echo e($orderAddress->address); ?>,
                        </address>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong><?php echo e(__('admin.Payment Information')); ?>:</strong><br>
                          <?php echo e(__('admin.Method')); ?>: <?php echo e($order->payment_method); ?><br>
                          <?php echo e(__('admin.Status')); ?> : <?php if($order->payment_status == 'success'): ?>
                              <span class="badge badge-success"><?php echo e(__('admin.Complete')); ?></span>
                              <?php else: ?>
                              <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?></span>
                          <?php endif; ?> <br>
                          <?php echo e(__('admin.Transaction')); ?>: <?php echo clean(nl2br($order->transection_id)); ?>

                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong><?php echo e(__('admin.Order Information')); ?>:</strong><br>
                          <?php echo e(__('admin.Date')); ?>: <?php echo e(Carbon\Carbon::parse($order->created_at)->format('d F, Y')); ?><br>

                          <?php echo e(__('admin.Status')); ?> :
                          <?php if($order->order_status == 1): ?>
                          <span class="badge badge-success"><?php echo e(__('admin.Complete')); ?> </span>
                          <?php else: ?>
                          <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?></span>
                          <?php endif; ?>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mt-4">
                  <div class="col-md-12">
                    <div class="section-title"><?php echo e(__('admin.Order Summary')); ?></div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover table-md">
                        <tr>
                          <th width="5%">#</th>
                          <th width="25%"><?php echo e(__('admin.Product')); ?></th>
                          <th width="20%"><?php echo e(__('admin.Service name')); ?></th>
                          <th width="20%"><?php echo e(__('admin.Option')); ?></th>
                          <th width="10%"><?php echo e(__('admin.Author')); ?></th>
                          <th width="10%" class="text-center"><?php echo e(__('admin.Unit Price')); ?></th>
                          <th width="10%" class="text-center"><?php echo e(__('admin.Qty')); ?></th>
                          <th width="10%" class="text-right"><?php echo e(__('admin.Total')); ?></th>
                        </tr>
                        <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td><?php echo e(++$index); ?></td>
                                <td><a href="<?php echo e(route('admin.product.edit',['product' => $item->product_id, 'lang_code' => 'en'])); ?>"><?php echo e($item->product->name); ?></a></td>
                                <td><?php echo e($item->variant_name); ?> </td>
                                <td><?php echo e($item->option_name); ?> </td>

                                <td>
                                    <?php if($item->author): ?>
                                        <a href="<?php echo e(route('admin.provider-show', $item->author_id)); ?>"><?php echo e($item?->author?->name); ?></a>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center"><?php echo e($setting->currency_icon); ?><?php echo e($item->option_price); ?></td>
                                <td class="text-center"><?php echo e($item->qty); ?></td>
                                <?php
                                    $total = ($item->option_price * $item->qty)
                                ?>
                                <td class="text-right"><?php echo e($setting->currency_icon); ?><?php echo e($total); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </table>
                    </div>

                    <div class="row mt-3">
                      <div class="col-lg-6 order-status">

                      </div>

                      <div class="col-lg-6 text-right">
                        <?php
                            $sub_total = $order->total_amount;
                            $sub_total = $sub_total - $order->shipping_cost;
                            $sub_total = $sub_total + $order->coupon_coast;

                        ?>

                        <hr class="mt-2 mb-2">
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-value invoice-detail-value-lg"><?php echo e(__('admin.Total')); ?> : <?php echo e($setting->currency_icon); ?><?php echo e(round($order->total_amount, 2)); ?></div>
                        </div>
                      </div>

                      <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger" onclick="deleteData(<?php echo e($order->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i> <?php echo e(__('admin.Delete Order')); ?></a>

                      <?php if($order->payment_status == 'pending'): ?>
                      <a href="javascript:;" data-toggle="modal" data-target="#approvedPayment" class="btn btn-success ml-1" onclick="deleteData(<?php echo e($order->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i> <?php echo e(__('admin.Approved Payment')); ?></a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>






    <div class="modal fade" tabindex="-1" role="dialog" id="approvedPayment">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('admin.Payment Approved Confirmation')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p><?php echo e(__('admin.Are You sure approved this payment')); ?></p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <form action="<?php echo e(route('admin.payment-approved', $order->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('admin.Close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Yes, Approved')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
      "use strict";
        function deleteData(id){
            $("#deleteForm").attr("action",'<?php echo e(url("admin/delete-order/")); ?>'+"/"+id)
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/show_order.blade.php ENDPATH**/ ?>
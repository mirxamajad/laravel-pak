<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.My withdraw')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seller-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.My withdraw')); ?></h1>
          </div>

          <div class="section-body">
            <a href="<?php echo e(route('seller.my-withdraw.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> <?php echo e(__('admin.New withdraw')); ?></a>

            <div class="row mt-5">
                    <div class="col-md-4">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="card-wrap">
                        <div class="card-header">
                            <h4><?php echo e(__('admin.Total Earning')); ?></h4>
                        </div>
                        <div class="card-body">
                            <?php echo e($setting->currency_icon); ?><?php echo e($total_balance); ?>

                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-4">
                        <a href="javascript:;">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                <i class="far fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4><?php echo e(__('admin.Total Withdraw')); ?></h4>
                                </div>
                                <div class="card-body">
                                    <?php echo e($setting->currency_icon); ?><?php echo e($total_withdraw); ?>

                                </div>
                                </div>
                            </div>
                        </a>
                    </div>



                <div class="col-md-4">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                      <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4><?php echo e(__('admin.Current Balance')); ?></h4>
                      </div>
                      <div class="card-body">
                        <?php echo e($setting->currency_icon); ?><?php echo e($current_balance); ?>

                      </div>
                    </div>
                  </div>
                </div>

              </div>



            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th ><?php echo e(__('admin.SN')); ?></th>
                                    <th ><?php echo e(__('admin.Method')); ?></th>
                                    <th ><?php echo e(__('admin.Charge')); ?></th>
                                    <th ><?php echo e(__('admin.Total Amount')); ?></th>
                                    <th ><?php echo e(__('admin.Withdraw Amount')); ?></th>
                                    <th ><?php echo e(__('admin.Status')); ?></th>
                                    <th ><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $withdraws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $withdraw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td><?php echo e($withdraw->method); ?></td>
                                        <td>

                                            <?php echo e($setting->currency_icon); ?><?php echo e(sprintf('%0.2f', ($withdraw->total_amount - $withdraw->withdraw_amount))); ?>



                                        </td>
                                        <td>

                                            <?php echo e($setting->currency_icon); ?><?php echo e(sprintf('%.2f',$withdraw->total_amount)); ?>


                                        </td>
                                        <td>

                                            <?php echo e($setting->currency_icon); ?><?php echo e(sprintf('%.2f' ,$withdraw->withdraw_amount)); ?>


                                        </td>
                                        <td>
                                            <?php if($withdraw->status==1): ?>
                                            <span class="badge badge-success"><?php echo e(__('admin.Success')); ?></span>
                                            <?php else: ?>
                                            <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                        <a href="<?php echo e(route('seller.my-withdraw.show',$withdraw->id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('seller.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/seller/withdraw.blade.php ENDPATH**/ ?>
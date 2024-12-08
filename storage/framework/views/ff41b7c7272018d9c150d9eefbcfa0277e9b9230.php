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
            <a href="<?php echo e(route('seller.my-withdraw.index')); ?>" class="btn btn-primary"><i class="fas fa-list"></i> <?php echo e(__('admin.My withdraw')); ?></a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <td width="50%"><?php echo e(__('admin.Withdraw Method')); ?></td>
                                <td width="50%"><?php echo e($withdraw->method); ?></td>
                            </tr>
                            <tr>
                                <td width="50%"><?php echo e(__('admin.Withdraw Charge')); ?></td>
                                <td width="50%"><?php echo e($withdraw->withdraw_charge); ?>%</td>
                            </tr>
                            <tr>
                                <td width="50%"><?php echo e(__('admin.Withdraw Charge Amount')); ?></td>
                                <td width="50%">

                                    <?php echo e($setting->currency_icon); ?><?php echo e(sprintf('%.2f',($withdraw->total_amount - $withdraw->withdraw_amount))); ?>



                                </td>
                            </tr>

                            <tr>
                                <td width="50%"><?php echo e(__('admin.Total amount')); ?></td>
                                <td width="50%">

                                    <?php echo e($setting->currency_icon); ?><?php echo e(sprintf('%.2f',$withdraw->total_amount)); ?>


                                </td>
                            </tr>
                            <tr>
                                <td width="50%"><?php echo e(__('admin.Withdraw amount')); ?></td>
                                <td width="50%">

                                    <?php echo e($setting->currency_icon); ?><?php echo e(sprintf('%.2f',$withdraw->withdraw_amount)); ?>


                                </td>
                            </tr>
                            <tr>
                                <td width="50%"><?php echo e(__('admin.Status')); ?></td>
                                <td width="50%">
                                    <?php if($withdraw->status==1): ?>
                                    <span class="badge badge-success"><?php echo e(__('admin.Success')); ?></span>
                                    <?php else: ?>
                                    <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%"><?php echo e(__('admin.Requested Date')); ?></td>
                                <td width="50%"><?php echo e($withdraw->created_at->format('Y-m-d')); ?></td>
                            </tr>
                            <?php if($withdraw->status==1): ?>
                                <tr>
                                    <td width="50%"><?php echo e(__('admin.Approved Date')); ?></td>
                                    <td width="50%"><?php echo e($withdraw->approved_date); ?></td>
                                </tr>
                            <?php endif; ?>

                            <tr>
                                <td width="50%"><?php echo e(__('admin.Account Information')); ?></td>
                                <td width="50%">
                                    <?php echo clean(nl2br($withdraw->account_info)); ?>

                                </td>
                            </tr>

                        </table>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('seller.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/seller/withdraw_show.blade.php ENDPATH**/ ?>
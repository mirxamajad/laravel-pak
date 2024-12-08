<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Provider withdraw')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Seller withdraw')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Seller withdraw')); ?></div>
            </div>
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
                                    <th ><?php echo e(__('admin.SN')); ?></th>
                                    <th ><?php echo e(__('admin.Seller')); ?></th>
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
                                        <td>
                                            <a href="<?php echo e(route('admin.provider-show', $withdraw->user_id)); ?>"><?php echo e(html_decode($withdraw->provider->name)); ?></a>
                                        </td>
                                        <td><?php echo e($withdraw->method); ?></td>
                                        <td><?php echo e($setting->currency_icon); ?><?php echo e(sprintf('%.2f',($withdraw->total_amount - $withdraw->withdraw_amount))); ?></td>
                                        <td><?php echo e($setting->currency_icon); ?><?php echo e(sprintf('%.2f',$withdraw->total_amount)); ?></td>
                                        <td><?php echo e($setting->currency_icon); ?><?php echo e(sprintf('%.2f',$withdraw->withdraw_amount)); ?></td>
                                        <td>
                                            <?php if($withdraw->status==1): ?>
                                            <span class="badge badge-success"><?php echo e(__('admin.Success')); ?></span>
                                            <?php else: ?>
                                            <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                        <a href="<?php echo e(route('admin.show-provider-withdraw',$withdraw->id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($withdraw->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
        "use strict";
        function deleteData(id){
            $("#deleteForm").attr("action",'<?php echo e(url("admin/delete-seller-withdraw/")); ?>'+"/"+id)
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/provider_withdraw.blade.php ENDPATH**/ ?>
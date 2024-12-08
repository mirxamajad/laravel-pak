<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Topbar Contact Info')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Topbar Contact Info')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Topbar Contact Info')); ?></div>
            </div>
          </div>

            <div class="section-body">
                <div class="row mt-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo e(route('admin.update-header-info')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Phone')); ?></label>
                                        <input type="text" class="form-control" name="phone" value="<?php echo e($setting->topbar_phone); ?>">

                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Phone')); ?></label>
                                        <input type="email" class="form-control" name="email" value="<?php echo e($setting->topbar_email); ?>">

                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Address')); ?></label>
                                        <input type="text" class="form-control" name="address" value="<?php echo e($setting->topbar_address); ?>">

                                    </div>

                                    <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Save')); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
      </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/header_info.blade.php ENDPATH**/ ?>
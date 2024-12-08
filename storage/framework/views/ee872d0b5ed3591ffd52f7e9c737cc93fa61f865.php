<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Default Avatar')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Default Avatar')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Default Avatar')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.update-default-avatar')); ?>" enctype="multipart/form-data" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <label for=""><?php echo e(__('admin.Existing Avatar')); ?></label>
                                <div>
                                    <img class="default-avatar" src="<?php echo e(asset($default_avatar)); ?>" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""><?php echo e(__('admin.New Avatar')); ?></label>
                                <input type="file" name="avatar" class="form-control-file" required>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                        </form>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/default_profile_image.blade.php ENDPATH**/ ?>
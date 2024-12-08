<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.My Profile')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.My Profile')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.My Profile')); ?></div>
            </div>
          </div>
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-8">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                      <?php if($admin->image): ?>
                      <img alt="image" src="<?php echo e(asset($admin->image)); ?>" class="rounded-circle profile-widget-picture">
                      <?php else: ?>
                      <img alt="image" src="<?php echo e(asset($default_avatar->image)); ?>" class="rounded-circle profile-widget-picture">
                      <?php endif; ?>
                  </div>
                  <div class="profile-widget-description">
                    <form action="<?php echo e(route('admin.profile.update')); ?>" enctype="multipart/form-data" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                        <div class="row">
                            <div class="form-group col-12">
                            <label><?php echo e(__('admin.New Image')); ?></label>
                            <input type="file" class="form-control-file" name="image">
                            </div>
                            <div class="form-group col-12">
                            <label><?php echo e(__('admin.Name')); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="<?php echo e($admin->name); ?>" name="name">
                            </div>

                            <div class="form-group col-12">
                                <label><?php echo e(__('admin.Email')); ?> <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" value="<?php echo e($admin->email); ?>" name="email">
                            </div>

                            <div class="form-group col-12">
                            <label><?php echo e(__('admin.Password')); ?></label>
                            <input type="password" class="form-control" name="password">
                            </div>

                            <div class="form-group col-12">
                                <label><?php echo e(__('admin.Confirm Password')); ?></label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/admin_profile.blade.php ENDPATH**/ ?>
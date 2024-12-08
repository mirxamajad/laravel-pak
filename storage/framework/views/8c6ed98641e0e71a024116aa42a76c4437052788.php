<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Maintainance Mode')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Maintainance Mode')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Maintainance Mode')); ?></div>
            </div>
          </div>

          <div class="section-body">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.maintainance-mode-update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="form-group">
                                <label for=""><?php echo e(__('admin.Maintainance Mode')); ?></label>
                                <div>
                                    <?php if($maintainance->status == 1): ?>
                                        <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="maintainance_mode">
                                        <?php else: ?>
                                        <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="maintainance_mode">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                <div>
                                    <img src="<?php echo e(asset($maintainance->image)); ?>" width="200px" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""><?php echo e(__('admin.New Image')); ?></label>
                                <input type="file" class="form-control-file" name="image">
                            </div>
                            <div class="form-group">
                                <label for=""><?php echo e(__('admin.Description')); ?></label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control text-area-5"><?php echo e($maintainance->description); ?></textarea>
                            </div>

                            <button class="btn btn-primary" type="submit"><?php echo e(__('admin.Update')); ?></button>
                        </form>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/maintainance_mode.blade.php ENDPATH**/ ?>
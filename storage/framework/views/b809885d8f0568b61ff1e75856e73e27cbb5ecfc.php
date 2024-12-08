<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Footer')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Footer')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Footer')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row mt-4">

                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.footer.update', $footer->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="hidden" name="lang_code" value="<?php echo e(request()->get('lang_code')); ?>">

                            <div class="row">

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Copyright')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" name="copyright" class="form-control" value="<?php echo e($footer_language->copyright); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Description')); ?> <span class="text-danger">*</span></label>
                                    <textarea class="form-control text-area-5" name="description" id="" cols="30" rows="5"><?php echo e($footer_language->description); ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
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

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/website_footer.blade.php ENDPATH**/ ?>
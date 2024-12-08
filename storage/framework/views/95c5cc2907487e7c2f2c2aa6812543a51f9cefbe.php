<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.About Us')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.About Us')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.About Us')); ?></div>
            </div>
          </div>

            <div class="section-body">
                <div class="row mt-4">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo e(route('admin.update-about-us')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo method_field('PUT'); ?>
                                    <?php echo csrf_field(); ?>

                                    <input type="hidden" name="lang_code" value="<?php echo e(request()->get('lang_code')); ?>">

                                    <?php if(session()->get('admin_lang') == request()->get('lang_code')): ?>
                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Existing image')); ?></label>
                                        <div>
                                            <img class="w_220"  src="<?php echo e(asset($about->banner_image)); ?>" alt="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.New image')); ?></label>
                                        <input type="file" name="banner_image" class="form-control-file">
                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Existing signature')); ?></label>
                                        <div>
                                            <img class="w_50"  src="<?php echo e(asset($about->signature)); ?>" alt="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.New signature')); ?></label>
                                        <input type="file" name="signature" class="form-control-file">
                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Founder image')); ?></label>
                                        <div>
                                            <img class="w_50"  src="<?php echo e(asset($about->image)); ?>" alt="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.New Image')); ?></label>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Name')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" value="<?php echo e($about_language->name); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Desgination')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" name="desgination" class="form-control" value="<?php echo e($about_language->desgination); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Title')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control" value="<?php echo e($about_language->title); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Header')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" name="header1" class="form-control" value="<?php echo e($about_language->header1); ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.About Us')); ?> <span class="text-danger">*</span></label>
                                        <textarea name="about_us" id="" class="summernote" cols="30" rows="10"><?php echo clean($about_language->about_us); ?></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/about-us.blade.php ENDPATH**/ ?>
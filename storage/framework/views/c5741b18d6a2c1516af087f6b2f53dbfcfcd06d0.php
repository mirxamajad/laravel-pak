<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Conact Us')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Conact Us')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Conact Us')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row mt-4">

                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.contact-us.update',$contact->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <input type="hidden" name="lang_code" value="<?php echo e(request()->get('lang_code')); ?>">
                            <div class="row">
                              <?php if(session()->get('admin_lang') == request()->get('lang_code')): ?>
                                <div class="form-group col-12">
                                    <label for=""><?php echo e(__('admin.Existing image')); ?></label>
                                    <div>
                                        <img class="w_220"  src="<?php echo e(asset($contact->image)); ?>" alt="">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label for=""><?php echo e(__('admin.New image')); ?></label>
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                                <?php endif; ?>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Title')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" name="title1" class="form-control" value="<?php echo e($contact_language->title1); ?>">
                                </div>

                                <div class="form-group col-12">
                                  <label><?php echo e(__('admin.Support title')); ?> <span class="text-danger">*</span></label>
                                  <input type="text" name="title2" class="form-control" value="<?php echo e($contact_language->title2); ?>">
                                </div>

                                <div class="form-group col-12">
                                  <label><?php echo e(__('admin.Support time')); ?> <span class="text-danger">*</span></label>
                                  <input type="text" name="time" class="form-control" value="<?php echo e($contact_language->time); ?>">
                                </div>

                                <div class="form-group col-12">
                                  <label><?php echo e(__('admin.Off Day')); ?> <span class="text-danger">*</span></label>
                                  <input type="text" name="off_day" class="form-control" value="<?php echo e($contact_language->off_day); ?>">
                                </div>

                                <?php if(session()->get('admin_lang') == request()->get('lang_code')): ?>

                                    <div class="form-group col-12">
                                        <label><?php echo e(__('admin.Email')); ?> <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" value="<?php echo e($contact->email); ?>">
                                    </div>

                                    <div class="form-group col-12">
                                        <label><?php echo e(__('admin.Secondary Email')); ?></label>
                                        <input type="email" name="email2" class="form-control" value="<?php echo e($contact->email2); ?>">
                                    </div>

                                    <div class="form-group col-12">
                                        <label><?php echo e(__('admin.Phone')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" class="form-control" value="<?php echo e($contact->phone); ?>">
                                    </div>

                                    <div class="form-group col-12">
                                        <label><?php echo e(__('admin.Secondary Phone')); ?></label>
                                        <input type="text" name="phone2" class="form-control" value="<?php echo e($contact->phone2); ?>">
                                    </div>

                                <?php endif; ?>

                                <div class="form-group col-12">
                                  <label><?php echo e(__('admin.Address')); ?> <span class="text-danger">*</span></label>
                                  <textarea name="address" cols="30" rows="10" class="form-control text-area-5"><?php echo e($contact_language->address); ?></textarea>
                              </div>

                                <?php if(session()->get('admin_lang') == request()->get('lang_code')): ?>
                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Google Map')); ?> <span class="text-danger">*</span></label>
                                    <textarea name="google_map" cols="30" rows="10" class="form-control text-area-5"><?php echo e($contact->map); ?></textarea>
                                </div>
                                <?php endif; ?>

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

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/contact_page.blade.php ENDPATH**/ ?>
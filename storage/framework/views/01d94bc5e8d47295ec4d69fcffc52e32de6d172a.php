<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Edit Currency')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Edit Currency')); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Edit Currency')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.currency.index')); ?>" class="btn btn-primary"><i class="fas fa-list"></i> <?php echo e(__('admin.Currency')); ?></a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.currency.update', $multiCurrency->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Currency Name')); ?> <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="currency_name" value="<?php echo e($multiCurrency->currency_name); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Country Code')); ?> <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="country_code" value="<?php echo e($multiCurrency->country_code); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Currency Code')); ?> <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="currency_code" value="<?php echo e($multiCurrency->currency_code); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Currency Icon')); ?> <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="currency_icon" value="<?php echo e($multiCurrency->currency_icon); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Currency Rate')); ?> <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="currency_rate" value="<?php echo e($multiCurrency->currency_rate); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Default')); ?> <span class="text-danger">*</span></label>
                                    <select name="is_default" class="form-control">
                                        <option value="No" <?php echo e($multiCurrency->is_default == 'No' ? 'selected':''); ?>><?php echo e(__('admin.No')); ?></option>
                                        <option value="Yes" <?php echo e($multiCurrency->is_default == 'Yes' ? 'selected':''); ?>><?php echo e(__('admin.Yes')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Currency Position')); ?> <span class="text-danger">*</span></label>
                                    <select name="currency_position" class="form-control">
                                        <option value="left" <?php echo e($multiCurrency->currency_position == 'left' ? 'selected':''); ?>><?php echo e(__('admin.Before Price')); ?></option>
                                        <option value="right" <?php echo e($multiCurrency->currency_position == 'right' ? 'selected':''); ?>><?php echo e(__('admin.After Price')); ?></option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Status')); ?> <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1" <?php echo e($multiCurrency->status == 1 ? 'selected':''); ?>><?php echo e(__('admin.Active')); ?></option>
                                        <option value="0" <?php echo e($multiCurrency->status == 0 ? 'selected':''); ?>><?php echo e(__('admin.Inactive')); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary"><?php echo e(__('admin.Save')); ?></button>
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

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/edit_currency.blade.php ENDPATH**/ ?>
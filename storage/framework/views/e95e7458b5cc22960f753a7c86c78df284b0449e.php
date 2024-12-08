<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Withdraw Method')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Edit Withdraw Method')); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.withdraw-method.index')); ?>"><?php echo e(__('admin.Withdraw Method')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Edit Withdraw Method')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.withdraw-method.index')); ?>" class="btn btn-primary"><i class="fas fa-list"></i> <?php echo e(__('admin.Withdraw Method')); ?></a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.withdraw-method.update',$method->id)); ?>" method="POST" >
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row">

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Name')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control"  name="name" value="<?php echo e($method->name); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Minimum Amount')); ?> <span class="text-danger">* (<?php echo e(__('admin.USD Amount')); ?>)</span></label>
                                    <input type="text" id="minimum_amount" class="form-control"  name="minimum_amount" value="<?php echo e($method->min_amount); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Maximum Amount')); ?> <span class="text-danger">* (<?php echo e(__('admin.USD Amount')); ?>)</span></label>
                                    <input type="text" id="maximum_amount" class="form-control"  name="maximum_amount" value="<?php echo e($method->max_amount); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Withdraw Charge')); ?> <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">%</span>
                                        <input type="text" class="form-control" name="withdraw_charge" value="<?php echo e($method->withdraw_charge); ?>">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Description')); ?> <span class="text-danger">*</span></label>
                                    <textarea name="description" id="" cols="30" rows="10" class="summernote"><?php echo e($method->description); ?></textarea>
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

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/edit_withdraw_method.blade.php ENDPATH**/ ?>
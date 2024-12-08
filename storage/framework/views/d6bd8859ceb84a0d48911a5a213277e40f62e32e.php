<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Edit Slider')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Edit Slider')); ?></h1>
          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.partner.index')); ?>" class="btn btn-primary"><i class="fas fa-list"></i> <?php echo e(__('admin.All Slider')); ?></a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.partner.update',$partner->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row">

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Existing Image')); ?></label>
                                    <div>
                                        <img src="<?php echo e(asset($partner->logo)); ?>" class="w_200" alt="">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.New Image')); ?></label>
                                    <input type="file" class="form-control-file"  name="logo">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Link')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" id="link" class="form-control"  name="link" value="<?php echo e($partner->link); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Title')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" id="title" class="form-control"  name="title" value="<?php echo e($partner->title); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Sub Title')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" id="sub_title" class="form-control"  name="sub_title" value="<?php echo e($partner->sub_title); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Status')); ?> <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option <?php echo e($partner->status==1 ? 'selected': ''); ?> value="1"><?php echo e(__('admin.Active')); ?></option>
                                        <option <?php echo e($partner->status==0 ? 'selected': ''); ?>  value="0"><?php echo e(__('admin.Inactive')); ?></option>
                                    </select>
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

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/edit_partner.blade.php ENDPATH**/ ?>
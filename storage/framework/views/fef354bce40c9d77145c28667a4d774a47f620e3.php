<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Website ads')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Ads')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Ads')); ?></div>
            </div>
          </div>

            <div class="section-body">
                <div class="row mt-4">
                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <?php if($index == 0): ?>
                                <h4> <?php echo e(__('admin.Homepage Ads')); ?></h4>
                                <?php else: ?>
                                <h4> <?php echo e(__('admin.Shop Page Ads')); ?></h4>
                                <?php endif; ?>

                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(route('admin.update-ad', $ad->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Ad Image')); ?></label>
                                        <div>
                                            <img class="h_500" src="<?php echo e(asset($ad->image)); ?>" alt="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.New Ad Image')); ?></label>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><?php echo e(__('admin.Link')); ?></label>
                                        <input type="text" name="link" class="form-control" value="<?php echo e($ad->link); ?>">
                                    </div>
                                    <div class="form-group ">
                                        <label for=""><?php echo e(__('admin.Status')); ?></label>
                                        <select class="form-control" name="status" id="">
                                            <option value="1" <?php echo e($ad->status==1 ? 'selected':''); ?>><?php echo e(__('admin.Active')); ?></option>
                                            <option value="0" <?php echo e($ad->status==0 ? 'selected':''); ?>><?php echo e(__('admin.Inactive')); ?></option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/ad.blade.php ENDPATH**/ ?>
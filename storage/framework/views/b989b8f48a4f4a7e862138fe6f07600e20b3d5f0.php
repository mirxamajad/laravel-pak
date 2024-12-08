<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Frontend Validation Language')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Frontend Validation Language')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Frontend Validation Language')); ?></div>
            </div>
          </div>

        <div class="section-body">
            <div class="row mt-4">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo e(route('admin.update-validation-language')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="lang_code" value="<?php echo e(request()->get('lang_code')); ?>">
                                <table class="table table-bordered">
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td width="50%"><?php echo e($index); ?></td>
                                            <td width="50%">
                                                <input type="text" class="form-control" name="values[<?php echo e($index); ?>]"  value="<?php echo e($value); ?>">
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
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

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/website_validation_language.blade.php ENDPATH**/ ?>
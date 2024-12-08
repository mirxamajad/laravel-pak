<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Send Mail To Provider')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Send Mail To Provider')); ?></h1>
          </div>

        <div class="section-body">
            <a href="<?php echo e(route('admin.provider')); ?>" class="btn btn-primary"><i class="fas fa-list"></i> <?php echo e(__('admin.Provider List')); ?></a>
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h1><?php echo e(__('admin.Send Mail To Provider')); ?></h1>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('admin.send-mail-to-all-provider')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for=""><?php echo e(__('admin.Subject')); ?></label>
                                    <input type="text" name="subject" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for=""><?php echo e(__('admin.Message')); ?></label>
                                    <textarea name="message" id="message" class="summernote" cols="30" rows="10"></textarea>
                                </div>
                                <button class="btn btn-primary"><?php echo e(__('admin.Send Email')); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/send_email_to_all_provider.blade.php ENDPATH**/ ?>
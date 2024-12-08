<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Email Configuration')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Email Configuration')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
            </div>
          </div>
          <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.update-email-configuraion')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"><?php echo e(__('admin.Mail Host')); ?></label>
                                    <input type="text" name="mail_host" value="<?php echo e($email->mail_host); ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"><?php echo e(__('admin.Email')); ?></label>
                                        <input type="email" name="email" value="<?php echo e($email->email); ?>" class="form-control">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"><?php echo e(__('admin.SMTP User Name')); ?></label>
                                        <input type="text" name="smtp_username" value="<?php echo e($email->smtp_username); ?>" class="form-control">
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"><?php echo e(__('admin.SMTP Password')); ?></label>
                                        <input type="text" name="smtp_password" value="<?php echo e($email->smtp_password); ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mail_port"><?php echo e(__('admin.Mail Port')); ?></label>
                                        <input type="text" name="mail_port" value="<?php echo e($email->mail_port); ?>" class="form-control" id="mail_port">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mail_encryption"><?php echo e(__('admin.Mail Encryption')); ?></label>
                                        <select name="mail_encryption" id="mail_encryption" class="form-control">
                                            <option <?php echo e($email->mail_encryption=='tls' ? 'selected' :''); ?> value="tls"><?php echo e(__('admin.TLS')); ?></option>
                                            <option <?php echo e($email->mail_encryption=='ssl' ? 'selected' :''); ?> value="ssl"><?php echo e(__('admin.SSL')); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success"><?php echo e(__('admin.Update')); ?></button>
                        </form>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/email_configuration.blade.php ENDPATH**/ ?>
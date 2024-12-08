<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Clear Database')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Clear Database')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Clear Database')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                        <div class="alert alert-warning alert-has-icon">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                              <div class="alert-title"><?php echo e(__('admin.Warning')); ?></div>
                              <?php echo e(__('admin.If you want to use the software from scratch, you have to clear database. You do not need to remove the existing data one by one')); ?>

                            </div>
                          </div>

                          <button class="btn btn-danger" data-toggle="modal" data-target="#clearDatabaseModal"><?php echo e(__('admin.Clear Database')); ?></button>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

      <div class="modal fade" tabindex="-1" role="dialog" id="clearDatabaseModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><?php echo e(__('admin.Clear Database Confirmation')); ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><?php echo e(__('admin.Are you really want to clear this database?')); ?></p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <form id="deleteForm" action="<?php echo e(route('admin.delete-clear-database')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('admin.Close')); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Yes, Delete')); ?></button>
                </form>
            </div>
          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/clear_database.blade.php ENDPATH**/ ?>
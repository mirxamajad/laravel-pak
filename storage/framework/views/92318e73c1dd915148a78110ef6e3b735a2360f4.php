<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Email Template')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Email Template')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
            </div>
          </div>
          <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped" id="dataTable">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('admin.SN')); ?></th>
                                        <th><?php echo e(__('admin.Email Template')); ?></th>
                                        <th><?php echo e(__('admin.Subject')); ?></th>
                                        <th><?php echo e(__('admin.Action')); ?></th>
                                      </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$index); ?></td>
                                            <td><?php echo e(ucfirst($item->name)); ?></td>
                                            <td><?php echo e($item->subject); ?></td>
                                            <td>
                                                <a  href="<?php echo e(route('admin.edit-email-template',$item->id)); ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                          </div>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/email_template.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Social Link')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Social Link')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Social Link')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <a href="javascript:;" data-toggle="modal" data-target="#createIcon" class="btn btn-primary"><i class="fas fa-plus"></i> <?php echo e(__('admin.Add New')); ?></a>
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('admin.SN')); ?></th>
                                    <th><?php echo e(__('admin.Link')); ?></th>
                                    <th><?php echo e(__('admin.Media text')); ?></th>
                                    <th><?php echo e(__('admin.Icon')); ?></th>
                                    <th><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td><?php echo e($link->link); ?></td>
                                        <td><?php echo e($link->text); ?></td>
                                        <td> <i class="<?php echo e($link->icon); ?>"></i></td>
                                        <td>
                                        <a href="javascript:;" data-toggle="modal" data-target="#editIcon-<?php echo e($link->id); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>

                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($link->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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


      <!--Create Modal -->
      <div class="modal fade" id="createIcon" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                      <div class="modal-header">
                              <h5 class="modal-title"><?php echo e(__('admin.Create Social Link')); ?></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                          </div>
                  <div class="modal-body">
                      <div class="container-fluid">
                        <form action="<?php echo e(route('admin.social-link.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for=""><?php echo e(__('admin.Icon')); ?></label>
                                <input type="text" class="form-control custom-icon-picker" name="icon" autocomplete="off">
                            </div>
                            <div class="form-group">
                              <label for=""><?php echo e(__('admin.Media text')); ?></label>
                              <input type="text" class="form-control" name="text">
                          </div>
                            <div class="form-group">
                                <label for=""><?php echo e(__('admin.Link')); ?></label>
                                <input type="text" class="form-control" name="link">
                            </div>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('admin.Close')); ?></button>
                            <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Save')); ?></button>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      
      <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="editIcon-<?php echo e($link->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title"><?php echo e(__('admin.Edit Social Link')); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                        <form action="<?php echo e(route('admin.social-link.update',$link->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <label for=""><?php echo e(__('admin.Icon')); ?></label>
                                <input type="text" class="form-control custom-icon-picker" name="icon" value="<?php echo e($link->icon); ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                              <label for=""><?php echo e(__('admin.Media text')); ?></label>
                              <input type="text" class="form-control" name="text" value="<?php echo e($link->text); ?>">
                            </div>
                            <div class="form-group">
                                <label for=""><?php echo e(__('admin.Link')); ?></label>
                                <input type="text" class="form-control" name="link" value="<?php echo e($link->link); ?>">
                            </div>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('admin.Close')); ?></button>
                            <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
  "use strict";
    function deleteData(id){
        $("#deleteForm").attr("action",'<?php echo e(url("admin/social-link/")); ?>'+"/"+id)
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/footer_social_link.blade.php ENDPATH**/ ?>
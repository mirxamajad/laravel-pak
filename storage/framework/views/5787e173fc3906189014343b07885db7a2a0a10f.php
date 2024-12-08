<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Subscribers')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Subscribers')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
            </div>
          </div>

        <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h1><?php echo e(__('admin.Send Email to All Subscriber')); ?></h1>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('admin.each-subscriber-email')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for=""><?php echo e(__('admin.Subject')); ?></label>
                                    <input type="text" name="subject" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for=""><?php echo e(__('admin.Message')); ?></label>
                                    <textarea name="message" id="message" class="form-control text-area-5" cols="30" rows="10"></textarea>
                                </div>
                                <button class="btn btn-primary"><?php echo e(__('admin.Send Email')); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
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
                                    <th><?php echo e(__('admin.Email')); ?></th>
                                    <th><?php echo e(__('admin.Verified')); ?></th>
                                    <th><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $subscribers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $subscriber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td><?php echo e(html_decode($subscriber->email)); ?></td>
                                        <td>
                                            <?php if($subscriber->is_verified == 1): ?>
                                                <span class="badge badge-success"><?php echo e(__('admin.Yes')); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-danger"><?php echo e(__('admin.No')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                        <a href="javascript:;" data-toggle="modal" data-target="#sendEmailModal-<?php echo e($subscriber->id); ?>" class="btn btn-primary btn-sm"><i class="far fa-envelope" aria-hidden="true"></i></a>

                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($subscriber->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>


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

      <?php $__currentLoopData = $subscribers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $subscriber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <!-- Modal -->
      <div class="modal fade" id="sendEmailModal-<?php echo e($subscriber->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                      <div class="modal-header">
                              <h5 class="modal-title"><?php echo e(__('admin.Send To')); ?> : <?php echo e($subscriber->email); ?></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                          </div>
                  <div class="modal-body">
                      <div class="container-fluid">
                          <form action="<?php echo e(route('admin.specification-subscriber-email',$subscriber->id)); ?>" method="POST">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                  <label for=""><?php echo e(__('admin.Subject')); ?></label>
                                  <input type="text" name="subject" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label for=""><?php echo e(__('admin.Message')); ?></label>
                                  <textarea name="message" id="message" class="form-control text-area-5" cols="30" rows="10"></textarea>
                              </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('admin.Close')); ?></button>
                      <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Send Email')); ?></button>
                  </div>
                </form>
              </div>
          </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<script>
    "use strict";
    function deleteData(id){
        $("#deleteForm").attr("action",'<?php echo e(url("admin/delete-subscriber/")); ?>'+"/"+id)
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/subscriber.blade.php ENDPATH**/ ?>
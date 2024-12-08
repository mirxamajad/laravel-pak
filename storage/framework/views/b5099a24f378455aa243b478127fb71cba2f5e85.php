<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.User List')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.User List')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.User List')); ?></div>
            </div>
          </div>

          <div class="section-body">
              <a href="<?php echo e(route('admin.send-email-to-all-customer')); ?>" class="btn btn-primary"><?php echo e(__('admin.Send email to all user')); ?></a>
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th ><?php echo e(__('admin.SN')); ?></th>
                                    <th ><?php echo e(__('admin.Name')); ?></th>
                                    <th ><?php echo e(__('admin.Email')); ?></th>
                                    <th ><?php echo e(__('admin.Status')); ?></th>
                                    <th ><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td><?php echo e(html_decode($customer->name)); ?></td>
                                        <td><?php echo e(html_decode($customer->email)); ?></td>

                                        <td>
                                            <?php if($customer->status == 1): ?>
                                            <a href="javascript:;" onclick="manageCustomerStatus(<?php echo e($customer->id); ?>)">
                                                <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.InActive')); ?>" data-onstyle="success" data-offstyle="danger">
                                            </a>

                                            <?php else: ?>
                                            <a href="javascript:;" onclick="manageCustomerStatus(<?php echo e($customer->id); ?>)">
                                                <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.InActive')); ?>" data-onstyle="success" data-offstyle="danger">
                                            </a>

                                            <?php endif; ?>
                                        </td>
                                        <td>

                                        <a href="<?php echo e(route('admin.customer-show',$customer->id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                        <a href="javascript:;" data-toggle="modal" data-target="#sendEmailModal-<?php echo e($customer->id); ?>" class="btn btn-success btn-sm"><i class="far fa-envelope" aria-hidden="true"></i></a>

                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($customer->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>


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


      <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <!-- Modal -->
      <div class="modal fade" id="sendEmailModal-<?php echo e($customer->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                      <div class="modal-header">
                              <h5 class="modal-title"><?php echo e(__('admin.Send To')); ?> : <?php echo e($customer->email); ?></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                          </div>
                  <div class="modal-body">
                      <div class="container-fluid">
                          <form action="<?php echo e(route('admin.send-mail-to-single-user',$customer->id)); ?>" method="POST">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                  <label for=""><?php echo e(__('admin.Subject')); ?></label>
                                  <input type="text" name="subject" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label for=""><?php echo e(__('admin.Message')); ?></label>
                                  <textarea name="message" id="message" class="summernote" cols="30" rows="10"></textarea>
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


      <!-- Modal -->
      <div class="modal fade" id="canNotDeleteModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                      <div class="modal-body">
                          <?php echo e(__('admin.You can not delete this customer. Because there are one or more order and shop account has been created in this customer.')); ?>

                      </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('admin.Close')); ?></button>
                </div>
            </div>
        </div>
    </div>

<script>
    "use strict";
    function deleteData(id){
        $("#deleteForm").attr("action",'<?php echo e(url("admin/customer-delete/")); ?>'+"/"+id)
    }
    function manageCustomerStatus(id){
        var isDemo = "<?php echo e(env('APP_MODE')); ?>"
        if(isDemo == 'DEMO'){
            toastr.error('This Is Demo Version. You Can Not Change Anything');
            return;
        }
        $.ajax({
            type:"put",
            data: { _token : '<?php echo e(csrf_token()); ?>' },
            url:"<?php echo e(url('/admin/customer-status/')); ?>"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){


            }
        })
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/customer.blade.php ENDPATH**/ ?>
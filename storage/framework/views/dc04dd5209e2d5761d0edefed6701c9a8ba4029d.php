<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Seller Request Details')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Seller Request Details')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Seller Request Details')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td><?php echo e(__('admin.Company Logo')); ?></td>
                                <td>
                                    <img src="<?php echo e(asset($seller_request->logo)); ?>" class="rounded-circle" alt="" width="80px">
                                </td>
                            </tr>

                            <tr>
                                <td><?php echo e(__('admin.User name')); ?></td>
                                <td><a href="<?php echo e(route('admin.provider-show', $seller_request->user_id)); ?>"><?php echo e(html_decode($seller_request?->user?->name)); ?></a></td>
                            </tr>

                            <tr>
                                <td><?php echo e(__('admin.Company name')); ?></td>
                                <td><?php echo e(html_decode($seller_request->company_name)); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('admin.Email')); ?></td>
                                <td><?php echo e(html_decode($seller_request->email)); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('admin.Phone')); ?></td>
                                <td><?php echo e(html_decode($seller_request->phone)); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('admin.Address')); ?></td>
                                <td><?php echo e(html_decode($seller_request->address)); ?></td>
                            </tr>

                            <tr>
                                <td><?php echo e(__('admin.Document Type')); ?></td>
                                <td><?php echo e(html_decode($seller_request->document_type)); ?></td>
                            </tr>

                            <tr>
                                <td><?php echo e(__('admin.Document Type')); ?></td>
                                <td><a href="<?php echo e(asset($seller_request->document)); ?>" target="_blank"><?php echo e(__('admin.See here')); ?></a></td>
                            </tr>

                            <tr>
                                <td><?php echo e(__('admin.Status')); ?></td>
                                <td>
                                    <?php if($seller_request->status == 'pending'): ?>
                                    <span class="badge badge-danger"><?php echo e(__('admin.Pending')); ?></span>
                                    <?php elseif($seller_request->status == 'rejected'): ?>
                                    <span class="badge badge-danger"><?php echo e(__('admin.Rejected')); ?></span>
                                    <?php else: ?>
                                    <span class="badge badge-success"><?php echo e(__('admin.Approved')); ?></span>

                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>

                        <?php if($seller_request->status == 'pending'): ?>
                            <button class="btn btn-success" data-toggle="modal" data-target="#approvedModal"><?php echo e(__('admin.Make Approved')); ?></button>

                            <button class="btn btn-warning" data-toggle="modal" data-target="#rejectedModal"><?php echo e(__('admin.Make Rejected')); ?></button>

                        <?php endif; ?>

                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger" onclick="deleteData(<?php echo e($seller_request->id); ?>)"><?php echo e(__('admin.Delete')); ?></a>

                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

      <div class="modal fade" tabindex="-1" role="dialog" id="approvedModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><?php echo e(__('admin.Seller Request Approval')); ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><?php echo e(__('admin.Are you realy want to approved this request?')); ?></p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <form  action="<?php echo e(route('admin.approved-seller-request', $seller_request->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('admin.Close')); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Yes, Apporved')); ?></button>
                </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" tabindex="-1" role="dialog" id="rejectedModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><?php echo e(__('admin.Seller Request Rejected')); ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><?php echo e(__('admin.Are you realy want to rejected this request?')); ?></p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <form  action="<?php echo e(route('admin.reject-seller-request', $seller_request->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('admin.Close')); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Yes, Rejected')); ?></button>
                </form>
            </div>
          </div>
        </div>
      </div>






<script>
    "use strict";

    function deleteData(id){
        $("#deleteForm").attr("action",'<?php echo e(url("admin/delete-seller-request/")); ?>'+"/"+id)
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

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/seller_request_show.blade.php ENDPATH**/ ?>
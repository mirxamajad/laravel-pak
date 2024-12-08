<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Provider List')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Seller List')); ?></h1>

          </div>

          <div class="section-body">
              <a href="<?php echo e(route('admin.send-email-to-all-provider')); ?>" class="btn btn-primary"><?php echo e(__('admin.Send email to all seller')); ?></a>
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th ><?php echo e(__('admin.SN')); ?></th>
                                    <th ><?php echo e(__('admin.Seller Name')); ?></th>
                                    <th ><?php echo e(__('admin.Email')); ?></th>
                                    <th ><?php echo e(__('admin.Status')); ?></th>
                                    <th ><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td><?php echo e(html_decode($seller->name)); ?></td>
                                        <td><?php echo e(html_decode($seller->email)); ?></td>
                                        <td>
                                            <?php if($seller->status == 1): ?>
                                            <a href="javascript:;" onclick="manageCustomerStatus(<?php echo e($seller->id); ?>)">
                                                <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.Inctive')); ?>" data-onstyle="success" data-offstyle="danger">
                                            </a>

                                            <?php else: ?>
                                            <a href="javascript:;" onclick="manageCustomerStatus(<?php echo e($seller->id); ?>)">
                                                <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.InActive')); ?>" data-onstyle="success" data-offstyle="danger">
                                            </a>

                                            <?php endif; ?>
                                        </td>
                                        <td>

                                        <a href="<?php echo e(route('admin.provider-show',$seller->id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                        <a href="<?php echo e(route('admin.send-email-to-provider',$seller->id)); ?>" class="btn btn-success btn-sm"><i class="far fa-envelope" aria-hidden="true"></i></a>

                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($seller->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>


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



      <!-- Modal -->
      <div class="modal fade" id="canNotDeleteModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                      <div class="modal-body">
                          <?php echo e(__('admin.You can not delete this seller. Because there are one or more products and shop account has been created in this seller.')); ?>

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
        $("#deleteForm").attr("action",'<?php echo e(url("admin/provider-delete/")); ?>'+"/"+id)
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
            url:"<?php echo e(url('/admin/provider-status/')); ?>"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){


            }
        })
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/provider.blade.php ENDPATH**/ ?>
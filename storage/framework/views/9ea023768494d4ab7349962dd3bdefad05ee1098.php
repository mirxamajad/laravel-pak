<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.User Detail')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.User Detail')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.User Detail')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.customer-list')); ?>" class="btn btn-primary"><i class="fas fa-list"></i> <?php echo e(__('admin.User List')); ?></a>
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td><?php echo e(__('admin.Image')); ?></td>
                                <td>
                                    <?php if($customer->image): ?>
                                    <img src="<?php echo e(asset($customer->image)); ?>" class="rounded-circle" alt="" width="80px">
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('admin.Name')); ?></td>
                                <td><?php echo e(html_decode($customer->name)); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('admin.Email')); ?></td>
                                <td><?php echo e(html_decode($customer->email)); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('admin.Phone')); ?></td>
                                <td><?php echo e(html_decode($customer->phone)); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('admin.Address')); ?></td>
                                <td><?php echo e(html_decode($customer->address)); ?></td>
                            </tr>

                            <tr>
                                <td><?php echo e(__('admin.Status')); ?></td>
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
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

<script>
    "use strict";
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

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/show_customer.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Currency')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Currency')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Currency')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.currency.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> <?php echo e(__('admin.Add New')); ?></a>
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('admin.SN')); ?></th>
                                    <th><?php echo e(__('admin.Currency Name')); ?></th>
                                    <th><?php echo e(__('admin.Country Code')); ?></th>
                                    <th><?php echo e(__('admin.Currency Code')); ?></th>
                                    <th><?php echo e(__('admin.Currency Icon')); ?></th>
                                    <th><?php echo e(__('admin.Currency Rate')); ?></th>
                                    <th><?php echo e(__('admin.Default')); ?></th>
                                    <th><?php echo e(__('admin.Status')); ?></th>
                                    <th><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td><?php echo e($currency->currency_name); ?></td>
                                        <td><?php echo e($currency->country_code); ?></td>
                                        <td><?php echo e($currency->currency_code); ?></td>
                                        <td><?php echo e($currency->currency_icon); ?></td>
                                        <td><?php echo e($currency->currency_rate); ?></td>

                                        <td>
                                            <?php if($currency->is_default == 'Yes'): ?>
                                                <span class="badge badge-success"><?php echo e(__('admin.Yes')); ?></span>
                                            <?php else: ?>
                                            <span class="badge badge-danger"><?php echo e(__('admin.No')); ?></span>
                                            <?php endif; ?>
                                        </td>

                                        <td>
                                            <?php if($currency->status == 1): ?>
                                                <span class="badge badge-success"><?php echo e(__('admin.Active')); ?></span>
                                            <?php else: ?>
                                            <span class="badge badge-danger"><?php echo e(__('admin.In-active')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('admin.currency.edit',$currency->id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>

                                            <?php if($currency->id != 1): ?>
                                                <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($currency->id); ?>)" disabled><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <?php endif; ?>
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

<script>
    "use strict";
    function deleteData(id){
        $("#deleteForm").attr("action",'<?php echo e(url("admin/currency/")); ?>'+"/"+id)
    }
    function changeProductCategoryStatus(id){
        var isDemo = "<?php echo e(env('APP_MODE')); ?>"
        if(isDemo == 'DEMO'){
            toastr.error('This Is Demo Version. You Can Not Change Anything');
            return;
        }
        $.ajax({
            type:"put",
            data: { _token : '<?php echo e(csrf_token()); ?>' },
            url:"<?php echo e(url('/admin/category-status/')); ?>"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){


            }
        })
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/currency.blade.php ENDPATH**/ ?>
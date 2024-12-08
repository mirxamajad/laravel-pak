<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Category')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Category')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Category')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.category.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> <?php echo e(__('admin.Add New')); ?></a>
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('admin.SN')); ?></th>
                                    <th><?php echo e(__('admin.Name')); ?></th>
                                    <th><?php echo e(__('admin.Icon')); ?></th>
                                    <th><?php echo e(__('admin.Status')); ?></th>
                                    <th><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td><?php echo e($category->catlangadmin->name); ?></td>

                                        <td>
                                            <img src="<?php echo e(asset($category->icon)); ?>" class="w_80" alt="">
                                        </td>

                                        <td>
                                            <?php if($category->status == 1): ?>
                                            <a href="javascript:;" onclick="changeProductCategoryStatus(<?php echo e($category->id); ?>)">
                                                <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.Inactive')); ?>" data-onstyle="success" data-offstyle="danger">
                                            </a>

                                            <?php else: ?>
                                            <a href="javascript:;" onclick="changeProductCategoryStatus(<?php echo e($category->id); ?>)">
                                                <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.Inactive')); ?>" data-onstyle="success" data-offstyle="danger">
                                            </a>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                        <a href="<?php echo e(route('admin.category.edit', ['category' => $category->id, 'lang_code' => 'en'])); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>

                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($category->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                          <?php echo e(__('admin.You can not delete this category. Because there are one or more products has been created in this category.')); ?>

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
        $("#deleteForm").attr("action",'<?php echo e(url("admin/category/")); ?>'+"/"+id)
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

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/category.blade.php ENDPATH**/ ?>
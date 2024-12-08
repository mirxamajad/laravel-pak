<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Active Products')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Active Products')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Active Products')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.product.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> <?php echo e(__('admin.Add New')); ?></a>
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
                                    <th ><?php echo e(__('admin.Total Sale')); ?></th>
                                    <th ><?php echo e(__('admin.Category')); ?></th>
                                    <th ><?php echo e(__('admin.Status')); ?></th>
                                    <th ><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $active_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td><a href="<?php echo e(route('admin.product.edit',['product' => $product->id, 'lang_code' => 'en'])); ?>"><?php echo e(html_decode($product->productlangadmin->name)); ?></a></td>
                                        <?php
                                            $total_sold=App\Models\OrderItem::where('Product_id', $product->id)->get()->count();
                                        ?>
                                        <td><?php echo e($total_sold); ?></td>
                                        <td><?php echo e($product->category->catlangadmin->name); ?></td>


                                        <td>
                                            <?php if($product->status == 1): ?>
                                                <span class="badge badge-success"><?php echo e(__('admin.Active')); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-success"><?php echo e(__('admin.Inactive')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                        <a href="<?php echo e(route('admin.product.edit', ['product' => $product->id, 'lang_code' => 'en'])); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>

                                        <?php
                                            $order_item = App\Models\OrderItem::where('product_id', $product->id)->first();
                                        ?>

                                        <?php if($order_item): ?>
                                        <a href="javascript:;" data-toggle="modal" data-target="#canNotDeleteModal" class="btn btn-danger btn-sm""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <?php else: ?>
                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($product->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

      <!-- Modal -->
      <div class="modal fade" id="canNotDeleteModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                        <div class="modal-body">
                            <?php echo e(__('admin.You can not delete this product. Because there are one or more order has been created in this product.')); ?>

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
        $("#deleteForm").attr("action",'<?php echo e(url("admin/product/")); ?>'+"/"+id)
    }
    function changeProductStatus(id){
        var isDemo = "<?php echo e(env('APP_VERSION')); ?>"
        if(isDemo == 0){
            toastr.error('This Is Demo Version. You Can Not Change Anything');
            return;
        }
        $.ajax({
            type:"put",
            data: { _token : '<?php echo e(csrf_token()); ?>' },
            url:"<?php echo e(url('/admin/product-status/')); ?>"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){

            }
        })
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/active_product.blade.php ENDPATH**/ ?>
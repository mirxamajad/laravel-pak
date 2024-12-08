<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Product Review')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Product Review')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.product.index')); ?>"><?php echo e(__('admin.Product')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Product Review')); ?></div>
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
                                    <th width="5%"><?php echo e(__('admin.SN')); ?></th>
                                    <th width="30%"><?php echo e(__('admin.Product Name')); ?></th>
                                    <th width="30%"><?php echo e(__('admin.Review')); ?></th>
                                    <th width="5%"><?php echo e(__('admin.Product')); ?></th>
                                    <th width="15%"><?php echo e(__('admin.Status')); ?></th>
                                    <th width="5%"><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $productReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $productReview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td><a href="<?php echo e(route('admin.product.edit', ['product' => $productReview->product->id, 'lang_code' => 'en'])); ?>"><?php echo e(html_decode($productReview->product->productlangadmin->name)); ?></a></td>
                                        <td><?php echo e(html_decode($productReview->review)); ?></td>

                                        <td> <a target="_blank" class="btn btn-success btn-sm" href="<?php echo e($setting->frontend_url.'products/'. $productReview->product->slug); ?>"><?php echo e(__('admin.view')); ?></a></td>
                                        <td>

                                            <?php if($productReview->status == 1): ?>
                                            <a href="javascript:;" onclick="changeProductReviewStatus(<?php echo e($productReview->id); ?>)">
                                                <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.Inactive')); ?>" data-onstyle="success" data-offstyle="danger">
                                            </a>

                                            <?php else: ?>
                                            <a href="javascript:;" onclick="changeProductReviewStatus(<?php echo e($productReview->id); ?>)">
                                                <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.Inactive')); ?>" data-onstyle="success" data-offstyle="danger">
                                            </a>

                                            <?php endif; ?>
                                        </td>
                                        <td>

                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($productReview->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
        $("#deleteForm").attr("action",'<?php echo e(url("admin/product-review/")); ?>'+"/"+id)
    }
    function changeProductReviewStatus(id){
        var isDemo = "<?php echo e(env('APP_MODE')); ?>"
        if(isDemo == 'DEMO'){
            toastr.error('This Is Demo Version. You Can Not Change Anything');
            return;
        }
        $.ajax({
            type:"put",
            data: { _token : '<?php echo e(csrf_token()); ?>' },
            url:"<?php echo e(url('/admin/product-review-status/')); ?>"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){


            }
        })
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/product_review.blade.php ENDPATH**/ ?>
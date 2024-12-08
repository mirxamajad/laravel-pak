<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.FAQ')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.FAQ')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.FAQ')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.faq.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> <?php echo e(__('admin.Add New')); ?></a>
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th width="5%"><?php echo e(__('admin.SN')); ?></th>
                                    <th width="20%"><?php echo e(__('admin.Question')); ?></th>
                                    <th width="55%"><?php echo e(__('admin.Answer')); ?></th>
                                    <th width="10%"><?php echo e(__('admin.Status')); ?></th>
                                    <th width="10%"><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td><?php echo e($faq->faqlangadmin->question); ?></td>
                                        <td><?php echo clean($faq->faqlangadmin->answer); ?></td>
                                        <td>
                                            <?php if($faq->status == 1): ?>
                                            <a href="javascript:;" onclick="changeBlogCategoryStatus(<?php echo e($faq->id); ?>)">
                                                <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.Inactive')); ?>" data-onstyle="success" data-offstyle="danger">
                                            </a>

                                            <?php else: ?>
                                            <a href="javascript:;" onclick="changeBlogCategoryStatus(<?php echo e($faq->id); ?>)">
                                                <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.Inactive')); ?>" data-onstyle="success" data-offstyle="danger">
                                            </a>

                                            <?php endif; ?>
                                        </td>
                                        <td>

                                        <a href="<?php echo e(route('admin.faq.edit', ['faq' => $faq->id, 'lang_code' => 'en'])); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>

                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($faq->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
        $("#deleteForm").attr("action",'<?php echo e(url("admin/faq/")); ?>'+"/"+id)
    }
    function changeBlogCategoryStatus(id){
        var isDemo = "<?php echo e(env('APP_MODE')); ?>"
        if(isDemo == 'DEMO'){
            toastr.error('This Is Demo Version. You Can Not Change Anything');
            return;
        }
        $.ajax({
            type:"put",
            data: { _token : '<?php echo e(csrf_token()); ?>' },
            url:"<?php echo e(url('/admin/faq-status/')); ?>"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){


            }
        })
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/faq.blade.php ENDPATH**/ ?>
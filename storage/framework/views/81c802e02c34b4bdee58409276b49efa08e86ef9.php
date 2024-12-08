<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Edit Category')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Edit Category')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.category.index')); ?>"><?php echo e(__('admin.Category List')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Edit Category')); ?></div>
            </div>
          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-primary"><i class="fas fa-list"></i> <?php echo e(__('admin.Category List')); ?></a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.category.update',$category->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row">

                                <?php if(session()->get('admin_lang') == request()->get('lang_code')): ?>
                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Existing Icon')); ?></label>
                                    <div>
                                        <img src="<?php echo e(asset($category->icon)); ?>" class="w_80" alt="">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Icon')); ?></label>
                                    <input type="file" class="form-control-file"  name="icon">
                                </div>
                                <?php endif; ?>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Name')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control"  name="name" value="<?php echo e($category_language->name); ?>">

                                    <input type="hidden" name="lang_code" value="<?php echo e(request()->get('lang_code')); ?>">
                                </div>
                                <?php if(session()->get('admin_lang') == request()->get('lang_code')): ?>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Status')); ?> <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option <?php echo e($category->status==1 ? 'selected': ''); ?> value="1"><?php echo e(__('admin.Active')); ?></option>
                                        <option <?php echo e($category->status==0 ? 'selected': ''); ?>  value="0"><?php echo e(__('admin.InActive')); ?></option>
                                    </select>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

<script>
    "use strict";
    (function($) {
        "use strict";
        $(document).ready(function () {
            $("#name").on("focusout",function(e){
                $("#slug").val(convertToSlug($(this).val()));
            })
        });
    })(jQuery);

    function convertToSlug(Text)
        {
            return Text
                .toLowerCase()
                .replace(/[^\w ]+/g,'')
                .replace(/ +/g,'-');
        }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/edit_category.blade.php ENDPATH**/ ?>
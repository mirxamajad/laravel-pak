<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Create Slider')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Create Slider')); ?></h1>

          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.partner.index')); ?>" class="btn btn-primary"><i class="fas fa-list"></i> <?php echo e(__('admin.All Slider')); ?></a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.partner.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Image')); ?> <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  name="logo">
                                </div>
                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Link')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" id="link" class="form-control"  name="link">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Title')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" id="title" class="form-control"  name="title">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Sub Title')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" id="sub_title" class="form-control"  name="sub_title">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Status')); ?> <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1"><?php echo e(__('admin.Active')); ?></option>
                                        <option value="0"><?php echo e(__('admin.Inactive')); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary"><?php echo e(__('admin.Save')); ?></button>
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

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/create_partner.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Create Product')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Create Product')); ?></h1>
          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.product.index')); ?>" class="btn btn-primary"><i class="fas fa-list"></i> <?php echo e(__('admin.Products')); ?></a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.product.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Thumbnail Image')); ?> <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  name="thumb_image">
                                </div>


                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Category')); ?> <span class="text-danger">*</span></label>
                                    <select name="category" class="form-control select2" id="category">
                                        <option value=""><?php echo e(__('admin.Select Category')); ?></option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->catlangadmin->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Author')); ?> <span class="text-danger">*</span></label>
                                    <select name="author" class="form-control select2" id="author">
                                        <option value=""><?php echo e(__('admin.Select Author')); ?></option>
                                        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($author->id); ?>"><?php echo e($author->name); ?> - <?php echo e($author->user_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Name')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control"  name="name" value="<?php echo e(old('name')); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Slug')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" id="slug" class="form-control"  name="slug" value="<?php echo e(old('slug')); ?>">
                                </div>


                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Regular price')); ?> (<?php echo e(__('admin.USD')); ?>) <span class="text-danger">* </span></label>
                                   <input type="text" class="form-control" name="regular_price" value="<?php echo e(old('regular_price')); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Offer price')); ?> (<?php echo e(__('admin.USD')); ?>)</label>
                                   <input type="text" class="form-control" name="offer_price" value="<?php echo e(old('offer_price')); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Short Description')); ?> <span class="text-danger">*</span></label>
                                    <textarea name="short_description" id="" cols="30" rows="10" class="form-control text-area-5"><?php echo e(old('short_description')); ?></textarea>
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Description')); ?> <span class="text-danger">*</span></label>
                                    <textarea name="description" id="" cols="30" rows="10" class="summernote"><?php echo e(old('description')); ?></textarea>
                                </div>


                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Status')); ?> <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1"><?php echo e(__('admin.Active')); ?></option>
                                        <option value="0"><?php echo e(__('admin.Inactive')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Tags')); ?> (<?php echo e(__('admin.Press the comma for new tag')); ?>)</label> <br>
                                   <input type="text" class="form-control tags" name="tags" value="<?php echo e(old('tags')); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.SEO Title')); ?></label>
                                   <input type="text" class="form-control" name="seo_title" value="<?php echo e(old('seo_title')); ?>">
                                </div>

                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.SEO Description')); ?></label>
                                    <textarea name="seo_description" id="" cols="30" rows="10" class="form-control text-area-5"><?php echo e(old('seo_description')); ?></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label><?php echo e(__('admin.Highlight')); ?></label>
                                    <div>
                                        <input type="checkbox"name="popular_item" id="popular_item"> <label for="popular_item" class="mr-3" ><?php echo e(__('admin.Popular')); ?></label>

                                        <input type="checkbox" name="trending_item" id="trending_item"> <label for="trending_item" class="mr-3" ><?php echo e(__('admin.Trending')); ?></label>

                                        <input type="checkbox" name="featured_item" id="featured_item"> <label for="featured_item" class="mr-3" ><?php echo e(__('admin.Featured')); ?></label>


                                    </div>
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
        var specification = true;
        $(document).ready(function () {
            $("#name").on("keyup",function(e){
                $("#slug").val(convertToSlug($(this).val()));
            })
        });
    })(jQuery);

    function convertToSlug(Text){
            return Text
                .toLowerCase()
                .replace(/[^\w ]+/g,'')
                .replace(/ +/g,'-');
    }


</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/create_product.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.SEO Setup')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.SEO Setup')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.SEO Setup')); ?></div>
            </div>
          </div>

          <div class="section-body">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link <?php echo e($index == 0  ? 'active' : ''); ?>" id="error-tab-<?php echo e($page->id); ?>" data-toggle="tab" href="#errorTab-<?php echo e($page->id); ?>" role="tab" aria-controls="errorTab-<?php echo e($page->id); ?>" aria-selected="true"><?php echo e($page->page_name); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9">
                                <div class="border rounded">
                                    <div class="tab-content no-padding" id="settingsContent">
                                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="tab-pane fade <?php echo e($index == 0  ? 'show active' : ''); ?>" id="errorTab-<?php echo e($page->id); ?>" role="tabpanel" aria-labelledby="error-tab-<?php echo e($page->id); ?>">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-seo-setup',$page->id)); ?>" method="POST">
                                                            <?php echo method_field('PUT'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for=""><?php echo e(__('admin.SEO Title')); ?></label>
                                                                        <input type="text" name="seo_title" class="form-control" value="<?php echo e($page->seo_title); ?>">
                                                                    </div>
                                                                </div>



                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for=""><?php echo e(__('admin.SEO Description')); ?></label>
                                                                        <textarea name="seo_description" id="" cols="30" rows="5" class="form-control text-area-5"><?php echo e($page->seo_description); ?></textarea>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/seo_setup.blade.php ENDPATH**/ ?>
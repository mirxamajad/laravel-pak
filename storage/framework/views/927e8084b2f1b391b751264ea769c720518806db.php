<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Counter')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Counter')); ?></h1>
          </div>

          <div class="section-body">
            <div class="row mt-4">

                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.update-counter')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <input type="hidden" name="lang_code" value="<?php echo e(request()->get('lang_code')); ?>">
                            <?php
                                $home1= false;
                                if($setting->selected_theme == 0 || $setting->selected_theme == 1){
                                    $home1 = true;
                                }
                            ?>


                            <div class="row mt-3">

                                    <div class="col-md-6">

                                        <?php if(session()->get('admin_lang') == request()->get('lang_code')): ?>
                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Item one icon')); ?></label>
                                            <div>
                                                <img class="icon_w100" src="<?php echo e(asset($counter->counter_icon1)); ?>" alt="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(__('admin.New icon')); ?> </label>
                                            <input type="file" class="form-control-file" name="counter_icon1">
                                        </div>



                                        <div class="form-group ">
                                            <label><?php echo e(__('admin.Counter one quantity')); ?> <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control"  name="counter1_value" value="<?php echo e($counter->counter1_value); ?>">
                                        </div>
                                        <?php endif; ?>
                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Counter one title')); ?> <span class="text-danger">*</span></label>
                                            <input type="text" id="counter1_title" class="form-control"  name="counter1_title" value="<?php echo e($counter->counter1_title); ?>">
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <?php if(session()->get('admin_lang') == request()->get('lang_code')): ?>
                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Item two icon')); ?></label>
                                            <div>
                                                <img class="icon_w100" src="<?php echo e(asset($counter->counter_icon2)); ?>" alt="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(__('admin.New icon')); ?> </label>
                                            <input type="file" class="form-control-file" name="counter_icon2">
                                        </div>



                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Counter two quantity')); ?> <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control"  name="counter2_value" value="<?php echo e($counter->counter2_value); ?>">
                                        </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Counter two title')); ?> <span class="text-danger">*</span></label>
                                            <input type="text" id="counter2_title" class="form-control"  name="counter2_title" value="<?php echo e($counter->counter2_title); ?>">
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <?php if(session()->get('admin_lang') == request()->get('lang_code')): ?>
                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Item three icon')); ?></label>
                                            <div>
                                                <img class="icon_w100" src="<?php echo e(asset($counter->counter_icon3)); ?>" alt="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(__('admin.New icon')); ?> </label>
                                            <input type="file" class="form-control-file" name="counter_icon3">
                                        </div>



                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Counter three quantity')); ?> <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control"  name="counter3_value" value="<?php echo e($counter->counter3_value); ?>">
                                        </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Counter three title')); ?> <span class="text-danger">*</span></label>
                                            <input type="text" id="counter3_title" class="form-control"  name="counter3_title" value="<?php echo e($counter->counter3_title); ?>">
                                        </div>

                                    </div>


                                    <div class="col-md-6">

                                        <?php if(session()->get('admin_lang') == request()->get('lang_code')): ?>
                                        <div class="form-group col-12">
                                            <label><?php echo e(__('admin.Item four icon')); ?></label>
                                            <div>
                                                <img class="icon_w100" src="<?php echo e(asset($counter->counter_icon4)); ?>" alt="">
                                            </div>
                                        </div>

                                        <div class="form-group col-12">
                                            <label><?php echo e(__('admin.New icon')); ?> </label>
                                            <input type="file" class="form-control-file" name="counter_icon4">
                                        </div>


                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Counter four quantity')); ?> <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control"  name="counter4_value" value="<?php echo e($counter->counter4_value); ?>">
                                        </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <label><?php echo e(__('admin.Counter four title')); ?> <span class="text-danger">*</span></label>
                                            <input type="text" id="counter4_title" class="form-control"  name="counter4_title" value="<?php echo e($counter->counter4_title); ?>">
                                        </div>

                                    </div>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\Game_topup\game_topup\admin_panel\pak_game\resources\views/admin/create_counter.blade.php ENDPATH**/ ?>
<?php
    $setting = App\Models\Setting::first();
?>


<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="<?php echo e(route('seller.dashboard')); ?>"><?php echo e($setting->sidebar_lg_header); ?></a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="<?php echo e(route('seller.dashboard')); ?>"><?php echo e($setting->sidebar_sm_header); ?></a>
      </div>
      <ul class="sidebar-menu">
          <li class="<?php echo e(Route::is('seller.dashboard') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('seller.dashboard')); ?>"><i class="fas fa-home"></i> <span><?php echo e(__('admin.Dashboard')); ?></span></a></li>

          <li class="nav-item dropdown <?php echo e(Route::is('seller.all-booking') || Route::is('seller.order-show') || Route::is('seller.pending-order') || Route::is('seller.complete-order') || Route::is('seller.complete-request') || Route::is('seller.completed-booking') || Route::is('seller.declined-booking')  ? 'active' : ''); ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-cart"></i><span><?php echo e(__('admin.All Orders')); ?></span></a>

                <ul class="dropdown-menu">
                    <li class="<?php echo e(Route::is('seller.all-booking') || Route::is('seller.order-show') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('seller.all-booking')); ?>"><?php echo e(__('admin.Order Items')); ?></a></li>

                    <li class="<?php echo e(Route::is('seller.pending-order') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('seller.pending-order')); ?>"><?php echo e(__('admin.Pending Items')); ?></a></li>

                    <li class="<?php echo e(Route::is('seller.complete-order') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('seller.complete-order')); ?>"><?php echo e(__('admin.Complete Items')); ?></a></li>

                </ul>
          </li>

          <li class="nav-item dropdown <?php echo e(Route::is('seller.product.*') || Route::is('seller.active.product') || Route::is('seller.pending.product') || Route::is('seller.product-variant') || Route::is('seller.product.create') || Route::is('seller.product-review.*') ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span><?php echo e(__('admin.Manage Product')); ?></span></a>

            <ul class="dropdown-menu">
                <li class="<?php echo e(Route::is('seller.product.create') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('seller.product.create')); ?>"><?php echo e(__('admin.Create Product')); ?></a></li>

                <li class="<?php echo e(Route::is('seller.product.*') || Route::is('seller.product-variant') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('seller.product.index')); ?>"><?php echo e(__('admin.All Product')); ?></a></li>

                <li class="<?php echo e(Route::is('seller.active.product') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('seller.active.product')); ?>"><?php echo e(__('admin.Active Product')); ?></a></li>

                <li class="<?php echo e(Route::is('seller.pending.product') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('seller.pending.product')); ?>"><?php echo e(__('admin.Pending Product')); ?></a></li>
            </ul>
          </li>


          <li class="<?php echo e(Route::is('seller.my-withdraw.index') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('seller.my-withdraw.index')); ?>"><i class="far fa-newspaper"></i> <span><?php echo e(__('admin.My Withdraw')); ?></span></a></li>

          <?php if(checkModule('SupportTicket')): ?>
            <?php echo $__env->make('supportticket::seller.sideber', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endif; ?>

          <?php if(checkModule('KYC')): ?>
            <li class="<?php echo e(Route::is('seller.kyc') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('seller.kyc')); ?>"><i class="fas fa-certificate"></i> <span><?php echo e(__('admin.KYC Verifaction')); ?></span></a></li>
          <?php endif; ?>
        </ul>

    </aside>
  </div>
<?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/seller/sidebar.blade.php ENDPATH**/ ?>
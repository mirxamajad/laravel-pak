<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Provider Details')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Seller Details')); ?></h1>

          </div>

          <div class="section-body">
            <a href="<?php echo e(route('admin.provider')); ?>" class="btn btn-primary"><i class="fas fa-list"></i> <?php echo e(__('admin.Seller List')); ?></a>
            <div class="row mt-5">
                <div class="col-md-3">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4><?php echo e(__('admin.Total Product Sold')); ?></h4>
                      </div>
                      <div class="card-body">
                       <?php echo e($total_sold_product); ?>

                      </div>
                    </div>
                  </div>
                </div>

                    <div class="col-md-3">
                        <a href="<?php echo e(route('admin.provider-withdraw',['provider_id' => $seller->id])); ?>">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                <i class="far fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4><?php echo e(__('admin.Total Withdraw')); ?></h4>
                                </div>
                                <div class="card-body">
                                    <?php echo e($setting->currency_icon); ?><?php echo e($total_withdraw); ?>

                                </div>
                                </div>
                            </div>
                        </a>
                    </div>



                <div class="col-md-3">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                      <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4><?php echo e(__('admin.Current Balance')); ?></h4>
                      </div>
                      <div class="card-body">
                        <?php echo e($setting->currency_icon); ?><?php echo e($current_balance); ?>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo e(route('admin.product.index', ['author_id' => $seller->id])); ?>">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                      <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4><?php echo e(__('admin.Total Product')); ?></h4>
                      </div>
                      <div class="card-body">
                        <?php echo e($total_product); ?>

                      </div>
                    </div>
                  </div>
                </a>
                </div>
              </div>
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                  <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <?php if($seller->image): ?>
                        <img alt="image" src="<?php echo e(asset($seller->image)); ?>" class="rounded-circle profile-widget-picture">
                        <?php else: ?>
                        <img alt="image" src="<?php echo e(asset($default_avatar)); ?>" class="rounded-circle profile-widget-picture">
                        <?php endif; ?>
                      <div class="profile-widget-items">
                        <div class="profile-widget-item">
                          <div class="profile-widget-item-label"><?php echo e(__('admin.Joined at')); ?></div>
                          <div class="profile-widget-item-value"><?php echo e($seller->created_at->format('d M Y')); ?></div>
                        </div>
                        <div class="profile-widget-item">
                          <div class="profile-widget-item-label"><?php echo e(__('admin.Total Balance')); ?></div>
                          <div class="profile-widget-item-value"><?php echo e($setting->currency_icon); ?><?php echo e($total_balance); ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="profile-widget-description">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td><?php echo e(__('admin.Name')); ?></td>
                                    <td><?php echo e(html_decode($seller->name)); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('admin.Email')); ?></td>
                                    <td><?php echo e(html_decode($seller->email)); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('admin.Phone')); ?></td>
                                    <td><?php echo e(html_decode($seller->phone)); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('admin.User Status')); ?></td>
                                    <td>
                                        <?php if($seller->status == 1): ?>
                                        <a href="javascript:;" onclick="manageCustomerStatus(<?php echo e($seller->id); ?>)">
                                            <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.InActive')); ?>" data-onstyle="success" data-offstyle="danger">
                                        </a>
                                        <?php else: ?>
                                        <a href="javascript:;" onclick="manageCustomerStatus(<?php echo e($seller->id); ?>)">
                                            <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Active')); ?>" data-off="<?php echo e(__('admin.InActive')); ?>" data-onstyle="success" data-offstyle="danger">
                                        </a>
                                    <?php endif; ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>


                  </div>

                  <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1><?php echo e(__('admin.Seller Action')); ?></h1>
                            </div>
                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col-12">
                                        <a target="_blank" href="<?php echo e($setting->frontend_url.'sellers/'. $seller->user_name); ?>" class="btn btn-success btn-block btn-lg my-2"><?php echo e(__('admin.Go to Seller Front Page')); ?></a>
                                    </div>

                                    <div class="col-12">
                                        <a href="<?php echo e(route('admin.product-review.index', ['author_id' => $seller->id])); ?>" class="btn btn-primary btn-block btn-lg my-2"><?php echo e(__('admin.Seller Reviews')); ?></a>
                                    </div>



                                    <div class="col-12">
                                        <a href="<?php echo e(route('admin.send-email-to-provider', $seller->id)); ?>" class="btn btn-warning btn-block btn-lg my-2"><?php echo e(__('admin.Send Email')); ?></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>


                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="" action="<?php echo e(route('admin.provider-update',$seller->id)); ?>">
                            <?php echo method_field('put'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="card-header">
                                <h4><?php echo e(__('admin.Edit Profile')); ?></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label><?php echo e(__('admin.Name')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="<?php echo e(html_decode($seller->name)); ?>" name="name">
                                    </div>


                                    <div class="form-group col-6">
                                        <label><?php echo e(__('admin.Email')); ?> <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" value="<?php echo e(html_decode($seller->email)); ?>" name="email" readonly>
                                    </div>

                                    <div class="form-group col-6">
                                        <label><?php echo e(__('admin.Phone')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="<?php echo e(html_decode($seller->phone)); ?>" name="phone">
                                    </div>




                                    <div class="form-group col-6">
                                        <label><?php echo e(__('admin.Address')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="<?php echo e(html_decode($seller->address)); ?>" name="address">
                                    </div>

                                </div>
                                <button class="btn btn-primary" type="submit"><?php echo e(__('admin.Save Changes')); ?></button>
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

    function manageCustomerStatus(id){
        var isDemo = "<?php echo e(env('APP_MODE')); ?>"
        if(isDemo == 'DEMO'){
            toastr.error('This Is Demo Version. You Can Not Change Anything');
            return;
        }
        $.ajax({
            type:"put",
            data: { _token : '<?php echo e(csrf_token()); ?>' },
            url:"<?php echo e(url('/admin/provider-status/')); ?>"+"/"+id,
            success:function(response){
                toastr.success(response)
            },
            error:function(err){

            }
        })
    }


</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/show_provider.blade.php ENDPATH**/ ?>
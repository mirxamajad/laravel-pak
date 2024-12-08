<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Payment Methods')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Payment Methods')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
            </div>
          </div>

        <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3">
                                    <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">


                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link active" id="paypal-tab" data-toggle="tab" href="#paypalTab" role="tab" aria-controls="paypalTab" aria-selected="true"><?php echo e(__('admin.Paypal')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="stripe-tab" data-toggle="tab" href="#stripeTab" role="tab" aria-controls="stripeTab" aria-selected="true"><?php echo e(__('admin.Stripe')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="razorpay-tab" data-toggle="tab" href="#razorpayTab" role="tab" aria-controls="razorpayTab" aria-selected="true"><?php echo e(__('admin.Razorpay')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="flutterwave-tab" data-toggle="tab" href="#flutterwaveTab" role="tab" aria-controls="flutterwaveTab" aria-selected="true"><?php echo e(__('admin.Flutterwave')); ?></a>
                                        </li>



                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="mollie-tab" data-toggle="tab" href="#mollieTab" role="tab" aria-controls="mollieTab" aria-selected="true"><?php echo e(__('admin.Mollie')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="pay-stack-tab" data-toggle="tab" href="#payStackTab" role="tab" aria-controls="payStackTab" aria-selected="true"><?php echo e(__('admin.PayStack')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="instamojo-tab" data-toggle="tab" href="#instamojoTab" role="tab" aria-controls="instamojoTab" aria-selected="true"><?php echo e(__('admin.Instamojo')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="bank-account-tab" data-toggle="tab" href="#bankAccountTab" role="tab" aria-controls="bankAccountTab" aria-selected="true"><?php echo e(__('admin.Bank Account')); ?></a>
                                        </li>



                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-9">
                                    <div class="border rounded">
                                        <div class="tab-content no-padding" id="settingsContent">

                                            <div class="tab-pane fade show active" id="paypalTab" role="tabpanel" aria-labelledby="paypal-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-paypal')); ?>" method="POST" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Paypal Status')); ?></label>
                                                                <div>
                                                                    <?php if($paypal->status == 1): ?>
                                                                        <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                        <?php else: ?>
                                                                        <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Account Mode')); ?></label>
                                                                <select name="account_mode" id="account_mode" class="form-control">
                                                                    <option <?php echo e($paypal->account_mode == 'live' ? 'selected' : ''); ?> value="live"><?php echo e(__('admin.Live')); ?></option>
                                                                    <option <?php echo e($paypal->account_mode == 'sandbox' ? 'selected' : ''); ?> value="sandbox"><?php echo e(__('admin.Sandbox')); ?></option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Currency Name')); ?></label>
                                                                <select name="currency_name" id="" class="form-control select2">
                                                                    <option value=""><?php echo e(__('admin.Select Currency')); ?>

                                                                  </option>
                                                                  <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option <?php echo e($paypal->currency_id == $currency->id ? 'selected' : ''); ?> value="<?php echo e($currency->id); ?>"><?php echo e($currency->currency_name); ?>

                                                                  </option>
                                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Paypal Client Id')); ?></label>
                                                                <input type="text" class="form-control" name="paypal_client_id" value="<?php echo e($paypal->client_id); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Paypal Secret Key')); ?></label>
                                                                <input type="text" class="form-control" name="paypal_secret_key" value="<?php echo e($paypal->secret_id); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <div>
                                                                    <img src="<?php echo e(asset($paypal->image)); ?>" alt="" class="w_200">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <input type="file" name="image" class="form-control-file">
                                                            </div>

                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="stripeTab" role="tabpanel" aria-labelledby="stripe-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-stripe')); ?>" method="POST" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Stripe Status')); ?></label>
                                                                <div>
                                                                    <?php if($stripe->status == 1): ?>
                                                                        <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                        <?php else: ?>
                                                                        <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Currency Name')); ?></label>
                                                                <select name="currency_name" id="" class="form-control select2">
                                                                    <option value=""><?php echo e(__('admin.Select Currency')); ?>

                                                                  </option>
                                                                  <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option <?php echo e($stripe->currency_id == $currency->id ? 'selected' : ''); ?> value="<?php echo e($currency->id); ?>"><?php echo e($currency->currency_name); ?>

                                                                  </option>
                                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Stripe Key')); ?></label>
                                                                <input type="text" class="form-control" name="stripe_key" value="<?php echo e($stripe->stripe_key); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Stripe Secret')); ?></label>
                                                                <input type="text" class="form-control" name="stripe_secret" value="<?php echo e($stripe->stripe_secret); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <div>
                                                                    <img src="<?php echo e(asset($stripe->image)); ?>" alt="" class="w_200">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <input type="file" name="image" class="form-control-file">
                                                            </div>





                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="razorpayTab" role="tabpanel" aria-labelledby="razorpay-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-razorpay')); ?>" method="POST" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Razorpay Status')); ?></label>
                                                                <div>
                                                                    <?php if($razorpay->status == 1): ?>
                                                                        <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                        <?php else: ?>
                                                                        <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Razorpay Key')); ?></label>
                                                                <input type="text" class="form-control" name="razorpay_key" value="<?php echo e($razorpay->key); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Razorpay Secret Key')); ?></label>
                                                                <input type="text" class="form-control" name="razorpay_secret" value="<?php echo e($razorpay->secret_key); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Name')); ?></label>
                                                                <input type="text" class="form-control" name="name" value="<?php echo e($razorpay->name); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Description')); ?></label>
                                                                <input type="text" class="form-control" name="description" value="<?php echo e($razorpay->description); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Currency Name')); ?></label>
                                                                <select name="currency_name" id="" class="form-control select2">
                                                                    <option value=""><?php echo e(__('admin.Select Currency')); ?>

                                                                  </option>
                                                                  <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option <?php echo e($razorpay->currency_id == $currency->id ? 'selected' : ''); ?> value="<?php echo e($currency->id); ?>"><?php echo e($currency->currency_name); ?>

                                                                  </option>
                                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Current Image')); ?></label>
                                                                <div>
                                                                    <img src="<?php echo e(asset($razorpay->image)); ?>" width="200px" alt="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.New Image')); ?></label>
                                                                <input type="file" class="form-control-file" name="image">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Theme Color')); ?></label>
                                                                <input type="color" value="<?php echo e($razorpay->color); ?>" class="form-control" name="theme_color">
                                                            </div>

                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="flutterwaveTab" role="tabpanel" aria-labelledby="flutterwave-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-flutterwave')); ?>" method="POST" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Flutterwave Status')); ?></label>
                                                                <div>
                                                                    <?php if($flutterwave->status == 1): ?>
                                                                        <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                        <?php else: ?>
                                                                        <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Public Key')); ?></label>
                                                                <input type="text" class="form-control" name="public_key" value="<?php echo e($flutterwave->public_key); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Secret Key')); ?></label>
                                                                <input type="text" class="form-control" name="secret_key" value="<?php echo e($flutterwave->secret_key); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Title')); ?></label>
                                                                <input type="text" class="form-control" name="title" value="<?php echo e($flutterwave->title); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Currency Name')); ?></label>
                                                                <select name="currency_name" id="" class="form-control select2">
                                                                    <option value=""><?php echo e(__('admin.Select Currency')); ?>

                                                                  </option>
                                                                  <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option <?php echo e($flutterwave->currency_id == $currency->id ? 'selected' : ''); ?> value="<?php echo e($currency->id); ?>"><?php echo e($currency->currency_name); ?>

                                                                  </option>
                                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Current Image')); ?></label>
                                                                <div>
                                                                    <img src="<?php echo e(asset($flutterwave->logo)); ?>" width="200px" alt="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.New Image')); ?></label>
                                                                <input type="file" class="form-control-file" name="image">
                                                            </div>

                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="mollieTab" role="tabpanel" aria-labelledby="mollie-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-mollie')); ?>" method="POST" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Mollie Status')); ?></label>
                                                                <div>
                                                                    <?php if($paystackAndMollie->mollie_status == 1): ?>
                                                                        <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                        <?php else: ?>
                                                                        <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Mollie Key')); ?></label>
                                                                <input type="text" class="form-control" name="mollie_key" value="<?php echo e($paystackAndMollie->mollie_key); ?>">
                                                            </div>



                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Currency Name')); ?></label>
                                                                <select name="mollie_currency_name" id="" class="form-control select2">
                                                                    <option value=""><?php echo e(__('admin.Select Currency')); ?>

                                                                  </option>
                                                                  <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option <?php echo e($paystackAndMollie->mollie_currency_id == $currency->id ? 'selected' : ''); ?> value="<?php echo e($currency->id); ?>"><?php echo e($currency->currency_name); ?>

                                                                  </option>
                                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <div>
                                                                    <img src="<?php echo e(asset($paystackAndMollie->mollie_image)); ?>" alt="" class="w_200">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <input type="file" name="image" class="form-control-file">
                                                            </div>

                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="payStackTab" role="tabpanel" aria-labelledby="pay-stack-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-paystack')); ?>" method="POST" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.PayStack Status')); ?></label>
                                                                <div>
                                                                    <?php if($paystackAndMollie->paystack_status == 1): ?>
                                                                        <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                        <?php else: ?>
                                                                        <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Public Key')); ?></label>
                                                                <input type="text" name="paystack_public_key" class="form-control" value="<?php echo e($paystackAndMollie->paystack_public_key); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Secret Key')); ?></label>
                                                                <input type="text" name="paystack_secret_key" class="form-control" value="<?php echo e($paystackAndMollie->paystack_secret_key); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Currency Name')); ?></label>
                                                                <select name="paystack_currency_name" id="" class="form-control select2">
                                                                    <option value=""><?php echo e(__('admin.Select Currency')); ?>

                                                                  </option>
                                                                  <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option <?php echo e($paystackAndMollie->paystack_currency_id == $currency->id ? 'selected' : ''); ?> value="<?php echo e($currency->id); ?>"><?php echo e($currency->currency_name); ?>

                                                                  </option>
                                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <div>
                                                                    <img src="<?php echo e(asset($paystackAndMollie->paystack_image)); ?>" alt="" class="w_200">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <input type="file" name="image" class="form-control-file">
                                                            </div>

                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="instamojoTab" role="tabpanel" aria-labelledby="instamojo-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-instamojo')); ?>" method="POST" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Instamojo Status')); ?></label>
                                                                <div>
                                                                    <?php if($instamojo->status == 1): ?>
                                                                        <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                        <?php else: ?>
                                                                        <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Account Mode')); ?></label>
                                                                <select name="account_mode" id="account_mode" class="form-control">
                                                                    <option value="Sandbox"><?php echo e(__('admin.Sandbox')); ?></option>
                                                                    <option value="Live"><?php echo e(__('admin.Live')); ?></option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Api Key')); ?></label>
                                                                <input type="text" name="api_key" class="form-control" value="<?php echo e($instamojo->api_key); ?>">
                                                            </div>



                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Auth Token')); ?></label>
                                                                <input type="text" name="auth_token" class="form-control" value="<?php echo e($instamojo->auth_token); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Currency Name')); ?></label>
                                                                <select name="currency_name" id="" class="form-control select2">
                                                                    <option value=""><?php echo e(__('admin.Select Currency')); ?>

                                                                  </option>
                                                                  <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option <?php echo e($instamojo->currency_id == $currency->id ? 'selected' : ''); ?> value="<?php echo e($currency->id); ?>"><?php echo e($currency->currency_name); ?>

                                                                  </option>
                                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <div>
                                                                    <img src="<?php echo e(asset($instamojo->image)); ?>" alt="" class="w_200">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <input type="file" name="image" class="form-control-file">
                                                            </div>

                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="bankAccountTab" role="tabpanel" aria-labelledby="bank-account-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-bank')); ?>" method="POST" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Bank Payment Status')); ?></label>
                                                                <div>
                                                                    <?php if($bank->status == 1): ?>
                                                                        <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                        <?php else: ?>
                                                                        <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="status">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Account Information')); ?></label>
                                                                <textarea name="account_info" id="" cols="30" rows="10" class="text-area-5 form-control"><?php echo e($bank->account_info); ?></textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <div>
                                                                    <img src="<?php echo e(asset($bank->image)); ?>" alt="" class="w_200">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Image')); ?></label>
                                                                <input type="file" name="image" class="form-control-file">
                                                            </div>

                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
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

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/payment_method.blade.php ENDPATH**/ ?>
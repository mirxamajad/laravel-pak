<?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
        <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="card card-primary">
              <div class="card-header"><h4><?php echo e(__('admin.Seller Login')); ?></h4></div>

              <div class="card-body">
                <form class="needs-validation" novalidate="" action="<?php echo e(route('seller.store-login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                  <div class="form-group">
                    <label for="email"><?php echo e(__('admin.Email')); ?></label>
                    <input id="email exampleInputEmail" type="email" class="form-control" name="email" tabindex="1" autofocus value="<?php echo e(old('email')); ?>">
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label"><?php echo e(__('admin.Password')); ?></label>
                      <div class="float-right">
                      </div>
                    </div>
                    <input id="password exampleInputPassword" type="password" class="form-control" name="password" tabindex="2">
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                      <label class="custom-control-label" for="remember"><?php echo e(__('admin.Remember Me')); ?></label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      <?php echo e(__('admin.Login')); ?>

                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="simple-footer">
              <?php echo e($setting->copyright); ?>

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
        $("#adminLoginBtn").on('click',function(e) {
            e.preventDefault();

            $.ajax({
                url: "<?php echo e(route('seller.store-login')); ?>",
                type:"post",
                data:$('#adminLoginForm').serialize(),
                success:function(response){
                    if(response.success){
                        window.location.href = "<?php echo e(route('admin.dashboard')); ?>";
                        toastr.success(response.success)
                    }
                    if(response.error){
                        toastr.error(response.error)
                    }
                },
                error:function(response){
                    if(response.responseJSON.errors.email)toastr.error(response.responseJSON.errors.email[0])
                    if(response.responseJSON.errors.password)toastr.error(response.responseJSON.errors.password[0])
                }

            });


        })

        $(document).on('keyup', '#exampleInputEmail, #exampleInputPassword', function (e) {
            if(e.keyCode == 13){
                e.preventDefault();

                $.ajax({
                    url: "<?php echo e(route('admin.store-login')); ?>",
                    type:"post",
                    data:$('#adminLoginForm').serialize(),
                    success:function(response){
                        if(response.success){
                            window.location.href = "<?php echo e(route('admin.dashboard')); ?>";
                            toastr.success(response.success)
                        }
                        if(response.error){
                            toastr.error(response.error)

                        }
                    },
                    error:function(response){
                        if(response.responseJSON.errors.email)toastr.error(response.responseJSON.errors.email[0])
                        if(response.responseJSON.errors.password)toastr.error(response.responseJSON.errors.password[0])

                    }

                });

            }

        })
    });

    })(jQuery);
</script>

<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/seller/auth/login.blade.php ENDPATH**/ ?>
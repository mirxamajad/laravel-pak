<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(__('Razorpay Payment')); ?></title>
    <link rel="icon" type="image/png" href="<?php echo e(asset($setting->favicon)); ?>">

    <script src="<?php echo e(asset('backend/js/jquery-3.7.1.min.js')); ?>"></script>

    <style>
        .payment_notify {
            text-align: center;
        }
    </style>
</head>
<body>

    <p class="payment_notify"><?php echo e(__('Please wait. Your payment is processing....')); ?></p>
    <p class="payment_notify"><?php echo e(__('Do not press browser back or forward button while you are in payment page')); ?></p>


    <form action="<?php echo e(route('payment-api.razorpay-webview-payment')); ?>" class="d-none" method="GET">
        <?php echo csrf_field(); ?>
        <?php
            $payable_amount = $calculate_amount['payable_amount'] * $razorpay->currency->currency_rate;
            $payable_amount = round($payable_amount, 2);
        ?>
        <script src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="<?php echo e($razorpay->key); ?>"
                data-currency="<?php echo e($razorpay->currency->currency_code); ?>"
                data-amount= "<?php echo e($payable_amount * 100); ?>"
                data-buttontext="<?php echo e(__('user.Pay')); ?> <?php echo e($payable_amount); ?> <?php echo e($razorpay->currency->currency_code); ?>"
                data-name="<?php echo e($razorpay->name); ?>"
                data-description="<?php echo e($razorpay->description); ?>"
                data-image="<?php echo e(asset($razorpay->image)); ?>"
                data-prefill.name=""
                data-prefill.email=""
                data-theme.color="<?php echo e($razorpay->color); ?>">
        </script>
    </form>



    <script>
        $(".razorpay-payment-button").click();
    </script>
</body>
</html>
<?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/razorpay_webview.blade.php ENDPATH**/ ?>
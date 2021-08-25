<?php echo $__env->make('layouts.global.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;">
        <?php echo $__env->make('layouts.global.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1
            style="margin-top: 100px;font-family: Montserrat, sans-serif;padding-left: 0px;font-weight: bold;margin-bottom: 20px;">
            <i class="icon ion-ios-arrow-back" style="margin-right: 10px;"></i>Gestione indirizzi</h1>
        <h3 style="font-size: 23;font-family: Montserrat, sans-serif;">Il mio indirizzo<i class="fa fa-pencil"
                style="float: right;"></i></h3>
        <?php echo $__env->make('layouts.profile_page.account_pages.address_page.primary_address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div style="font-family: Montserrat, sans-serif;height: 5px;">
            <h1 style="font-size: 20px;margin-top: 10px;">Aggiungi indirizzo<i class="fa fa-plus"
                    style="float: right;"></i></h1>
        </div>
        <?php echo $__env->make('layouts.profile_page.account_pages.address_page.add_address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.profile_page.account_pages.personal_data.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div style="margin-bottom: 200px"></div>
        <?php echo $__env->make('layouts.global.cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>

<?php echo $__env->make('layouts.global.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TAVOLI\fastoder.laravel\resources\views/profile/address.blade.php ENDPATH**/ ?>
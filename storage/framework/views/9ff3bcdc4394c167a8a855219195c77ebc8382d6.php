<?php echo $__env->make('layouts.global.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;">
        <?php echo $__env->make('layouts.global.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1 style="margin-top: 100px;font-family: Montserrat, sans-serif;padding-left: 0px;font-weight: bold;"><i
                class="icon ion-ios-arrow-back" style="margin-right: 10px;"></i>Dati Anagrafici</h1>
        <?php echo $__env->make('layouts.profile_page.account_pages.personal_data.profile_photo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.profile_page.account_pages.personal_data.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.profile_page.account_pages.personal_data.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.global.cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>
<?php echo $__env->make('layouts.global.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TAVOLI\fastoder.laravel\resources\views/profile/personal_data.blade.php ENDPATH**/ ?>
<?php echo $__env->make('layouts.global.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.global.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body style="background-color: #f8f9fa;">
    <div style="margin-left: 3%;margin-right: 3%; margin-top: 200px;">
        <?php echo $__env->make('layouts.login_page.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>    
</body>
<?php echo $__env->make('layouts.global.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\TAVOLI\fastorder.laravel\resources\views/login.blade.php ENDPATH**/ ?>
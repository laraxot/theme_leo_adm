<?php echo $__env->make('layouts.global.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.global.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body style="background-color: #f8f9fa;">
    <div style="margin-left: 5%;margin-right: 5%; margin-top: 100px;">
        <?php echo $__env->make('layouts.register_page.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>    
</body>
<?php echo $__env->make('layouts.global.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\TAVOLI\fastoder.laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>
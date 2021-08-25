<?php echo $__env->make('layouts.global.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body style="background-color: #f8f9fa;">
    <div class="w-100" style="margin-left: 0px;width: 355px;background: rgba(255,0,0,0);padding: 11px;padding-right: 11px;">
        <?php echo $__env->make('layouts.global.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.homepage.slidable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1 style="margin-top: 10px;padding-left: 0px;font-family: Montserrat, sans-serif;color: rgb(33,37,41);font-weight: bold;margin-bottom: 15px;">Categorie</h1>
        <?php echo $__env->make('layouts.homepage.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="second"></div>
        <?php echo $__env->make('layouts.global.cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo $__env->make('layouts.global.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

<?php /**PATH C:\TAVOLI\fastorder.laravel\resources\views/home.blade.php ENDPATH**/ ?>
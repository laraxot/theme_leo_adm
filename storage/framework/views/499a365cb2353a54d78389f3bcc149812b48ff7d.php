<?php
$categories = DB::select('select * from categories where guid = "' . $guid . '"');
?>
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(url('/')); ?>"
        style="text-decoration: none">
        <h5
            style="margin-top: 100px;padding-left: 0px;font-family: Montserrat, sans-serif;color: rgb(33,37,41);font-weight: bold;margin-bottom: 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                class="bi bi-chevron-left"
                style="padding-right: 15px;font-size: 40px;margin-right: -9px;margin-top: -4px;">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                </path>
            </svg><?php echo e($category->name); ?>

        </h5>
    </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\TAVOLI\fastorder.laravel\resources\views/layouts/category_page/category_title.blade.php ENDPATH**/ ?>
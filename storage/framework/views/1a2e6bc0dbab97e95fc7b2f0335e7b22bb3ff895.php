<?php
$categories = DB::select('select * from categories where superior_category_guid != "root" AND store_id = 1 AND superior_category_guid != "addition" AND superior_category_guid != "dough"');
?>
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="w-100"
        style="background: #e6e6e6a4;margin-left: 0px;width: 314px;border-radius: 15px;margin-bottom: 20px;">
        <a href="<?php echo e(url('/category/' . $category->guid)); ?>" style="text-decoration: none; color: rgb(39, 39, 39)">
            <div class="w-100"><img class="w-100" src="<?php echo e($category->img); ?>"
                    style="width: 280px;margin: 0px;border-radius: 15px;margin-bottom: 0;padding: 7px;">
                <h3
                    style="margin: 16px;margin-top: 5px;padding-bottom: 9px;font-family: Montserrat, sans-serif;font-weight: bold;font-size: 21.05px;">
                    <?php echo e($category->name); ?></h3>
            </div>
        </a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\TAVOLI\fastoder.laravel\resources\views/layouts/homepage/category.blade.php ENDPATH**/ ?>
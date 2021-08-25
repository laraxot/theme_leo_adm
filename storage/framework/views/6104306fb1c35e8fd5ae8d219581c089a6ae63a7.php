<?php
$informations = DB::select('select * from informations');
?>
<?php $__currentLoopData = $informations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <div class="w-100"
            style="height: 1px;background: #d0d0d0;margin-bottom: 10px;font-family: Montserrat, sans-serif;">
        </div>
        <div class="w-100" style="font-family: Montserrat, sans-serif;">
            <div class="w-50" style="display: inline-block;font-family: Montserrat, sans-serif;">
                <p class="w-100" style="display: inline-block;font-weight: bold;font-family: Montserrat, sans-serif;">
                    <?php echo e($information->store_address); ?> <br /></p>
            </div>
            <a target="_blank" href="<?php echo e($information->store_maps_url); ?>">
                <div style="display: inline-block;font-family: Montserrat, sans-serif;width: 170px">
                    <p class="w-100"
                        style="display: inline-block;font-weight: bold;font-family: Montserrat, sans-serif;text-align: center;background: #49c34e;padding: 10px;border-radius: 25px;color: rgb(255,255,255);padding-top: 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" class="bi bi-geo-alt-fill"
                            style="margin-right: 7px;margin-bottom: 2px;">
                            <path fill-rule="evenodd"
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z">
                            </path>
                        </svg>Vieni a trovarci<br />
                    </p>
                </div>
            </a>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\TAVOLI\fastorder.laravel\resources\views/layouts/information_page/address.blade.php ENDPATH**/ ?>
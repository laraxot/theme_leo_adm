<?php

$products = DB::select('SELECT * FROM products WHERE category_guid = "' . $guid .'"');

?>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(url('/product/' . $product->guid)); ?>"
        style="color: rgb(24, 24, 24)">
        <div class="w-100"
            style="background: #e6e6e6a4;margin-left: 0px;width: 314px;border-radius: 15px;margin-bottom: 20px;">
            <div class="w-100" <?php if($product->img == ''): ?>  <?php endif; ?>>

                <?php if(!$product->img == ''): ?>

                    <img src="<?php echo e($product->img); ?>" class="w-100"
                        style="width: 280px;margin: 0px;border-radius: 15px;margin-bottom: 0;padding: 7px;">

                <?php endif; ?>


                <h5
                    style="display: inline-block;margin: 16px;margin-top: 0px;padding-bottom: 0px;font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 0px;padding-top: 0px;background: rgba(255,36,36,0);width: 219px;margin-left: 0px; margin-left:13px; margin-top: 13px">
                    <?php echo e($product->name); ?></h5>
                <p
                    style="float: right;display: inline-block;width: 55px;font-family: Montserrat, sans-serif;font-weight: bold;color: rgb(120,127,135); margin-right:8px; margin-top: 13px">
                    € <?php echo e(number_format(floatval($product->price), 2, ',', '')); ?></p>
            </div>

             

            <div class="w-100" style="display: inline-block;padding: 11px;">
                <p style="display: inline-block;padding-bottom: 0px;width: 255px;margin-left: 0px;margin-bottom: 0px;">
                    <?php echo e($product->recipes); ?></p>
    </a>

    <div style="display: inline-block; float: right; padding-right: 26.5px;" onclick="changeColors(this)">
        <div style="visibility: visible;" class="empty_heart">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 16 16" fill="currentColor"
                class="bibi-heart fa-lg" style="position: absolute;visibility: visible;">
                <path class="empty_heart" fill-rule="evenodd"
                    d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                </path>
            </svg>
        </div>
        <div style="visibility: hidden;" class="filled_heart">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 16 16" fill="currentColor"
                class="bi bi-heart-fill fa-lg" style="position: absolute;float: right;">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z">
                </path>
            </svg>
        </div>
    </div>

    <div style="display: inline-block; float: right; padding-right: 25px; padding-top: 40px; padding-bottom: 20px"
        onclick="changeColors(this)">
        <div style="visibility: visible;" class="plus">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                class="bi bi-plus-circle" style="position: absolute;float: right;font-size: 20px;margin-right: -21px;">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                </path>
                <path fill-rule="evenodd"
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                </path>
            </svg>
        </div>
        <div style="visibility: hidden;" class="dash">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                class="bi bi-dash-circle" style="position: absolute;font-size: 20px;">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                </path>
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
            </svg>
        </div>
    </div>

    </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div style="margin-bottom: 80px"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    function changeColors(element) {

        if ($(element).find(".empty_heart").css("visibility") == "visible") {
            $(element).find(".empty_heart").css("visibility", "hidden");
            $(element).find(".filled_heart").css("visibility", "visible");
        } else {
            $(element).find(".empty_heart").css("visibility", "visible");
            $(element).find(".filled_heart").css("visibility", "hidden");
        }

        if ($(element).find(".plus").css("visibility") == "visible") {
            $(element).find(".plus").css("visibility", "hidden");
            $(element).find(".dash").css("visibility", "visible");
        } else {
            $(element).find(".plus").css("visibility", "visible");
            $(element).find(".dash").css("visibility", "hidden");
        }

    }
</script>
<?php /**PATH C:\TAVOLI\fastorder.laravel\resources\views/layouts/category_page/products.blade.php ENDPATH**/ ?>
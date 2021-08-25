<?php
$products_price = DB::select('select * from products where guid =  "' . $guid . '"');
?>
<?php $__currentLoopData = $products_price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <nav class="navbar navbar-light navbar-expand-md fixed-bottom" style="background-color: #f8f9fa;">
        <div class="container-fluid">
            <div class="w-100" style="height: 1px;background: #d0d0d0;margin-bottom: 13px;"></div>
            <div class="w-100" style="text-align: center;">
                <button type="button" onClick="if(clicks>1)clicks--;updateClickCount();" id="push"
                    style="border: none;background-color:#F8F9FA">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"
                        fill="currentColor" class="bi bi-dash"
                        style="font-size: 25px;margin-top: -10px;margin-right: 5px;">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                    </svg>
                </button>
                <h1 id="clickCount" style="display: inline-block;font-family: Montserrat, sans-serif;font-size: 33px;">1
                </h1>
                <button type="button" onClick="clicks++;updateClickCount();" id="push"
                    style="border: none;background-color:#F8F9FA">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"
                        fill="currentColor" class="bi bi-plus"
                        style="margin-top: -10px;font-size: 30px;margin-left: 5px;">
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                        </path>
                    </svg>
                </button>
            </div>
            <div
                style="background-color: #3A8085; width: 100%; height: 80px; text-align: center; border-radius: 40px; font-family: Montserrat">
                <h3 style="margin-top: 10px; color: white; font-weight: bold; font-size: 20px">AGGIUNGI AL CARRELLO</h3>
                <h3 id="finalPrice" style="color: white;">€ <?php echo e(number_format($product_price->price, 2, ',', '')); ?>

                </h3>
            </div>
        </div>
    </nav>


    <div id="dom-target" style="display: none;">
        <?php
            $output = $product_price->price;
            echo htmlspecialchars($output);
        ?>
    </div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script type="text/javascript">
    var clicks = 1;

    var div = document.getElementById("dom-target");
    var base_price = div.textContent;

    function updateClickCount() {

        document.getElementById("clickCount").innerHTML = clicks;


        let items = document.getElementsByClassName("addition_item");

        let totalPrice = parseFloat(base_price * clicks);

        //alert(totalPrice);

        document.getElementById("finalPrice").innerHTML = "&euro; " + (totalPrice.toFixed(2)).replace(".", ",");

        let price = 0;
        let quantity = 0;

        for (let i = 0; i < clicks; i++) {
            for (let item of items) {

                quantity = item.querySelectorAll('.qt_addition')[0].innerHTML;

                price = item.querySelectorAll('.prz_addition')[0].innerHTML;

                totalPrice += parseFloat(price) * parseInt(quantity);

            }
        }

        document.getElementById("prezzo").innerHTML = "&euro; " + totalPrice.toFixed(2);
    }
</script>
<?php /**PATH C:\TAVOLI\fastorder.laravel\resources\views/layouts/product_page/add_cart.blade.php ENDPATH**/ ?>
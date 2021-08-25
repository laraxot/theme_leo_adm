<?php
$informations = DB::select('select * from informations');
?>
<?php $__currentLoopData = $informations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h1
        style="margin-top: 100px;font-family: Montserrat, sans-serif;padding-left: 0px;font-weight: bold;margin-bottom: 20px;">
        Dove siamo</h1>
    <section class="map-clean">
        <iframe allowfullscreen frameborder="0" src="
        https://www.google.com/maps/embed/v1/place?key=AIzaSyBB1FSN_jmMPxSmVs0Nk57BJ-yLCAXKzLY&amp;q=Via+Berna%2C+2%2C+30030+Martellago+VE&amp;zoom=15
        " width="100%" height="450">
        </iframe>
    </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\TAVOLI\fastorder.laravel\resources\views/layouts/information_page/map.blade.php ENDPATH**/ ?>
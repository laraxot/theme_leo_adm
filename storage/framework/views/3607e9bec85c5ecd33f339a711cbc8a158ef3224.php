<?php
    use Illuminate\Support\Facades\DB;
?>

<?php echo e($superior_categories = DB::select('select * from superior_category')); ?>


<?php /**PATH C:\TAVOLI\fastorder.laravel\resources\views/select.blade.php ENDPATH**/ ?>
<?php
    $title=XotModel('post')::where('guid', '=', $items[0])->firstOrFail()->title;
    //$title = ->
    //dddx($_panel->getParent())
    //dddx(get_defined_vars());
?>
<a href="<?php echo e(route('container0.index', ['lang' => App::getLocale(), 'container0' => '/'])); ?>"
    style="text-decoration: none">
    <h5
        style="margin-top: 100px;padding-left: 0px;font-family: Montserrat, sans-serif;color: rgb(33,37,41);font-weight: bold;margin-bottom: 20px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
            class="bi bi-chevron-left" style="padding-right: 15px;font-size: 40px;margin-right: -9px;margin-top: -4px;">
            <path fill-rule="evenodd"
                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
            </path>
        </svg><?php echo e($title); ?>

    </h5>
</a>
<?php /**PATH C:\TAVOLI\fastorder.laravel\resources\views/layouts/category_page/tag_title.blade.php ENDPATH**/ ?>
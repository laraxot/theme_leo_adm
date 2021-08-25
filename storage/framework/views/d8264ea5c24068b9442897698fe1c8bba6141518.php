<form action="<?php echo e(route('web.search')); ?>" method="GET">
    <div style="padding-top: 90px">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
            class="bi bi-search" style="position: absolute;margin-top: 16px;margin-left: 23px;">
            <path fill-rule="evenodd"
                d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z">
            </path>
            <path fill-rule="evenodd"
                d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"></path>
        </svg>
        <input name="query" type="text" class="w-100"
            style="background: rgb(237,237,237);border-top-style: none;border-right-style: none;border-bottom-style: none;border-left-style: none;border-radius: 8px;height: 49px;padding-left: 52px;font-family: Montserrat, sans-serif;"
            placeholder="Ingrediente o pietanza" />
    </div>
    <div style="height: 2px;background: #e7e7e7;margin-top: 20px;"></div>
</form>
<?php /**PATH C:\TAVOLI\fastoder.laravel\resources\views/layouts/search_page/searchbar.blade.php ENDPATH**/ ?>
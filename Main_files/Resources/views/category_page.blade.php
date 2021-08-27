
@include('layouts.global.head')

<body style="background-color: #f8f9fa">
    <div class="w-100" style="padding: 11px;">
        @include('layouts.global.topbar')
        <div style="background-color: #f8f9fa;">
            @include('layouts.category_page.category_title')
            @include('layouts.category_page.products')
            @include('layouts.global.back_arrow')
        </div>
    </div>
    @include('layouts.global.foot')
</body>

</html>

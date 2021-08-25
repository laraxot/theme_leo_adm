@php

@endphp

@include('layouts.global.head')

<body style="background-color: #f8f9fa;">
    <div class="w-100" style="background-color: #f8f9fa;padding: 11px;">
        @include('layouts.global.topbar')
        @include('layouts.product_page.product_page_title')
        <div style="padding-bottom: 10px;">
            @include('layouts.product_page.variants')
        </div>
    </div>
    @include('layouts.product_page.add_cart')
    @include('layouts.global.foot')
</body>

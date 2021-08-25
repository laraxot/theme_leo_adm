@include('layouts.global.head')
@include('layouts.global.topbar')
<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;">
        @include('layouts.information_page.map')
        <div>
            @include('layouts.information_page.address')
            @include('layouts.information_page.phone')
            @include('layouts.information_page.times')
        </div>
    </div>
    @include('layouts.global.cart')
    @include('layouts.global.foot')
</body>

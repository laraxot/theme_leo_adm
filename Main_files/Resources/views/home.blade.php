@include('layouts.global.head')
<body style="background-color: #f8f9fa;">
    <div class="w-100" style="margin-left: 0px;width: 355px;background: rgba(255,0,0,0);padding: 11px;padding-right: 11px;">
        @include('layouts.global.topbar')
        @include('layouts.homepage.slidable')
        <h1 style="margin-top: 10px;padding-left: 0px;font-family: Montserrat, sans-serif;color: rgb(33,37,41);font-weight: bold;margin-bottom: 15px;">Categorie</h1>
        @include('layouts.homepage.category')
        <div class="second"></div>
        @include('layouts.global.cart')
    </div>
    @include('layouts.global.foot')
</body>


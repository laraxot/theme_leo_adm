@include('layouts.global.head')

<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;">
        @include('layouts.global.topbar')
        <h1
            style="margin-top: 100px;font-family: Montserrat, sans-serif;padding-left: 0px;font-weight: bold;margin-bottom: 20px;">
            <i class="icon ion-ios-arrow-back" style="margin-right: 10px;"></i>Gestione indirizzi</h1>
        <h3 style="font-size: 23;font-family: Montserrat, sans-serif;">Il mio indirizzo<i class="fa fa-pencil"
                style="float: right;"></i></h3>
        @include('layouts.profile_page.account_pages.address_page.primary_address')
        <div style="font-family: Montserrat, sans-serif;height: 5px;">
            <h1 style="font-size: 20px;margin-top: 10px;">Aggiungi indirizzo<i class="fa fa-plus"
                    style="float: right;"></i></h1>
        </div>
        @include('layouts.profile_page.account_pages.address_page.add_address')
        @include('layouts.profile_page.account_pages.personal_data.buttons')
        <div style="margin-bottom: 200px"></div>
        @include('layouts.global.cart')
    </div>
</body>

@include('layouts.global.foot')
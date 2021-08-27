@include('layouts.global.head')
<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;">
        @include('layouts.global.topbar')
        <h1 style="margin-top: 100px;font-family: Montserrat, sans-serif;padding-left: 0px;font-weight: bold;"><i
                class="icon ion-ios-arrow-back" style="margin-right: 10px;"></i>Dati Anagrafici</h1>
        @include('layouts.profile_page.account_pages.personal_data.profile_photo')
        @include('layouts.profile_page.account_pages.personal_data.form')
        @include('layouts.profile_page.account_pages.personal_data.buttons')
        @include('layouts.global.back_arrow')
    </div>
</body>
@include('layouts.global.foot')
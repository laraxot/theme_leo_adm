@include('layouts.global.head')

<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;">
        @include('layouts.global.topbar')
        <h1
            style="margin-top: 80px;font-family: Montserrat, sans-serif;padding-left: 0px;font-weight: bold;margin-bottom: 30px;">
            Impostazioni
        </h1>
        <div style="padding-bottom: 15px;">
            @include('layouts.profile_page.first_title')
            @include('layouts.profile_page.first_settings')
        </div>
        <div style="padding-bottom: 15px;">
            @include('layouts.profile_page.second_title')
            @include('layouts.profile_page.second_settings')
        </div>
        @include('layouts.profile_page.logout_button')
        @include('layouts.global.back_arrow')
    </div>
    @include('layouts.global.head')
</body>

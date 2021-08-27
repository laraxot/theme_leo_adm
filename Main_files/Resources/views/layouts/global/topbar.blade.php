@php
$informations = \App\Models\Information::where('store_id', 1)->get();
@endphp

<nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean"
    style="background-color: #f8f9fa;padding-bottom: 0px;">
    <div class="container">
        @foreach ($informations as $information)

            <a href="{{ url('/') }}"><img src="{{ $information->store_logo }}"
                    style="display: inline-block;width: 190px;height: 75px;padding-left: 0px;margin-left: 0px;" /></a>

        @endforeach
        <div style="float: right;float: right;width: 130.297px;height: 38px;">
            <a href="{{ url('/profile/dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    class="bi bi-person"
                    style="float: left;color: rgb(33,37,41);font-size: 24px;margin-right: 7px;margin-top: 7px;">
                    <path fill-rule="evenodd"
                        d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                    </path>
                </svg>
            </a>
            <a href="{{-- url('/auth/login') --}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    class="bi bi-heart"
                    style="float: left;color: rgb(33,37,41);font-size: 20px;margin-right: 10px;margin-top: 8px;">
                    <path fill-rule="evenodd"
                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                    </path>
                </svg>
            </a>
            <a href="{{ url('/information') }}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                    viewBox="0 0 16 16" fill="currentColor" class="bi bi-info-circle"
                    style="float: left;color: rgb(33,37,41);font-size: 20px;margin-bottom: 0px;margin-top: 7px;margin-right: 13px;">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                    </path>
                    <path
                        d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z">
                    </path>
                    <circle cx="8" cy="4.5" r="1"></circle>
                </svg></a>
            <p style="display: inline-block;font-size: 20px;">|</p>
            <a href="{{ url('/search') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    class="bi bi-search"
                    style="float: right;color: rgb(33,37,41);font-size: 20px;margin: 0px;margin-bottom: 0px;margin-top: 7px;">
                    <path fill-rule="evenodd"
                        d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z">
                    </path>
                    <path fill-rule="evenodd"
                        d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</nav>

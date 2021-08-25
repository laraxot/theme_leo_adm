@extends('adm_theme::layouts.plane')
@section('body')
    <div class="wrapper">
        @include('adm_theme::layouts.partials.sidebar')

        @yield('content')

    </div>
@endsection

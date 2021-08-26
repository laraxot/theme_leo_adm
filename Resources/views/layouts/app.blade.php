@extends('adm_theme::layouts.plane')
@section('body')
    <div class="wrapper">
        @include('adm_theme::layouts.partials.sidebar')

        <div id="content">
            @include('adm_theme::layouts.partials.headernav')
            <!-- Begin Page Content -->
            <div class="container-fluid" id="app">
                <!-- Page Heading -->
                @if (isset($_panel))
                    {!! Theme::include('inner_page', [], get_defined_vars()) !!}
                    @include('adm_theme::layouts.partials.breadcrumb',['_panel'=>$_panel])
                    @include('adm_theme::layouts.partials.tabs',['tabs'=>$_panel->getTabs()])
                    {{-- {!! Theme::include('topbar', [], get_defined_vars()) !!} --}}
                @endif
                @yield('section')
                @yield('content')
                @if (isset($_panel))
                    {!! Theme::include('bottombar', [], get_defined_vars()) !!}
                @endif

            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
@endsection

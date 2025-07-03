@include('includes.web.head')

@if(Route::currentRouteName() == 'index')
@include('includes.web.header')

@else
@include('includes.web.header-two')
@endif


@yield('content')
@include('includes.web.footer')

@include('includes.web.scripts')

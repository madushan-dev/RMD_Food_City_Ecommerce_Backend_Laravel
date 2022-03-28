@include('layouts.header',['title' => $title])
@include('layouts.sidebar')
@include('layouts.topbar')
@include('layouts.loader')

@yield('content')

@include('layouts.footer')



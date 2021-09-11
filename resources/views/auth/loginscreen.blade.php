<!doctype html>
<html class="no-js" lang="pt">
@section('head')
    @include('layouts.head')
    @yield('links_adicionais')
@show

<body class="hold-transition login-page">

@yield('conteudo')


@section('scripts')
    @include('layouts.scripts')
    @yield('scripts_adicionais')
@show

    
</body>

</html>


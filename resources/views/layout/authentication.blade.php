<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="description" content="@yield('meta_description', config('app.name'))">
    <meta name="author" content="@yield('meta_author', config('app.name'))">
    @yield('meta')

    @stack('before-styles')

    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    @stack('after-styles')    
    @if (trim($__env->yieldContent('page-styles')))    
        @yield('page-styles')
    @endif    
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme1.css') }}">
</head>

<body class="theme-cyan font-montserrat">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    
    </div>
</div>

<div class="auth">
    <div class="auth_left">
        @yield('content')
    </div>    
    @include('layout.login_right')
</div>

<!-- Scripts -->
@stack('before-scripts')

<script src="{{ asset('assets/bundles/lib.vendor.bundle.js') }}"></script>
<script src="{{ asset('assets/js/core.js') }}"></script>

@stack('after-scripts')

@if (trim($__env->yieldContent('page-script')))
    @yield('page-script')
@endif
    
</body>
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script>

$('input[type="password"]').on('focus', () => {
  $('*').addClass('password');
}).on('focusout', () => {
  $('*').removeClass('password');
});

</script>
</html>

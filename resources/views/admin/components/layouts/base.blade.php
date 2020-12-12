<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <meta name="robots" content="noindex">
    @include('admin.components.layouts._meta')
    @include('admin.components.layouts._base-css')
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse app">
<div class="alert alert-center alert-success alert-dismissible" style="display: none">
</div>
<div class="wrapper">
    @include('admin.components.layouts._header')
    @include('admin.components.layouts._sidebar')

    <main class="content-wrapper main-content">
        @include('admin.components.layouts._alert')
        @yield('content')
    </main>

    @include('admin.components.layouts._footer')
</div>
@include('admin.components.layouts._base-js')
</body>
</html>

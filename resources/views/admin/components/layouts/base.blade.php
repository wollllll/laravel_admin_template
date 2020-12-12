<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="robots" content="noindex">
    @include('admin.components.layouts._meta')
    <link rel="stylesheet" href="{{ vasset('assets/admin/css/app.css') }}">
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div id="app" class="wrapper">
    @include('admin.components.layouts._header')
    @include('admin.components.layouts._sidebar')

    <main class="content-wrapper main-content">
        @include('admin.components.layouts._alert')
        @yield('content')
    </main>

    @include('admin.components.layouts._footer')
</div>
<script src="{{ vasset('assets/admin/js/app.js') }}"></script>
</body>
</html>

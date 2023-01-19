<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.includes.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand  navbar-light" style="background-color:#FCD695;">
        @include('admin.includes.header')
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4" >
        @include('admin.includes.sidebar')
    </aside>

    <div class="content-wrapper">

        <section class="content">

            @yield('content')


        </section>
    </div>
    @include('admin.includes.footer')
</div>
@include('admin.includes.footer_scripts')
@yield('pagescripts')
</body>
</html>

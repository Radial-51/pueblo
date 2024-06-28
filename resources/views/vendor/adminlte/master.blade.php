<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ secure_asset('vendor/adminlte/dist/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/styles-home.css') }}">
    @yield('css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('vendor.adminlte.partials.navbar.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('vendor.adminlte.partials.sidebar.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        @include('vendor.adminlte.partials.footer.footer')
        <!-- /.footer -->

    </div>

    <!-- Scripts -->
    <script src="{{ secure_asset('vendor/adminlte/dist/js/adminlte.js') }}"></script>
    @yield('js')
</body>
</html>

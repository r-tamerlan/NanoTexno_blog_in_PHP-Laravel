<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Status_iucn_NT_icon.svg/1200px-Status_iucn_NT_icon.svg.png">
    <title>@yield('title',config('app.name'))</title>
    @include('layouts.partials.header')
    @yield('head') <!-- *** -->
</head>
<body class="home">
<!-- Wrapper Site -->
<div id="main-content">
    <!-- Preload -->
    @include('layouts.partials.preload')
    <!-- Preload -->
    <!-- Mobile Menu -->
    @include('layouts.partials.mobil_menu')
    <!-- End Mobile Menu -->
    <div class="container">
        <div class="row">
           @include('layouts.partials.navbar')
           <!-- Main Contents Start  -->
               @yield('content')
           <!-- Main Contents End  -->
        </div>
    </div>
</div>
<!-- End Wrapper Site -->
<!-- Footer -->
@include('layouts.partials.footer')
<!-- End Footer -->
<!-- Scripts -->
@include('layouts.partials.scripts')
<!-- End Scripts -->
@yield('foot') <!-- *** -->
</body>
</html>

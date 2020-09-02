<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://www.freeiconspng.com/thumbs/dashboard-icon/dashboard-icon-3.png">
    <title>@yield('title',config('app.name'))</title>
    @include('admin.layouts.partials.links')
    @yield('head')

</head>

<body>
@include('admin.layouts.partials.navbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

    <!--  BEGIN SIDEBAR  -->
    @include('admin.layouts.partials.sidebar')
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    @yield('content')
    <!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->
@include('admin.layouts.partials.scripts')
@yield('foot')
</body>
</html>

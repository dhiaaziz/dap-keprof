<!DOCTYPE html>
<html lang="en" @yield('html-class')>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    @include('frontend.layouts.style')
    @yield('more-style')  
</head>

<body>
    @yield('header')
    

    @yield('content')
    <!--Footer-->
    @include('frontend.layouts.footer')
    <!--/.Footer-->

    <!-- SCRIPTS -->
    @include('frontend.layouts.script')
    @yield('more-script')
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Zesan - Portfolio || @yield('title')</title>
        <meta name="description" content="Zesan - Portfolio">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        @include('includes.styles')
    </head>
    <body>
        <!-- Preloader End -->
        @include('includes.sidebar')

        <!-- main layout -->
        @yield('content')

        <!-- Go to top button -->
        <a href="javascript:" id="return-to-top"><i class="fas fa-angle-up"></i></a>


        <!-- SCRIPTS -->
        @include('includes.scripts')
    </body>


</html>

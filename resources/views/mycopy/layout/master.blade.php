<!DOCTYPE html>
<html>
    <head>
        <!-- TODO TITULO PAGINA, DESCRIÇÃO E KEYWORDS -->
        <title>MyCopy</title>
        <meta name="description" content="Six Revisions is a blog that shares useful information about web development and design, dedicated to people who build websites." />
        <meta name="keywords" content="web design, web development" />

        <!-- CSS BASE -->
        <link href="{{ URL::asset('mycode/css/material-design-colors.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{  URL::asset('assets/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="">
        <!-- cSS BASE -->

        @yield('css')

    </head>
    <body>
        <div class="col-md-12">
            @yield('content')
        </div>

    <!-- Load JS -->
    <script src="{{  URL::asset('assets/jquery/jquery-3.1.1.min.js') }}"></script>
    <script src="{{  URL::asset('assets/bootstrap/js/tether.min.js') }}"></script>
    <script src="{{  URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- load js -->

    </body>
</html>
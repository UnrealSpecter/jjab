<!doctype html>
<html lang="nl">
    <head data-enhance="false">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <meta name="description" content="Jeugd Juridisch Advies Bureau">

        <title>JJAB</title>

        <link rel="icon" href="{{ URL::asset('/images/jjab-tab-icon.png') }}">

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/normalize/css/normalize.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/fullpage-scroll/css/jquery.fullPage.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/bootstrap/css/bootstrap.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/animate/css/animate.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/hover/css/hover-min.css') }}" />
        @yield('css')
    </head>
    <body>
        <div style="height: 100%; width: 100%; padding: 0; margin: 0;" data-enhance="false" data-role="page">
            <div class="row" id="fullpage" style="height: 100vh; width: 100%; margin: 0; padding: 0;">
                @yield('content')
            </div>
        </div>
        <script src="{{ URL::asset('plugins/jquery/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/tether/js/tether.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{ URL::asset('plugins/fullpage-scroll/js/jquery.fullPage.js') }}"></script>
        @yield('js')
    </body>
</html>

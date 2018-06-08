<!doctype html>
<html lang="nl">
    <head data-enhance="false">
        @include('meta')
        @include('css')
    </head>
    <body>
        <div style="height: 100%; width: 100%; padding: 0; margin: 0;" data-enhance="false" data-role="page">
            <a class="anton col-1 d-flex align-v justify-c anbi home-anbi" href="newsletter_01.pdf" target="_blank">ANBI</a>
            <div class="row" id="fullpage" style="height: 100vh; width: 100%; margin: 0; padding: 0;">
                @yield('content')
            </div>
        </div>
        @include('scroll-indicators')
        @include('scripts')
    </body>
</html>

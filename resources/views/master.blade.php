<!doctype html>
<html lang="nl">
    <head data-enhance="false">
        @include('meta')
        @include('styles')
    </head>
    <body>
        <div id="vue">
            @yield('content')
        </div>
        @include('scripts')
    </body>
</html>

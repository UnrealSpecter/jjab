<!doctype html>
<html lang="nl">
    <head data-enhance="false">
        @include('meta')
        @include('css')
    </head>
    <body>
        <div style="height: 100%; width: 100%; padding: 0; margin: 0;" data-enhance="false" data-role="page">
            @foreach(json_decode($contact->anbi) as $file)
            <a class="anton col-4 col-sm-2 col-md-3 col-lg-2 col-xl-1 d-flex align-items-center justify-content-center anbi home-anbi" href="{{ url('storage') }}/{{ $file->download_link }}" download>ANBI</a>
            @endforeach
            <div class="row" id="fullpage" style="height: 100vh; width: 100%; margin: 0; padding: 0;">
                @yield('content')
            </div>
        </div>
        <script>
            var contact = @json($contact->anbi);
            console.log(contact);
        </script>
        @include('scroll-indicators')
        @include('scripts')
        <div id="outdated"></div>
    </body>

</html>

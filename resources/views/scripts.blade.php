
    <!-- CORE JS INCLUDES -->
    <script src="{{ asset('plugins/jquery/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/emergence/scripts/emergence.js') }}"></script>

    <!-- SCRIPTS -->
    <script src="{{ asset('/scripts/vue.js') }}"></script>
    <script src="{{ asset('/scripts/scroll.js')}}"></script>
    <script src="{{ asset('scripts/emergence.js') }}"></script>
    <script src="{{ asset('scripts/menu.js') }}"></script>
    <!-- <script src="{{ asset('/scripts/logo-animation.js') }}"></script> -->
    <!-- <script src="//cdn.jsdelivr.net/npm/eruda"></script>
    <script>eruda.init();</script> -->

    <!-- ANALYTICS -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118817546-1"></script>
    <script src="{{ asset('plugins/google-analytics/script.js') }}"></script>

    @yield('additional-scripts')

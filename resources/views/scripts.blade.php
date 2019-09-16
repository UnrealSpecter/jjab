
    <!-- CORE JS INCLUDES -->
    <!-- <script src="{{ asset('plugins/jquery/js/jquery-3.2.1.min.js') }}"></script> -->
    <!-- <script src="{{ asset('plugins/tether/js/tether.min.js')}}"></script> -->
    <!-- <script src="{{ asset('plugins/bootstrap-4.0/js/bootstrap.min.js')}}"></script> -->
    <!-- <script src="{{ asset('plugins/fullpage-scroll/js/jquery.fullPage.js') }}"></script> -->
    <!-- <script src="{{ asset('plugins/outdatedbrowser/js/outdatedbrowser.min.js') }}"></script> -->

    <!-- ANALYTICS -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118817546-1"></script>
    <script src="{{ asset('plugins/google-analytics/script.js') }}"></script>

    <script>

        // Plain Javascript
        //event listener: DOM ready
        function addLoadEvent(func) {
            var oldonload = window.onload;
            if (typeof window.onload != 'function') {
                window.onload = func;
            } else {
                window.onload = function() {
                    if (oldonload) {
                        oldonload();
                    }
                    func();
                }
            }
        }

        //call plugin function after DOM ready
        // addLoadEvent(function(){
        //     outdatedBrowser({
        //         bgColor: '#f25648',
        //         color: '#ffffff',
        //         lowerThan: 'transform',
        //         languagePath: '{{ URL::asset('plugins/outdatedbrowser/lang/en.html') }}'
        //     })
        // });
    </script>

    @yield('additional-scripts')

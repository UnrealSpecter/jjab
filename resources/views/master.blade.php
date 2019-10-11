<!doctype html>
<html lang="nl">
    <head data-enhance="false">
        @include('meta')
        @include('styles')
    </head>
    <body class="overflow-x-hidden">
        <div id="vue">

            <!-- LOGO ANIMATION & EYE CATCHER. -->
            <wrapper id="#" class="bg-white min-h-screen" title="title one">
                <container>
                    <brand-menu></brand-menu>
                    <logo-animation></logo-animation>
                </container>
            </wrapper>

            <!-- INTRODUCTION WRAPPER -->
            <wrapper id="#" class="min-h-screen" title="title one">
                <container>

                    <!-- INTRODUCTION INFORMATION -->
                    <!-- <introduction>Hallo Jongere!</introduction> -->

                    <!-- CALL TO ACTION -->
                    <call-to-action></call-to-action>

                    <!-- QUICK SEARCH -->
                    <quick-search :tags="{{ json_encode($tags) }}"></quick-search>

                </container>
            </wrapper>

            <!-- EXPLANATION WRAPPER -->
            <wrapper id="kennisbank" class="bg-jjab-orange" title="title two">
                <container>

                    <!-- TRANSITION -->
                    <page-transition>Onze kennisbank</page-transition>

                    @foreach($explanations as $explanation)
                    <!-- TITLE -->
                    <brand-title id="{{ $explanation->title }}">{{ $explanation->title }}</brand-title>

                    <!-- EXPLANATION -->
                    <explanation title="{{ $explanation->subtitle }}" description="{{ $explanation->description }}"></explanation>

                    <!-- ANIMATION -->
                    <div class="w-full flex flex-row justify-between mb-16 ">
                        <youtube class="rounded-jjab shadow-md w-full h-700px" video-id="{{ $explanation->video }}" />
                    </div>

                    <!-- CARD WRAPPER -->
                    <div class="w-full flex flex-row justify-between">
                        @foreach($explanation->examples as $index => $example)
                        <card>{{ $example->question }}</card>
                        @endforeach
                    </div>
                    @endforeach

                </container>
            </wrapper>

            <!-- JJABS -->
            <wrapper id="wie-zijn-wij">
                <container>

                    <!-- TRANSITION -->
                    <page-transition>wie zijn wij?</page-transition>

                    <!-- EMPLOYEE -->
                    @foreach($employees as $employee)
                    <employee :employee="{{ json_encode($employee) }}"></employee>
                    @endforeach

                </container>
            </wrapper>

            <!-- CONTACT -->
            <wrapper id="contact" class="bg-jjab-orange">
                <container>

                    <!-- TRANSITION -->
                    <page-transition>Contact</page-transition>

                    <!-- MAIL FORM -->
                    <div class="wrapper w-full flex flex-col">
                        <jjab-form></jjab-form>
                    </div>

                    <!-- CONTACT TITLE -->
                    <brand-title id="app-ons">App Ons!</brand-title>

                    <!-- APP ONS -->
                    <phone></phone>

                </container>
            </wrapper>

            <!-- FOOTER -->
            <footer class="py-12 w-full bg-jjab-orange text-jjab-purple tracking-2px anton flex flex-row justify-between items-center">
                <div class="h-32 w-1/3 flex flex-col justify-center items-center">
                    <i class="text-4rem fa fa-phone mb-2"></i>
                    <span class="text-2.5rem tracking-2px">+‎31 6 53138729</span>
                </div>
                <div class="h-32 w-1/3 flex flex-col justify-center items-center">
                    <i class="text-4rem fa fa-envelope mb-2"></i>
                    <span class="text-2.5rem tracking-2px">info@jjab.nl</span>
                </div>
                <div class="h-32 w-1/3 flex flex-col justify-center items-center">
                    <i class="text-4rem fa fa-map-marker-alt mb-2"></i>
                    <span class="text-2.5rem tracking-2px">Baander 5, 7811HH Emmen</span>
                </div>
            </footer>

        </div>
        @include('scripts')
    </body>
</html>

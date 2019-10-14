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
                    <div data-emergence="hidden" data-animation="animated fadeInUp" class="w-full flex flex-row justify-between mb-16 ">
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
                    <page-transition>Over JJAB</page-transition>

                    <!-- EXPLANATION -->
                    <explanation title="Benieuwd naar wie wij zijn?" description="Lees een stukje over onze achtergrond, waarom we bestaan etc."></explanation>

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

                    <!-- EXPLANATION -->
                    <explanation title="Waar kunnen we je bij helpen?" description="Je kunt hier zonder verplichting je vraag stellen. Dan krijg je van ons z.s.m een mail terug. Dit is geheel vrijblijvend. Je kunt op basis van het antwoord zelf kiezen wat het vervolg is."></explanation>

                    <!-- MAIL FORM -->
                    <jjab-form></jjab-form>

                    <!-- APP ONS -->
                    <phone></phone>

                </container>
            </wrapper>

        </div>
        @include('scripts')
    </body>
</html>

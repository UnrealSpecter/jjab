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
                    <logo-animation></logo-animation>
                </container>
            </wrapper>

            <!-- INTRODUCTION WRAPPER -->
            <wrapper id="#" class="min-h-screen" title="title one">
                <container>

                    <!-- INTRODUCTION INFORMATION -->
                    <introduction>Hallo Jongere!</introduction>

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

            <!-- MAIL -->
            <wrapper id="stel-je-vraag" class="bg-jjab-orange min-h-screen">
                <container>

                    <!-- TRANSITION -->
                    <page-transition>Stel je vraag!</page-transition>

                    <!-- MAIL TEXT -->
                    <div class="wrapper w-full text-center my-10 text-6rem text-jjab-purple tracking-10px anton">
                        Waar kunnen we je bij helpen?
                    </div>

                    <!-- MAIL FORM -->
                    <div class="wrapper w-full flex flex-col">
                        <jjab-form></jjab-form>
                    </div>

                </container>
            </wrapper>

            <!-- CONTACT -->
            <wrapper id="contact" class="bg-jjab-orange min-h-screen">
                <container>

                    <!-- TRANSITION -->
                    <page-transition>APP ONS!</page-transition>

                    <phone></phone>

                    </container>
            </wrapper>

        </div>
        @include('scripts')
    </body>
</html>

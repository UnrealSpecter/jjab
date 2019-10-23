<!doctype html>
<html lang="nl" class="scroll-auto">
    <head data-enhance="false">
        @include('meta')
        @include('styles')
    </head>
    <body class="overflow-x-hidden">
        <div id="vue">

            <!-- LOGO ANIMATION & EYE CATCHER. -->
            <wrapper id="#" class="bg-white min-h-screen flex-center" title="title one">
                <container class="desktop:absolute top-0 h-screen">
                    <brand-menu></brand-menu>
                    <logo-animation></logo-animation>
                </container>
            </wrapper>

            <!-- INTRODUCTION WRAPPER -->
            <wrapper id="#" class="min-h-screen" title="title one">
                <container>

                    <!-- INTRODUCTION INFORMATION -->
                    <introduction>{{ $introduction->first()->text }}</introduction>

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


                    <!-- ANIMATION -->
                    @if($explanation->video)
                    <youtube data-emergence="hidden" data-animation="animated fadeInUp" class="youtube" video-id="{{ $explanation->video }}" /></youtube>
                    <!-- <youtube-vue data-emergence="hidden" data-animation="animated fadeInUp" class="youtube" :videoid="video_id" /> -->
                    @endif

                    <!-- EXPLANATION -->
                    <explanation subtitle="{{ $explanation->subtitle }}" description="{{ $explanation->description }}"></explanation>

                    <!-- CARD WRAPPER -->
                    <div class="w-4/5 tablet-landscape:w-3/4 laptop:w-full flex flex-row flex-wrap justify-center tablet-landscape:justify-between">
                        @foreach($explanation->examples as $example)
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
                    <explanation class="mt-16" subtitle="Benieuwd naar wie wij zijn?" description="Lees een stukje over onze achtergrond, waarom we bestaan etc."></explanation>

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
                    <explanation class="mt-16" subtitle="Waar kunnen we je bij helpen?" description="Je kunt hier zonder verplichting je vraag stellen. Dan krijg je van ons z.s.m een mail terug. Dit is geheel vrijblijvend. Je kunt op basis van het antwoord zelf kiezen wat het vervolg is."></explanation>

                    <!-- STEL JE VRAAG -->
                    <brand-title id="mail">Stel je vraag!</brand-title>

                    <!-- MAIL FORM -->
                    <jjab-form></jjab-form>

                    <!-- CONTACT TITLE -->
                    <brand-title id="app-ons">App Ons!</brand-title>

                    <!-- APP ONS -->
                    <phone
                        phone="{{ $contact->phone_number }}"
                        mail="{{ $contact->email }}"
                        adres="{{ $contact->address }}">
                    </phone>

                </container>
            </wrapper>

        </div>
        @include('scripts')
    </body>
</html>

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
            <wrapper id="#" class="bg-jjab-orange" title="title two">
                <container>

                    <!-- TRANSITION -->
                    <page-transition>Onze kennisbank</page-transition>

                    @foreach($explanations as $explanation)
                    <!-- TITLE -->
                    <brand-title>{{ $explanation->title }}</brand-title>

                    <!-- EXPLANATION -->
                    <explanation title="{{ $explanation->subtitle }}" description="{{ $explanation->description }}"></explanation>

                    <!-- ANIMATION -->
                    <div class="w-full flex flex-row justify-between mb-16 ">
                        <youtube class="rounded-jjab shadow-md w-full h-700px" video-id="{{ $explanation->video }}" />
                    </div>

                    <!-- CARD WRAPPER -->
                    <div class="w-full flex flex-row justify-center">
                        @foreach($explanation->examples as $example)
                        <card>{{ $example->question }}</card>
                        @endforeach
                    </div>
                    @endforeach

                </container>
            </wrapper>

            <!-- JJABS -->
            <wrapper>
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
            <wrapper class="bg-jjab-orange">
                <container>

                    <!-- TRANSITION -->
                    <page-transition>Stel je vraag!</page-transition>

                    <!-- MAIL TEXT -->
                    <div class="wrapper w-full text-center my-10 text-3rem text-white anton">
                        DOE NIET ZO MOEILIJK. STEL GEWOON JE VRAAG.
                    </div>

                    <!-- MAIL FORM -->
                    <div class="wrapper w-full flex flex-col">
                        <jjab-form></jjab-form>
                    </div>

                </container>
            </wrapper>

            <!-- CONTACT -->
            <wrapper class="bg-jjab-orange min-h-screen">
                <container>

                    <!-- TRANSITION -->
                    <page-transition>APP ONS!</page-transition>

                    <!-- <div class="w-1/3 bg-red-300 flex flex-row"> -->

                        <!-- MOBILE -->
                        <img alt="een afbeelding van een smartphone" class="absolute w-2/5 animated" draggable="false" src="/images/smartphone-render.svg">

                        <!-- APPS -->
                        <div class="w-2/5 pt-64 px-16" style="position: absolute;">
                            <div class="row flex flex-row justify-center items-center mb-5">
                                <a class="w-1/3" href="https://www.facebook.com/stichtingjjab/" target="_blank">
                                    <img alt="facebook social media knop" class="w-full apps facebook d-none no-padding-margin animated img-fluid" draggable="false" src="/images/apps/facebook.svg">
                                </a>
                                <a class="w-1/3 mx-5" href="https://www.instagram.com/stichting.jjab/?hl=nl" target="_blank">
                                    <img alt="instagram social media knop"  class="w-full apps no-padding-margin instagram d-none animated img-fluid" draggable="false" src="/images/apps/instagram.svg">
                                </a>
                                <a class="w-1/3" href="https://www.linkedin.com/in/stichting-jjab-0a3594159/" target="_blank">
                                    <img alt="linkedin social media knop"  class="w-full apps linkedin d-none animated no-padding-margin img-fluid" draggable="false" src="/images/apps/linkedin.svg">
                                </a>
                            </div>
                            <div class="row flex flex-row justify-center items-center">
                                <a class="w-1/3" href="https://www.google.nl/maps/place/Baander+5,+7811+HH+Emmen/@52.7814346,6.8939633,17z/data=!3m1!4b1!4m5!3m4!1s0x47b7e63e008b13f1:0xe5e555e1b3c9242c!8m2!3d52.7814346!4d6.896152" target="_blank">
                                    <img alt="google maps social media knop"  class="w-full apps snapchat d-none animated no-padding-margin img-fluid" draggable="false" src="/images/apps/google-maps.svg">
                                </a>
                                <a class="w-1/3 mx-5" href="mailto:renda.wesley@gmail.com?subject=probleem JJAB&body=Waar kunnen we je mee helpen?%0D%0A %0D%0A" target="_blank">
                                    <img alt="via deze knop open je een mail:to naar jjab" class="w-full apps gmail d-none animated no-padding-margin img-fluid" draggable="false" src="/images/apps/gmail.svg">
                                </a>
                                <a class="w-1/3" href="https://api.whatsapp.com/send?phone=31622654017" target="_blank">
                                    <img alt="klik op deze knop om whatsapp te openen" class="w-full apps whatsapp d-none animated no-padding-margin img-fluid" draggable="false" src="/images/apps/whatsapp.svg">
                                </a>
                            </div>
                            <h1 class="contact-title invisible animated d-lg-none d-xl-none anton text-center">App ons!</h1>
                            <div class="w-1/3 bg-red-400"></div>
                        </div>

                    <!-- </div> -->

                    </container>
            </wrapper>

        </div>
        @include('scripts')
    </body>
</html>

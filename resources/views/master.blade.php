<!doctype html>
<html lang="nl">
    <head data-enhance="false">
        @include('meta')
        @include('styles')
    </head>
    <body>
        <div id="vue">
            <!-- INTRODUCTION -->
            <wrapper id="#" class="bg-white min-h-screen" title="title one">
                <container>
                    <logo-animation></logo-animation>
                    <!-- <call-to-action></call-to-action> -->
                </container>
            </wrapper>
            <wrapper id="#" class="min-h-screen" title="title one">
                <container>

                    <!-- INTRODUCTION INFORMATION -->
                    <introduction>Moeilijke Juridische Vragen? JJAB. Geen moeilijke procedures. JJAB. Gratis? JJAB. Een vraag? JJAB. </introduction>

                    <!-- CALL TO ACTION -->
                    <div class="mb-16 shadow-md rounded-jjab flex flex-col justify-center items-center w-full bg-jjab-purple p-16">
                        <h1 class="text-6rem anton tracking-2px text-white mb-10">Juridisch Advies Nodig?</h1>
                        <div class="button-wrapper flex flex-row justify-center w-1/2 items-center text-2rem tracking-2px">
                            <button type="button" class="anton w-1/2 p-5 text-white rounded-jjab shadow-md bg-jjab-orange">Mail</button>
                            <span class="text-4rem text-white anton h-full flex-center p-5">of</span>
                            <button type="button" class="bg-jjab-orange anton w-1/2 text-white rounded-jjab shadow-md p-5">App</button>
                        </div>
                        <span class="text-4rem text-white anton h-full flex-center p-5">ons!</span>
                    </div>

                    <!-- TAGS -->
                    <div class="shadow-md rounded-jjab flex flex-col justify-center items-center w-full bg-jjab-purple p-16 mb-16">
                        <h2 class="text-3rem anton tracking-2px text-white mb-10">Meer weten of een van de volgende onderwerpen?</h2>
                        <div class="tag-wrapper w-full flex-center text-2rem">
                            @foreach($explanations as $explanation)
                            <button type="button" class="whitespace-no-wrap mx-5 bg-jjab-orange anton tracking-2px text-white uppercase leading-none rounded-jjab shadow-md px-10 py-5 transition-all-250ms">{{ $explanation->title }}</button>
                            @endforeach
                        </div>
                    </div>

                </container>
            </wrapper>
            <!-- EXPLANATIONS -->
            <wrapper id="#" class="bg-jjab-orange" title="title two">
                <container>

                    <!-- TRANSITION -->
                    <div class="w-full rounded-jjab flex-center shadow-md top-0 h-300px bg-jjab-purple text-white text-8rem anton">
                        Transition Title
                    </div>

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
                    <div class="flex flex-row justify-between">
                        <card>IK KRIJG MIJN BORG NIET TERUG VAN MIJN HUURBAAS</card>
                        <card>IK KRIJG MIJN BORG NIET TERUG VAN MIJN HUURBAAS</card>
                        <card>IK KRIJG MIJN BORG NIET TERUG VAN MIJN HUURBAAS</card>
                    </div>
                    @endforeach

                </container>
            </wrapper>

            <!-- MAIL -->
            <wrapper>
                <container>

                </container>
            </wrapper>

            <!-- CONTACT -->
            <wrapper>
                <container>

                </container>
            </wrapper>
        </div>
        @include('scripts')
    </body>
</html>

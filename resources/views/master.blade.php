<!doctype html>
<html lang="nl">
    <head data-enhance="false">
        @include('meta')
        @include('styles')
    </head>
    <body>
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
                    <div class="w-full flex flex-row justify-center">
                        @foreach($explanation->examples as $example)
                        <card>{{ $example->question }}</card>
                        @endforeach
                    </div>
                    @endforeach

                </container>
            </wrapper>

            <!-- MAIL -->
            <wrapper>
                <container>

                    <!-- TRANSITION -->
                    <div class="w-full rounded-jjab flex-center shadow-md top-0 h-300px bg-jjab-purple text-white text-8rem anton">
                        wie zijn wij?
                    </div>

                    <!-- EMPLOYEE -->
                    <div class="w-full wrapper flex flex-col">

                        <div class="w-full h-600px flex flex-row flex-no-wrap">
                            <p class="p-24 w-full h-full flex-center text-2rem roboto text-jjab-purple">ik ben Renda Blok, 22 jaar en ik kom uit Emmer-Compascuum. Ik hou van mensen helpen. Ik ben direct en eerlijk maar heb begrip voor de problemen van mensen. Niks maakt mij blijer dan iemand stappen zien maken naar een betere toekomst voor zichzelf.</p>
                            <img class="w-auto h-full object-fit" src="{{asset('/assets/renda-block.png') }}">
                        </div>

                        <div class="flex flex-col rounded-jjab shadow-md bg-jjab-purple w-full p-10 justify-center items-center">
                            <h1 class="text-6rem text-white anton">Renda Blok</h1>
                            <h2 class="roboto text-3rem text-white">The Brains</h2>
                        </div>

                    </div>


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

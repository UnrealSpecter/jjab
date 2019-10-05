<!doctype html>
<html lang="nl">
    <head data-enhance="false">
        @include('meta')
        @include('styles')
    </head>
    <body>
        <div id="vue">
            <!-- INTRODUCTION -->
            <wrapper id="#" class="bg-white" title="title one">
                <container>
                    <!-- <logo-animation></logo-animation> -->
                    <introduction>Moeilijke Juridische Vragen? JJAB. Geen moeilijke procedures. JJAB. Gratis? JJAB. Een vraag? JJAB. </introduction>
                </container>
            </wrapper>
            <!-- EXPLANATIONS -->
            <wrapper id="#" class="" title="title two">
                <container>

                    <!-- TITLE -->
                    <brand-title>TITLE ELEMENT</brand-title>

                    <!-- EXPLANATION -->
                    <div class="w-full">
                        <explanation title="WAT IS HUURRECHT?" description="Als je een plek huurt kan je te maken krijgen met huurrecht. Alle problematiek tussen jou en je
huurbaas valt hier onder. Je hebt rechten en plichten als huurder die je goed moet weten."></explanation>
                    </div>

                    <!-- ANIMATION -->
                    <div class="card-wrapper flex flex-row justify-between mb-10">
                        <youtube class="rounded-lg mb-10" video-id="Mgfe5tIwOj0" />
                    </div>

                    <!-- CARD WRAPPER -->
                    <div class="card-wrapper flex flex-row justify-between mb-10">
                        <card>IK KRIJG MIJN BORG NIET TERUG VAN MIJN HUURBAAS</card>
                        <card>IK KRIJG MIJN BORG NIET TERUG VAN MIJN HUURBAAS</card>
                        <card>IK KRIJG MIJN BORG NIET TERUG VAN MIJN HUURBAAS</card>
                    </div>

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

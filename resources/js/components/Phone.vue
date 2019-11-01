<template>

    <div class="invisible w-4/5 tablet-portrait:w-3/4 laptop:w-full" data-emergence="hidden" data-animation="animated fadeInUp">

        <!-- PHONE WRAPPER -->
        <div class="w-full flex flex-row justify-center items-end relative h-300px tablet-portrait:h-600px laptop:h-500px desktop:h-700px">

            <!-- PHONE IMAGE -->
            <img alt="een afbeelding van een smartphone" class="absolute h-full animated no-drag" src="/images/smartphone-render.svg">

            <!-- SOCIAL -->
            <div class="w-3/5 phone-landscape:w-1/3 tablet-portrait:w-1/2 top-0 pt-100px tablet-portrait:pt-200px laptop:w-1/4 laptop:pt-200px desktop:pt-250px absolute">

                <div class="flex flex-row justify-center items-center mb-5">
                    <a class="w-1/3" href="https://www.facebook.com/stichtingjjab/" target="_blank">
                        <img alt="facebook social media knop" src="/images/apps/facebook.svg">
                    </a>
                    <a class="w-1/3 mx-5" href="https://www.instagram.com/stichting.jjab/?hl=nl" target="_blank">
                        <img alt="instagram social media knop" src="/images/apps/instagram.svg">
                    </a>
                    <a class="w-1/3" href="https://www.linkedin.com/in/stichting-jjab-0a3594159/" target="_blank">
                        <img alt="linkedin social media knop" src="/images/apps/linkedin.svg">
                    </a>
                </div>

                <div class="flex flex-row justify-center items-center">
                    <a class="w-1/3" href="https://www.google.nl/maps/place/Baander+5,+7811+HH+Emmen/@52.7814346,6.8939633,17z/data=!3m1!4b1!4m5!3m4!1s0x47b7e63e008b13f1:0xe5e555e1b3c9242c!8m2!3d52.7814346!4d6.896152" target="_blank">
                        <img alt="google maps social media knop" src="/images/apps/google-maps.svg">
                    </a>
                    <a class="w-1/3 mx-5" href="mailto:info@jjab.nl?subject=help! JJAB&body=Waar kunnen we je mee helpen?%0D%0A %0D%0A" target="_blank">
                        <img alt="via deze knop open je een mail:to naar jjab" src="/images/apps/gmail.svg">
                    </a>
                    <a class="w-1/3 animated bounce infinite slow" href="https://api.whatsapp.com/send?phone=31653138729" target="_blank">
                        <img alt="klik op deze knop om whatsapp te openen" src="/images/apps/whatsapp.svg">
                    </a>
                </div>

            </div>

        </div>

        <!-- FOOTER -->
        <footer class="tablet-landscape:p-8 p-6 w-full rounded-jjab text-white bg-jjab-purple flex-wrap anton flex flex-row justify-between items-center">

            <!-- PHONE -->
            <div class="footer-group">
                <i class="fa fa-phone footer-icon"></i>
                <span class="footer-text">{{ phone }}</span>
            </div>

            <!-- MAIL -->
            <div class="footer-group">
                <i class="fa fa-envelope footer-icon"></i>
                <span class="footer-text">{{ mail }}</span>
            </div>

            <!-- ADRES -->
            <div class="footer-group">
                <i class="fa fa-map-marker-alt footer-icon"></i>
                <span class="footer-text">{{ adres }}</span>
            </div>

        </footer>

    </div>

</template>

<script>
    export default {
        props: ['mail', 'adres', 'phone']
    }
</script>

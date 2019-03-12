<div class="section-wrapper d-flex flex-row justify-content-center justify-content-lg-start justify-content-xl-start col-12 no-padding-margin orange-bg">

    <img alt="een afbeelding van een smartphone" class="col-9 col-xs-4 col-sm-4 col-md-7 col-lg-5 offset-lg-1 col-xl-4 offset-xl-1 smartphone d-none animated img-fluid" draggable="false" src="/images/smartphone-render.svg" alt="smartphone render by Sofie Dielemans">
    <div class="col-9 col-xs-4 col-sm-4 col-md-7 col-lg-5 offset-lg-1 col-xl-4 offset-xl-1 div-apps-1" style="position: absolute;">
        <div class="row d-flex flex-row justify-content-center align-items-center">
            <a class="col-3 link-app" href="https://www.facebook.com/stichtingjjab/" target="_blank">
                <img alt="facebook social media knop" class="col-12 apps facebook d-none no-padding-margin animated img-fluid" draggable="false" src="/images/apps/facebook.svg" alt="Whatsapp">
            </a>
            <a class="col-3 link-app" href="https://www.instagram.com/stichting.jjab/?hl=nl" target="_blank">
                <img alt="instagram social media knop"  class="col-12 apps no-padding-margin instagram d-none animated img-fluid" draggable="false" src="/images/apps/instagram.svg" alt="Facebook">
            </a>
            <a class="col-3 link-app" href="https://www.linkedin.com/in/stichting-jjab-0a3594159/" target="_blank">
                <img alt="linkedin social media knop"  class="col-12 apps linkedin d-none animated no-padding-margin img-fluid" draggable="false" src="/images/apps/linkedin.svg" alt="linkedin">
            </a>
        </div>
        <div class="row d-flex flex-row justify-content-center align-items-center">
            <a class="col-3 link-app" href="https://www.google.nl/maps/place/Baander+5,+7811+HH+Emmen/@52.7814346,6.8939633,17z/data=!3m1!4b1!4m5!3m4!1s0x47b7e63e008b13f1:0xe5e555e1b3c9242c!8m2!3d52.7814346!4d6.896152" target="_blank">
                <img alt="google maps social media knop"  class="col-12 apps snapchat d-none animated no-padding-margin img-fluid" draggable="false" src="/images/apps/google-maps.svg" alt="Google Maps">
            </a>
            <a class="col-3 link-app" href="mailto:renda.wesley@gmail.com?subject=probleem JJAB&body=Waar kunnen we je mee helpen?%0D%0A %0D%0A" target="_blank">
                <img alt="via deze knop open je een mail:to naar jjab" class="col-12 apps gmail d-none animated no-padding-margin img-fluid" draggable="false" src="/images/apps/gmail.svg" alt="linkedin">
            </a>
            <a class="col-3 link-app" href="https://api.whatsapp.com/send?phone=31622654017" target="_blank">
                <img alt="klik op deze knop om whatsapp te openen" class="col-12 apps whatsapp d-none animated no-padding-margin img-fluid" draggable="false" src="/images/apps/whatsapp.svg" alt="Instagram">
            </a>
        </div>
        <h1 class="contact-title invisible animated d-lg-none d-xl-none anton text-center">App ons!</h1>
    </div>

    <div class="contact-text-wrapper invisible animated col-12 d-flex flex-row align-items-center justify-content-center no-pointer-events">
        <div class="col-6 offset-6 d-flex flex-column d-none d-xs-none d-sm-none d-md-none d-lg-flex d-xl-flex" style="text-align: left;">
            <h1 class="contact-title anton">App ons</h1>
            <h3 class="contact-text d-flex flex-row align-items-center">
                <i class="fas fa-phone d-flex align-items-center justify-content-center"></i>
                <span style="padding-left: 25px;">+{{ $contact->phone_number }}</span>
            </h3>
            <h3 class="contact-text d-flex flex-row align-items-center">
                <i class="fas fa-envelope d-flex align-items-center justify-content-center"></i>
                <span style="padding-left: 25px;">{{ $contact->email }}</span>
            </h3>
            <h3 class="contact-text d-flex flex-row align-items-center">
                <i class="fas fa-map-marker-alt d-flex align-items-center justify-content-center"></i>
                <span style="padding-left: 25px;">{{ $contact->street_name }} {{ $contact->house_number }}, {{ $contact->postal_code }} {{ $contact->residence }}</span>
            </h3>
        </div>
    </div>

</div>

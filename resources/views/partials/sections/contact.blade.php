<div class="section-wrapper flex-r align-v col-12 no-padding-margin" style="height: 100vh; width: 100vw; background-color: #ef7c38;">
    <img class="col-4 offset-1 smartPhone d-none animated img-fluid" draggable="false" src="/images/smartphone-render.svg" alt="smartphone render by Sofie Dielemans">

    <div class="col-4 offset-1 flex-r div-apps-1" style="position: absolute; padding: 0;">
        <a class="offset-2 col-2  link-app" href="https://www.facebook.com/stichtingjjab/" target="_blank">
            <img class="apps facebook d-none no-padding-margin animated col-12 " draggable="false" src="/images/apps/facebook.svg" alt="Whatsapp">
        </a>
        <a class="col-2 link-app" href="https://www.instagram.com/stichting.jjab/?hl=nl" target="_blank">
            <img class="no-padding-margin col-12 apps instagram d-none animated " draggable="false" src="/images/apps/instagram.svg" alt="Facebook">
        </a>
        <a class="col-2 link-app" href="https://api.whatsapp.com/send?phone=31622654017&text=hoi%20mijn%20naam%20is%20" target="_blank">
            <img class="apps whatsapp d-none animated no-padding-margin col-12" draggable="false" src="/images/apps/whatsapp.svg" alt="Instagram">
        </a>
        <a class="col-2 link-app" href="#" target="_blank">
            <img class="apps snapchat d-none animated col-12 no-padding-margin " draggable="false" src="/images/apps/snapchat.svg" alt="Snapchat">
        </a>


    </div>
    <div class="col-4 offset-1 flex-r div-apps-2" style="position: absolute; padding: 0;">
    <a class="offset-4 col-2 link-app" href="mailto:renda.wesley@gmail.com?subject=probleem JJAB
    &body=Vertel ons wat je probleem is.%0D%0A %0D%0A" target="_blank">
        <img class="apps gmail d-none animated col-12 no-padding-margin " draggable="false" src="/images/apps/gmail.svg" alt="linkedin">
    </a>
    <a class="col-2 link-app" href="https://www.linkedin.com/in/stichting-jjab-0a3594159/" target="_blank">
        <img class="apps linkedin d-none animated col-12 no-padding-margin " draggable="false" src="/images/apps/linkedin.svg" alt="linkedin">
    </a>
    </div>

    <div class="contact-text d-none animated col-12 offset-md-4 offset-sm-3 offset-xs-3 flex-c align-v justify-c">

        <div class="col-6 flex-c" style="text-align: left; ">
            <h1>App ons</h1>
            <h3 style="margin-top: 25px;"><i class="fas fa-phone" style="width: 28px; height: 28px;"></i> +{{ $contact->PhoneNumber }}</h3>
            <h3><i class="fas fa-envelope" style="width: 28px; height: 28px;"></i> {{ $contact->Email }}</h3>
            <h3><i class="fas fa-map-marker-alt" style="width: 28px; height: 28px;"></i> {{ $contact->StreetName }} {{ $contact->HouseNumber }}, {{ $contact->PostalCode }} {{ $contact->Residence }} </h3>
        </div>
    </div>
</div>

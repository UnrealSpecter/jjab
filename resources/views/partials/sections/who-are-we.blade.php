<div class="section-wrapper d-flex flex-row flex-wrap align-items-center justify-content-center no-padding-margin blue-bg">

        <img class="renda image-render align-left img-fluid no-padding-margin d-none animated"                  src="{{ asset('/images/renders/informeel-renda.png') }}">
        <img class="wesley image-render align-right img-fluid no-padding-margin d-none animated"                src="{{ asset('/images/renders/informeel-wesley.png') }}">
        <img class="renda image-render renda-half align-left img-fluid no-padding-margin d-none animated"       src="{{ asset('/images/renders/half-renda.png') }}">
        <img class="wesley image-render align-right img-fluid no-padding-margin d-none animated"                src="{{ asset('/images/renders/half-wesley.png') }}">
        <img class="renda image-render renda-zakelijk align-left img-fluid no-padding-margin d-none animated"   src="{{ asset('/images/renders/zakelijk-renda.png') }}">
        <img class="wesley image-render align-right img-fluid no-padding-margin d-none animated"                src="{{ asset('/images/renders/zakelijk-wesley.png') }}">

        <div class="text-wrapper d-flex flex-row flex-xl-column flex-wrap justify-content-center align-items-xl-center">
            <div class="paragraph w-75 d-none half-a-second fadeIn d-flex flex-column align-items-center justify-content-center">
                <p class="w-100 renda-text adobe-caslon text-center">{{ $employees[0]->why }}</p>
                <div class="button text-center animated fadeInDown">Lees Meer</div>
            </div>
            <div class="paragraph w-75 d-none half-a-second fadeIn d-flex flex-column align-items-center justify-content-center">
                <p class="w-100 renda-text adobe-caslon text-center">{{ $employees[1]->why }}</p>
                <div class="button text-center animated fadeInDown">Lees Meer</div>
            </div>
            <div class="paragraph w-75 d-none half-a-second fadeIn d-flex flex-column align-items-center justify-content-center">
                <p class="w-100 renda-text adobe-caslon text-center">{{ $employees[0]->who }}</p>
                <div class="button text-center animated fadeInDown">Lees Meer</div>
            </div>
            <div class="paragraph w-75 d-none half-a-second fadeIn d-flex flex-column align-items-center justify-content-center">
                <p class="w-100 renda-text adobe-caslon text-center">{{ $employees[1]->who }}</p>
                <div class="button text-center animated fadeInDown">Lees Meer</div>
            </div>
            <div class="paragraph w-75 d-none half-a-second fadeIn d-flex flex-column align-items-center justify-content-center">
                <p class="w-100 renda-text adobe-caslon text-center">{{ $employees[0]->experience }}</p>
                <div class="button text-center animated fadeInDown">Lees Meer</div>
            </div>
            <div class="paragraph w-75 d-none half-a-second fadeIn d-flex flex-column align-items-center justify-content-center">
                <p class="w-100 renda-text adobe-caslon text-center">{{ $employees[1]->experience }}</p>
                <div class="button text-center animated fadeInDown">Lees Meer</div>
            </div>
        </div>

</div>

<div class="section-wrapper d-flex flex-r flex-wrap align-items-center justify-content-center no-padding-margin blue-bg">

        <img class="renda image-render align-left img-fluid no-padding-margin animated d-none"                  src="{{ asset('/images/renders/informeel-renda.png') }}">
        <img class="wesley image-render align-right img-fluid no-padding-margin animated d-none"                src="{{ asset('/images/renders/informeel-wesley.png') }}">
        <img class="renda image-render renda-half align-left img-fluid no-padding-margin animated d-none"       src="{{ asset('/images/renders/half-renda.png') }}">
        <img class="wesley image-render align-right img-fluid no-padding-margin animated d-none"                src="{{ asset('/images/renders/half-wesley.png') }}">
        <img class="renda image-render renda-zakelijk align-left img-fluid no-padding-margin animated d-none"   src="{{ asset('/images/renders/zakelijk-renda.png') }}">
        <img class="wesley image-render align-right img-fluid no-padding-margin animated d-none"                src="{{ asset('/images/renders/zakelijk-wesley.png') }}">

        <div class="text-wrapper d-flex flex-row flex-xl-column flex-wrap justify-content-center align-items-xl-center">
            <p class="col-10 col-xl-7 renda-text who-are-we-text animated fadeInDown d-none adobe-caslon">{{ $employees[0]->who }}</p>
            <p class="col-10 col-xl-7 renda-text who-are-we-text animated fadeInDown d-none adobe-caslon">{{ $employees[1]->who }}</p>
            <p class="col-10 col-xl-7 renda-text who-are-we-text animated fadeInDown d-none adobe-caslon">{{ $employees[0]->why }}</p>
            <p class="col-10 col-xl-7 renda-text who-are-we-text animated fadeInDown d-none adobe-caslon">{{ $employees[1]->why }}</p>
            <p class="col-10 col-xl-7 renda-text who-are-we-text animated fadeInDown d-none adobe-caslon">{{ $employees[0]->experience }}</p>
            <p class="col-10 col-xl-7 renda-text who-are-we-text animated fadeInDown d-none adobe-caslon">{{ $employees[1]->experience }}</p>
            <div class="button col-3 col-xl-2 d-none animated fadeInDown" style="text-align: center;">Lees Meer</div>
        </div>
        <!-- <div class="button" style="position: absolute; top: 10px; text-align: center;">Lees Meer</div> -->

</div>

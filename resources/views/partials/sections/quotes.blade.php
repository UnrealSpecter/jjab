<div class="section-wrapper flex-r align-v col-12 no-padding-margin purple-bg">

    <div class="col-12 col-lg-8 offset-lg-2 no-drag">
        <h1 class="col-11 d-flex flex-column flex-xs-column flex-sm-column flex-md-column flex-lg-column d-xl-inline anton">
            <span class="quote-me">Ik</span>
            @foreach($quotes as $quote)
            <span class="quotes">{{ $quote->content }}</span>
            @endforeach
        </h1>
    </div>

    <div class="col-12 flex-c align-v justify-c scroll-indicator animated" style="padding: 15px; position: absolute; bottom: 0;">
        <span class="uppercase anton scroll-text d-none animated">Iets voor mij?</span>
        <img src="{{ asset('/images/arrows/arrow-big-purple.svg') }}" class="img-fluid col-1 scroll-arrow d-none animated">
    </div>

</div>

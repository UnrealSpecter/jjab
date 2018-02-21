//script variables
var hidden = 'd-none';

//on page load function (waits till the whole page is loaded)
window.onload = function(){
      window.document.body.onload = loaded(); // note removed parentheses
};

//initiate fullpage scrolling and reveal sections
function loaded(){

    $('.section, .active').removeClass('d-none').addClass('animated fadeIn');
    $('.section').removeClass('d-none').addClass('animated fadeIn');
    // $('.load-wrapper').addClass('animated fadeOut');

    $('#fullpage').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: false,
        anchors:['jeugd-juridisch-advies', 'waar-helpen-we-mee', 'wie-zijn-wij', 'contact'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Jeugd Juridisch Advies', 'Waar helpen we mee?', 'Wie zijn wij dan?', 'Contact'],
        showActiveTooltip: true,

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: false,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        continuousHorizontal: false,
        scrollHorizontally: false,
        interlockedSlides: false,
        dragAndMove: false,
        offsetSections: false,
        resetSliders: false,
        fadingEffect: false,
        scrollOverflow: false,
        scrollOverflowReset: false,
        scrollOverflowOptions: null,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,
        bigSectionsDestination: null,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        parallax: false,
        parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        lazyLoading: true,

        //events
        afterLoad: function(anchorLink, index){

            var slideInLeft     = 'slideInLeft';
            var slideInRight    = 'slideInRight';
            var slideInUp       = 'slideInUp';
            var slideInDown     = 'slideInDown';
            var fadeIn          = 'fadeIn';
            var fadeInUp        = 'fadeInUp';
            var fadeInDown      = 'fadeInDown';
            var fadeInRight     = 'fadeInRight';
            var fadeInLeft      = 'fadeInLeft';
            var delay           = '500';

            if(anchorLink == 'jeugd-juridisch-advies'){
                logoAnimation();
        	}

            if(anchorLink == 'waar-helpen-we-mee'){
                startQuoteCycling();
        	}

            if(anchorLink == 'wie-zijn-wij'){
                console.log('3');
        	}

            if(anchorLink == 'contact'){
                phoneAnimation();
        	}
        }
    });
}

function logoAnimation(){

    var blueShape = $('.blue-shape');
    var purpleShape = $('.purple-shape');
    var orangeShape = $('.orange-shape');

    blueShape.removeClass(hidden);
    purpleShape.removeClass(hidden);

    blueShape.addClass('fadeInLeft');
    purpleShape.addClass('fadeInRight');

    setTimeout(function(){
        orangeShape.removeClass(hidden);
        orangeShape.addClass('fadeIn');
        animateTitle();
    }, 1000);

}

function animateTitle(){

    var mainTitle = $('.main-title');
    var subTitle = $('.sub-title');

    mainTitle.removeClass(hidden).addClass('fadeInDown');
    subTitle.removeClass(hidden).addClass('fadeInUp');

    revealScrollIndicator();
}

function revealScrollIndicator() {

    var scrollText = $('.scroll-text');
    var scrollArrow = $('.scroll-arrow');

    scrollText.removeClass(hidden).addClass('fadeIn');
    scrollArrow.removeClass(hidden).addClass('fadeInUp');

}

function startQuoteCycling() {

    //cycle through quotes
    var quotes = $(".quotes");
    var quoteIndex = -1;

    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(1000)
            .delay(2000)
            .fadeOut(1000, showNextQuote);
    }
    showNextQuote();

}

function phoneAnimation(){

    var smartPhone = $('.smartPhone');
    var whatsApp = $('.whatsapp');

    smartPhone.removeClass(hidden).addClass('slideInUp');

    setTimeout(function(){
        whatsApp.removeClass('slideInUp').addClass('bounce infinite')
    }, 1000);





}
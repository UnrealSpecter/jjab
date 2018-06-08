//script variables
var hidden = 'd-none';
var invisible = 'invisible';

var startedLoaderQuoteCycling = false;
var isRevealedInitialWhoAreWeAnimation = false;

var slideInLeft     = 'slideInLeft';
var slideInRight    = 'slideInRight';
var slideInUp       = 'slideInUp';
var slideInDown     = 'slideInDown';
var fadeIn          = 'fadeIn';
var fadeInUp        = 'fadeInUp';
var fadeInDown      = 'fadeInDown';
var fadeInRight     = 'fadeInRight';
var fadeInLeft      = 'fadeInLeft';
var bounce          = 'infinite bounce';
var delay           = '500';

//on page load function (waits till the whole page is loaded)
window.onload = function(){
      window.document.body.onload = loaded(); // note removed parentheses
};

//initiate fullpage scrolling and reveal sections
function loaded(){

    $('.section, .active').removeClass('d-none').addClass('animated fadeIn');
    $('.section').removeClass('d-none').addClass('animated fadeIn');
    // $('.load-wrapper').addClass('animated fadeOut');

    $('.button').on('click', function(){
        if(unlocked){
            cycleWhoAreWe();
        }
    });

    $('#fullpage').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: false,
        anchors:['jeugd-juridisch-advies', 'waar-helpen-we-mee', 'wie-zijn-wij', 'contact'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Juridisch Advies', 'Waar helpen we mee?', 'Wie zijn wij dan?', 'Contact'],
        showActiveTooltip: false,

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
        onLeave: function(index, nextIndex, direction){
            hideScrollIndicator();
        },
        afterLoad: function(anchorLink, index){
            if(anchorLink == 'jeugd-juridisch-advies'){
                logoAnimation();
        	}
            if(anchorLink == 'waar-helpen-we-mee'){
                if(!startedLoaderQuoteCycling){
                    startQuoteCycling();
                    startedLoaderQuoteCycling = true;
                }
                revealScrollIndicator('scroll-quotes');
        	}
            if(anchorLink == 'wie-zijn-wij'){
                if(!isRevealedInitialWhoAreWeAnimation){
                    cycleWhoAreWe();
                    isRevealedInitialWhoAreWeAnimation = true;
                }
                revealScrollIndicator('who-are-we');
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

    revealScrollIndicator('home');
}

function hideScrollIndicator(){
    $('.scroll-indicator').not(hidden).addClass(hidden);
}

var scrollText = ' > .scroll-text';
var scrollArrow = ' > .scroll-arrow';
var scrollIndicator = '.scroll-indicator';

function revealScrollIndicator(section) {
    var section = '.' + section;
    $(scrollIndicator + section).removeClass(hidden);
    playSectionBounceIntro(section);
}

function playSectionBounceIntro(section){
    setTimeout(function(){
        $(scrollIndicator + section + scrollText).removeClass(fadeIn).addClass(bounce);
        $(scrollIndicator + section + scrollArrow).removeClass(fadeInUp).addClass(bounce);
    }, 1500);
}

//QUOTES PAGE CYCLING FUNCTION THAT CYCLES THROUGH ALL THE ADDED QUOTES
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
var unlocked = true;
function unlock () {
    unlocked = true;
}

function cycleWhoAreWe(){

    $('.button').removeClass('d-none');

    unlocked = false;

    setTimeout(unlock, 1500);

    var currentImage = $('.image-render').not('.' + hidden);
    var nextImage = currentImage.next().hasClass('image-render') ? currentImage.next() : $('.image-render').first();

    var currentText = $('.who-are-we-text').not('.' + hidden);
    var nextText = currentText.next().hasClass('who-are-we-text') ? currentText.next() : $('.who-are-we-text').first();

    currentImage.removeClass('fadeInUp').fadeOut(500, function(){
        currentImage.addClass(hidden);
        currentImage.removeAttr('style');
    });

    currentText.addClass(hidden);
    currentText.removeAttr('style');

    nextImage.removeClass(hidden).addClass('fadeInUp');
    nextText.removeClass(hidden);

}

function phoneAnimation(){

    var smartPhone = $('.smartphone');
    var whatsApp = $('.whatsapp');
    var apps = $('.apps');
    var contactText = $('.contact-text-wrapper');
    var contactTitle = $('.contact-title');

    setTimeout(function(){
      smartPhone.removeClass(hidden).addClass('slideInUp');
    }, 200);
    setTimeout(function(){
        whatsApp.removeClass('slideInUp').addClass('bounceApp infinite');
        if($(window).width() < 992){
            contactTitle.removeClass(invisible).addClass('fadeInUp');
        }
    }, 2400);

    setTimeout(function(){
        apps.removeClass(hidden).addClass('fadeIn');
        if($(window).width() > 992){
            contactText.removeClass(invisible).addClass('slideInRight');
        }
    }, 1700);

}

var animation;

//scroll to top before starting anything.
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
    history.pushState('', '', window.location.pathname);
}

window.onload = function(){
    window.document.body.onload =  playLogoAnimation(); // note removed parentheses
};

var hidden = 'hidden';
function playLogoAnimation(){



    console.log(window.devicePixelRatio);



    history.pushState('', '', window.location.pathname);

    var blueShape = $('#blue-shape');
    var purpleShape = $('#purple-shape');
    var orangeShape = $('#orange-shape');
    var text = $('#logo-text');
    var nav = $('#nav');
    var pageTransition = $('#page-transition');

    playAnimation(blueShape, 'animated fadeInLeft duration-1s');
    playAnimation(purpleShape, 'animated fadeInRight duration-1s');
    playAnimation(orangeShape, 'animated fadeIn duration-1s delay-1s');
    playAnimation(text, 'animated fadeInUp duration-1s delay-1s');
    playAnimation(nav, 'animated fadeInDown delay-1s');

    if(window.devicePixelRatio >= 1.20 ){
        document.body.style.zoom = "75%";
        $('.invisible').removeClass('invisible');
        $('#logo-animation-wrapper').addClass('mt-200px');
        $('#wat-doen-wij').addClass('mt-200px');
    }
    else {
        playAnimation(pageTransition, 'animated fadeInUp delay-2s', startEmergence());
    }

}

function startEmergence(){

    emergence.init({
        container: window,
        reset: true,
        handheld: true,
        throttle: 250,
        elemCushion: 0,
        offsetTop: 0,
        offsetRight: 0,
        offsetBottom: 0,
        offsetLeft: 0,
        callback: function(element, state) {
            if (state === 'visible') {

                var element = $(element);

                var hasAnimated = element.data('has-animated');

                animation = element.data('animation');

                if(!hasAnimated) {
                    playAnimation(element, animation);
                }

            }
        }

    });

}

// optimized animation class
function playAnimation(element, animation, callback) {

        element.removeClass('invisible').addClass(animation);

        function handleAnimationEnd() {
            element.removeClass(animation);
            element.off('animationend', handleAnimationEnd);
            element.data('has-animated', true);
            if (typeof callback === 'function') callback()
        }

        element.on('animationend', handleAnimationEnd);

}

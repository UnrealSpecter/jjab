var animation;

//scroll to top before starting anything.
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

window.onload = function(){
    window.document.body.onload =  playLogoAnimation(); // note removed parentheses
};

var hidden = 'hidden';

function playLogoAnimation(){

    if(window.devicePixelRatio == 1.25 ){
        alert('zoom 125% scaling');
        $("body").addClass("reset-zoom");
    }

    history.pushState('', '', window.location.pathname);

    var blueShape = $('#blue-shape');
    var purpleShape = $('#purple-shape');
    var orangeShape = $('#orange-shape');
    var text = $('#logo-text');
    var nav = $('#nav');

    playAnimation(blueShape, 'animated fadeInLeft duration-1s');
    playAnimation(purpleShape, 'animated fadeInRight duration-1s');
    playAnimation(orangeShape, 'animated fadeIn duration-1s delay-1s');
    playAnimation(text, 'animated fadeInUp duration-1s delay-1s');
    playAnimation(nav, 'animated fadeInDown delay-1s', startEmergence());

}



function startEmergence(){

    console.log('starting emergence');

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

                console.log('revealing element');

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

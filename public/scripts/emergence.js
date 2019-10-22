var animation;

window.onload = function(){
      window.document.body.onload =  initEmergence(); // note removed parentheses
};

function initEmergence(){

    // hide all elements that implement emergence
    $("*[data-emergence='hidden']").addClass('invisible');

    logoAnimation();

    startEmergence();
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

var animation;

$(document).ready(function(){

    initEmergence();

});

function initEmergence(){

    // hide all elements that implement emergence
    $("*[data-emergence='hidden']").addClass('invisible');

    startEmergence();
}

function startEmergence(){

    emergence.init({
        container: window,
        reset: true,
        handheld: false,
        throttle: 250,
        elemCushion: 0.25,
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

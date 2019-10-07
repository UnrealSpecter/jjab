var animation;
var delay;
var hasAnimated;
var type;

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
        reset: false,
        handheld: true,
        throttle: 250,
        elemCushion: 0.25,
        offsetTop: 0,
        offsetRight: 0,
        offsetBottom: 0,
        offsetLeft: 0,
        callback: function(element, state) {
            if (state === 'visible') {
                var element = $(element);

                type = element.data('type');
                animation = element.data('animation');
                delay = element.data('delay');
                hasAnimated = element.data('has-animated');

                element.attr('data-has-animated', true);

                if(!hasAnimated){
                    playAnimation(element, type, animation, delay);
                }

            } else if (state === 'reset') {
            } else if (state === 'noreset') {}

        }

    });

}

function playAnimation(element, type, animation, delay = 0) {

    var animationType;

    type ? animationType = type : animationType = "animation";

    setTimeout(function(){
        $(element)
            .removeClass('invisible')
            .addClass(type + ' ' + animation);
            // if($(element).hasClass('animation') && $(element).data('has-animated') === false){
            //     playLottieAnimation(element);
            // }
    }, delay);

}

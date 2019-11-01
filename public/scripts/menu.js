let menuButton = $('#menu-button');
let closeButton = $('#close-button');
let menu = $('#menu-wrapper');
let menuItems = $('#menu-wrapper > a');

menuButton.on('click', function(){
    menu.toggleClass('invisible pointer-events-none');
    playAnimation(menu, 'animated slideInRight fast');
});

closeButton.on('click', function(){
    closeMenu();
});

menuItems.on('click', function(){
    closeMenu();
});

function closeMenu(){
    if(viewport('tablet-portrait')){
        playAnimation(menu, 'animated slideOutRight', function(){
            menu.toggleClass('invisible pointer-events-none');
        });
    }
}

// viewport calculator helper
let width, height;

$(document).ready(function(){
    calculateScreenSize();
});

window.onresize = function(event) {
    calculateScreenSize();
};

function calculateScreenSize(){
    width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    height = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
}

var screens = {
    'phone-landscape': 576,
    'tablet-portrait': 768,
    'tablet-landscape': 992,
    'laptop': 1200,
    'desktop': 1500
}

function viewport(screen) {

    console.log(width, screen, width <= screens[screen] ? true : false);

    if(width < screens[screen]){
        return true;
    }
    else {
        return false;
    }

}

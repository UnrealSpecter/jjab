var menuButton = $('#menu-button');
var closeButton = $('#close-button');
var menuItems = $('#menu-items');
menuButton.on('click', function(){
    menuItems.toggleClass('invisible pointer-events-none');
    playAnimation(menuItems, 'animated slideInRight', function(){

    });
});

closeButton.on('click', function(){
    playAnimation(menuItems, 'animated slideOutRight', function(){
        menuItems.toggleClass('invisible pointer-events-none');
    });
});

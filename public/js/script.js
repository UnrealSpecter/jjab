window.onload = function(){
      window.document.body.onload = logoAnimation(); // note removed parentheses
};

function logoAnimation(){

    var hidden = 'd-none';
    var blueShape = $('.blue-shape');
    var purpleShape = $('.purple-shape');
    var orangeShape = $('.orange-shape');

    blueShape.removeClass(hidden);
    purpleShape.removeClass(hidden);

    blueShape.addClass('slideInLeft');
    purpleShape.addClass('slideInRight');

    setTimeout(function(){
        orangeShape.removeClass(hidden);
        orangeShape.addClass('fadeIn');
    }, 1500);

}

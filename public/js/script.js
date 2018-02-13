window.onload = function(){
      window.document.body.onload = logoAnimation(); // note removed parentheses
};

var hidden = 'd-none';
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
    }, 2000);

}

function animateTitle(){

    var mainTitle = $('.main-title');
    var subTitle = $('.sub-title');

    mainTitle.removeClass(hidden).addClass('fadeInDown');
    subTitle.removeClass(hidden).addClass('fadeInUp');
}

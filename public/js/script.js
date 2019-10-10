window.onload = function(){
      window.document.body.onload = logoAnimation(); // note removed parentheses
};

function logoAnimation(){
    //
    // var blueShape = $('.blue-shape');
    // var purpleShape = $('.purple-shape');
    // var orangeShape = $('.orange-shape');
    //
    // blueShape.removeClass(hidden);
    // purpleShape.removeClass(hidden);
    //
    // blueShape.addClass('fadeInLeft');
    // purpleShape.addClass('fadeInRight');
    //
    // setTimeout(function(){
    //     orangeShape.removeClass(hidden);
    //     orangeShape.addClass('fadeIn');
    //     animateTitle();
    // }, 1000);

}


// function animateTitle(){
//
//     var mainTitle = $('.main-title');
//     var subTitle = $('.sub-title');
//
//     mainTitle.removeClass(hidden).addClass('fadeInDown');
//     subTitle.removeClass(hidden).addClass('fadeInUp');
//
//     revealScrollIndicator();
// }

// function revealScrollIndicator() {
//
//     var scrollText = $('.scroll-text');
//     var scrollArrow = $('.scroll-arrow');
//
//     scrollText.removeClass(hidden).addClass('fadeIn');
//     scrollArrow.removeClass(hidden).addClass('fadeInUp');
//
//     // $('.scroll-indicator').removeClass(hidden).addClass('fadeIn');
// }

// function startLoaderQuoteCycling() {
//
//     //cycle through quotes
//     var quotes = $(".quotes");
//     var quoteIndex = -1;
//     function showNextQuote() {
//         ++quoteIndex;
//         quotes.eq(quoteIndex % quotes.length)
//             .fadeIn(1000)
//             .delay(2000)
//             .fadeOut(1000, showNextQuote);
//     }
//     showNextQuote();
// }

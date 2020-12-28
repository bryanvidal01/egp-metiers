function isMobile(){
    if($(window).width() < 769){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){

    if(!isMobile()){
        var slideVisible = 3;
    }else{
        var slideVisible = 1;
    }

    slider = $('.slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: slideVisible,
        slidesToScroll: slideVisible,
        focusOnSelect: true,
        dots: true,
        draggable: true
    });


});


$(document).ready(function () {
    // Select Theme


    // Navigation
    function scrollToAnimate(scrollTo){
        $("html, body").stop().animate({scrollTop:scrollTo}, 100, 'swing');
    }

    $('button.navigation').click(function(){
        if(!$('body').hasClass('navigation-open')){
            scrollToAnimate(0);

            setTimeout(function(){
                $('body').addClass('navigation-open');
            }, 100);
        }else{
            $('body').addClass('navigation-close');

            setTimeout(function(){
                $('body').removeClass('navigation-open');
                $('body').removeClass('navigation-close');
            }, 900);
        }
    });

});




var startValue = 0;


var intervalLoad = setInterval(function(){
    if(startValue >= 78){
        clearTimeout(intervalLoad);
    }

    document.getElementById('percent-load').innerHTML = startValue;

    $('#masque').css('transform', 'translate('+startValue +'%, 0)');

    startValue = startValue + 3;
}, 100);


window.onload = function(){

    clearTimeout(intervalLoad);



    // Sticky Nav

    var elementToStick = $('.navigation-sub-page');

    if(elementToStick.length > 0){
        var positionElement = elementToStick.offset().top;
        $(window).scroll(function(){
            var currentScroll = $(window).scrollTop();

            if(currentScroll + 102 >= positionElement){
                elementToStick.addClass('is-sticky');
            }else{
                elementToStick.removeClass('is-sticky');
            }
        });
    }

    document.getElementById('percent-load').innerHTML = 100;
    $('#masque').css('transform', 'translate(100%, 0)');

    setTimeout(function(){
        $('.loader-container').fadeOut();
    }, 400);


    if(!isMobile()){

    }

    $(window).scroll(function(){
        if($(window).scrollTop() > 250){
            $('body').addClass('is-scrolled');
        }else{
            $('body').removeClass('is-scrolled');
        }
    });


    $('.list-metiers').mouseenter(function(){
        $('.container-image.native').fadeOut(200);
    });

    $('.list-metiers').mouseleave(function(){
        $('.container-image.native').fadeIn(0);
    });


    // Animations
    $('.parallax-item').each(function( index ) {
        var el = jQuery(this);
        var gravity = el.data('gravity');
        var parent = el.data('parent');

        if(parent){
            parent = '.' + parent;
        }

        gsap.to(el, {
            yPercent: gravity,
            ease: "none",
            scrollTrigger: {
                trigger: el.parents(parent),
                scrub: true
            },
        });

    });

    $('.masque').each(function(){
        var el = jQuery(this);
        var delay = el.data('delay');

        setTimeout(function(){
            el.addClass('visible');
        }, delay);
    });
}







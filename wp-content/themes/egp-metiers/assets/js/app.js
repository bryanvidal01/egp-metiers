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
            $('body').removeClass('navigation-open');
        }
    });


    // Input File
    $('input[type="file"]').change(function(){
        console.log($('input[type="file"]'));

        var inp = $(this);
        $('.listFiles').html('');
        console.log(inp[0].files.item(0).name);

        for (var i = 0; i < inp[0].files.length; ++i) {
            $('.listFiles').append('<li>'+ inp[0].files.item(i).name + '</li>');
        }
    });


    $('.form input').keypress(function(){
        $(this).removeClass('is-require');
    })
    $('.form').submit(function(event){
        var inputs = $(this).find('.require');
        var consent = $(this).find('.consent');
        var error = 0;
        inputs.each(function(){
           var el = $(this);

           if(el.val() == ''){
               el.addClass('is-require');
               error++;
           }else{
               el.removeClass('is-require');
           }
        });

        if(error > 0){
            $('html, body').animate({
                scrollTop: $(".form").offset().top - 100
            }, 700);
        }

        if($('.form .consent:checked').length == 0){
            $('.form .consent').parent().addClass('is-require');
            error++;
        }else{
            $('.form .consent').parent().removeClass('is-require');
        }

        if(error > 0){
            event.preventDefault();
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



    document.getElementById('percent-load').innerHTML = 100;
    $('#masque').css('transform', 'translate(100%, 0)');

    setTimeout(function(){
        $('.loader-container').fadeOut();
    }, 400);


    if(!isMobile()){
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




    $('a').click(function(event){

        if($(this).attr('href') == '#popin-call-back'){
            event.preventDefault();
            $('.popin-call').fadeIn();
        }
    });

    $('.popin-call .cross').click(function(){
        $('.popin-call').fadeOut();
        $('.step-1').fadeIn();
        $('.step-2').fadeOut();
    });

    $('.popin-call .link-step-2').click(function(event){
        $('.step-1').fadeOut();
        event.preventDefault();

        setTimeout(function(){
            $('.step-2').fadeIn();
        }, 300);
    });

    $('.contact-form-call').submit(function(){

        event.preventDefault();

        var userName = $('.contact-form-call').find('#userName');
        var userSecondName = $('.contact-form-call').find('#userSecondName');
        var userMail = $('.contact-form-call').find('#userMail');
        var userPhone = $('.contact-form-call').find('#userPhone');


        var error = 0;
        if(userName.val() == ''){
            userName.addClass('is-require');
            error++;
        }else{
            userName.removeClass('is-require');
        }

        if(userSecondName.val() == ''){
            userSecondName.addClass('is-require');
            error++;
        }else{
            userSecondName.removeClass('is-require');
        }

        if(userMail.val() == ''){
            userMail.addClass('is-require');
            error++;
        }else{
            userMail.removeClass('is-require');
        }

        if(userPhone.val() == ''){
            userPhone.addClass('is-require');
            error++;
        }else{
            userPhone.removeClass('is-require');
        }

        if(error == 0){
            $.post(
                ParamsData.wp_ajax_url,
                {
                    'action': 'send_message',
                    'userName': userName.val(),
                    'userSecondName' : userSecondName.val(),
                    'userMail' : userMail.val(),
                    'userPhone' : userPhone.val(),
                },
                function (response) {
                    if(response.code == 200){
                        $('.contact-form-call').find('.popin .info-return').html(response.message)
                        $('.contact-form-call').find('.popin').fadeIn();
                    }
                }
            );
        }
    });
}







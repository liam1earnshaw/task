(function ($) {

    var $toggleButton = $('.toggle-button'),
        $menuWrap = $('.menu-wrap');

    $toggleButton.on('click', function() {
        $(this).toggleClass('button-open');
        $menuWrap.toggleClass('menu-show');
        $('body').toggleClass('noOverflow');
    });

    $('.menu-wrap li a').click(function(){
        $menuWrap.toggleClass('menu-show');
        $('body').toggleClass('noOverflow');
        $('.toggle-button').toggleClass('button-open');
    });

    $(document).ready(function(){
        var height = window.innerHeight;
        $('.imageSlider .slide').height(height);
    });

    $(window).resize(function(){
        var height = window.innerHeight;
        $('.imageSlider .slide').height(height);
    });

    $('.bounce').click(function(){

        $(this).find('.balle').removeClass('runBallAnimation')
        $(this).find('.ombre').removeClass('runOmbreAnimation')

        setTimeout(function(){
            $('.bounce').find('.balle').addClass('runBallAnimation')
            $('.bounce').find('.ombre').addClass('runOmbreAnimation')
        }, 10);
    });

    $('.turnOffLights').click(function(){
        $('#expertise .overlay').toggleClass('active');
        if($('#expertise .overlay').hasClass('active')){
            $('.turnOffLights').html('<p><i class="fas fa-lightbulb"></i></p>');
        }else{
            $('.turnOffLights').html('<p><i class="fas fa-lightbulb"></i></p>');
        }
    });

    $('#photosSection').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false,
                    autoplay:false
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    autoplay:false
                }
            }
        ]
    });

    var headerHeight = $("header").height();
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - headerHeight
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });


}(jQuery));

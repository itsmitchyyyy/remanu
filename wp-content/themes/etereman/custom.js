$(function(){
    $('div.lazyload').lazyload();

    $('.sidenav').sidenav({
        menuWidth: 300,
        closeOnClick: true,
        edge: 'right'
    });

    // var autoplay = true;
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true,
        onCycleTo: function(element) {
            var image = $(element).data('src');
            $(element).css('background-image', 'url('+image+')');
            $(element).removeAttr('data-src');
        }
    });
    setInterval(function(){
            $('.carousel.carousel-slider').carousel('next');
    }, 4500);

    // $('.carousel.carousel-slider').hover(function(){
    //     autoplay = false;
    // }, function(){
    //     autoplay = true;
    // });

    $('#scrollUp').click(function(){
		$("html, body").animate({scrollTop:0},"slow");
    });
    
    $(window).scroll(function(){
        $('.etereman-logo').css('display', "none");
        clearTimeout($.data(this, "scrollCheck"));
    
        $.data(this, "scrollCheck", setTimeout(function(){
            $('.etereman-logo').css('display', "block");
        }, 250));
    });
});
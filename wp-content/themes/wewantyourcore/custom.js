// jquery
$(function(){
    $('div.lazyload').lazyload();
    $('img.lazyload').lazyload();

    $('.sidenav').sidenav({
        menuWidth: 300,
        closeOnClick: true,
        edge: 'right'
    });

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

    $('#scrollUp').click(function(){
		$("html, body").animate({scrollTop:0},"slow");
    });

    if($(window).scrollTop()  != 0) {
        $('#scrollUp').removeClass('d-none');
    }
    
    $(window).scroll(function(){
        if($(this).scrollTop() == 0) {
            $('#scrollUp').addClass('d-none');
        } else {
            $('#scrollUp').removeClass('d-none');
        }
    });
});
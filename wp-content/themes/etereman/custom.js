$(function(){
    $('.sidenav').sidenav({
        menuWidth: 300,
        closeOnClick: true,
        edge: 'right'
    });

    var autoplay = true;
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
    setInterval(function(){
        if(autoplay) 
            $('.carousel.carousel-slider').carousel('next');
    }, 4500)
    $('.carousel.carousel-slider').hover(function(){
        autoplay = false;
    }, function(){
        autoplay = true;
    });
});
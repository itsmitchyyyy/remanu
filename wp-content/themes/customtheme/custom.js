$(function(){
	$('img.lazyload').lazyload();

	$(".carousel.lazy").on('slide.bs.carousel', function(ev){
		var lazy;
		lazy = $(ev.relatedTarget).find("div[data-src]");
		lazy.css("background-image", 'url('+lazy.data("src")+')');
		lazy.removeAttr("data-src");
	});

	$('.navbar-toggler').click(function(e){
		$('.navbar-collapse').collapse('toggle');
		$('body').addClass('overflow-hidden');
		$('#videoFrame').css('pointer-events', 'none');
	});

	$('.navbar-collapse.collapse').on('hide.bs.collapse', function(){
		$('body').removeClass('overflow-hidden');
		$('#videoFrame').css('pointer-events', 'auto');
	})

	$('#navCollapse').click(function(e){
		e.stopPropagation();
	});

	$('#scrollToTop').click(function(){
		$("html, body").animate({scrollTop:0},"slow");
	});

	if	(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ||
		(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.platform))) {
			$('li.menu-item').find('a').each(function(){
				if($(this).hasClass('active')) {
					$(this).removeClass("flex-column text-center d-flex")
					$(this).prepend('<i class="fa fa-star"></i>');
				}
			});	
	} else {	
		$('li.menu-item').find('a').each(function(){
			if($(this).hasClass('active')) {
				$(this).addClass("flex-column text-center d-flex")
				$(this).prepend('<i class="fa fa-star"></i>');
			}
		});
	}
});

$(window).scroll(function(){
	$('.nav-image-container').css('z-index', "1");
	clearTimeout($.data(this, "scrollCheck"));

	$.data(this, "scrollCheck", setTimeout(function(){
		$('.nav-image-container').css('z-index', "1021");
	}, 250));
});

$(document).on('click', function(e){
	var isVisible = $('.navbar-collapse.collapse').is(":visible");
	var clickover = $(e.target);
    if (isVisible === true && !clickover.hasClass(".navbar-collapse")) {      
        $('.navbar-collapse').collapse('hide');
    }
});
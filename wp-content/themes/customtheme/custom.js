$(function(){
	$('.navbar-toggler').click(function(e){
		$('.navbar-collapse').collapse('toggle');
		$('body').addClass('overflow-hidden');
	});

	$('.navbar-collapse.collapse').on('hide.bs.collapse', function(){
		$('body').removeClass('overflow-hidden');
	})

	$('#navCollapse').click(function(e){
		e.stopPropagation();
	});
});

$(document).on('click', function(e){
	var isVisible = $('.navbar-collapse.collapse').is(":visible");
	var clickover = $(e.target);
    if (isVisible === true && !clickover.hasClass(".navbar-collapse")) {      
        $('.navbar-collapse').collapse('hide');
    }
});
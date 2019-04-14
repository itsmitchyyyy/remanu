// jobs office
axios.get('https://boards-api.greenhouse.io/v1/boards/etereman/offices')
    .then(function(response){
        var $select = $('.selectJobOffices');
        response.data.offices.map(function(options){
           var $option = $('<option>');
                $option
                .val(options[$select.attr('data-valueKey')])
                .text(options[$select.attr('data-displayKey')]);
            
            $select.append($option);
        });
        $select.formSelect();
    });

// jobs department
axios.get('https://boards-api.greenhouse.io/v1/boards/etereman/departments')
.then(function(response){
    var $select = $('.selectJobDepartments');
    response.data.departments.map(function(options){
       var $option = $('<option>');
            $option
            .val(options[$select.attr('data-valueKey')])
            .text(options[$select.attr('data-displayKey')]);
        
        $select.append($option);
    });
    $select.formSelect();
});

// jquery
$(function(){
// return 'https://boards-api.greenhouse.io/v1/boards/etereman/'.$type;
    var tabLink = window.location.hash;
    $('.tab a').each(function(){
        if(tabLink == $(this).attr('href') && tabLink == '#employment') {
            $('html, body').scrollTop(700);
        }
    });

    $('#need-help').click(function(){
        $('.chat-box-container').toggleClass('active');
        $('.chat-button-first-content').toggleClass('active');
        $('.chat-button-second-content').toggleClass('active');
    });

    $('.chat-box-icon-minimize').click(function(){
        $('.chat-box-container').removeClass('active');
        $('.chat-button-first-content').removeClass('active');
        $('.chat-button-second-content').removeClass('active');
    });

    $('.tabs').tabs();

    $('select').formSelect();

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

    if($(window).scrollTop()  == 0) {
        $('#need-help').addClass('chat-button-animate');
    }

    if($(window).scrollTop()  != 0) {
        $('#scrollUp').removeClass('d-none');
    }
    
    $(window).scroll(function(){
        if($(this).scrollTop() == 0) {
            $('#need-help').addClass('chat-button-animate');
            $('#scrollUp').addClass('d-none');
        } else {
            $('#need-help').removeClass('chat-button-animate');
            $('#scrollUp').removeClass('d-none');
        }
    });
});



// jquery
$(function(){
    var $selectJobFamily = $('.selectJobFamily');
    var $selectJobPosition = $('.selectJobPosition');
    var $selectJobOffices = $('.selectJobOffices');

    //job family
    axios.get('https://boards-api.greenhouse.io/v1/boards/etereman/departments')
        .then(function(response) {
            sessionStorage.setItem('departments', JSON.stringify(response.data.departments));
        
            response.data.departments.map(function(options){
                var $option = $('<option>');
                    $option
                        .val(options[$selectJobFamily.attr('data-valueKey')])
                        .text(options[$selectJobFamily.attr('data-displayKey')]);

                    $selectJobFamily.append($option);
            });
        $selectJobFamily.formSelect();
    });

    $selectJobFamily.change(function(){
        $selectJobPosition.prop('disabled', false);
        var name = $(this).find('option:selected').text();
        var jsonPosition = JSON.parse(sessionStorage.getItem('departments'));
        jsonPosition.map(function(res){
               if(name == res.name) {
                   res.jobs.map(function(job) {
                        var $option = $('<option>');
                        $option
                            .val(job[$selectJobPosition.attr('data-valueKey')])
                            .text(job[$selectJobPosition.attr('data-displayKey')]);
                        
                        $selectJobPosition.append($option);
                   });
               }
        });
        $selectJobPosition.formSelect();
    });

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
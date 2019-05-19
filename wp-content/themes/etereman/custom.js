(function(o,l,a,r,k,y){if(o.olark)return; r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0]; y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r); y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)}; y.extend=function(i,j){y("extend",i,j)}; y.identify=function(i){y("identify",k.i=i)}; y.configure=function(i,j){y("configure",i,j);k.c[i]=j}; k=y._={s:[],t:[+new Date],c:{},l:a}; })(window,document,"static.olark.com/jsclient/loader.js");
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('5489-448-10-3475');

function getSchool() {
    return axios.get('https://boards-api.greenhouse.io/v1/boards/etereman/education/schools');
}

function getDegrees() {
    return axios.get('https://boards-api.greenhouse.io/v1/boards/etereman/education/degrees');
}

function getDisciplines() {
    return axios.get('https://boards-api.greenhouse.io/v1/boards/etereman/education/disciplines');
}

function getJob(id) {
    return axios.get('https://boards-api.greenhouse.io/v1/boards/etereman/jobs/'+id+'?questions=true');
}

// form validator
$.validator.setDefaults({
    errorClass: 'invalid',
    validClass: "valid",
    errorPlacement: function (error, element) {
        $(element)
            .closest("form")
            .find("#error"+element.attr("id"))
            .attr('data-error', error.text());
    },
    submitHandler: function (form) {
        data = new FormData();
        $('.questions').each(function(){
            if($(this).val() != '')
                data.append(`${$(this).val()}`, $(form).find(`#${$(this).data('input')}`).val());
        });
        var startDate = $(form).find("input[name='start_date']").val().split("/");
        var endDate = $(form).find("input[name='end_date']").val().split("/");
        data.append('first_name', $(form).find("input[name='first_name']").val());
        data.append('last_name', $(form).find("input[name='last_name']").val());
        data.append('email', $(form).find("input[name='email']").val());
        data.append('phone', $(form).find("input[name='phone']").val());
        if( document.querySelector('#resume').files[0] != undefined) {
        data.append('resume', document.querySelector('#resume').files[0]);
        }
        if( document.querySelector('#cover_letter').files[0] != undefined) {
        data.append('cover_letter', document.querySelector('#cover_letter').files[0]);
        }
        data.append("educations[]['start_date']['month']", startDate[0]);
        data.append("educations[]['start_date']['year']", startDate[2]);
        data.append("educations[]['end_date']['month']", endDate[0]);
        data.append("educations[]['end_date']['year']", endDate[2]);
        data.append("educations[]['school_name_id']", $(form).find("#applySchool").val());
        data.append("educations[]['degree_id']", $(form).find("#applyDegree").val());
        data.append("educations[]['discipline_id']", $(form).find("#applyDiscipline").val());
        const base64data = btoa('7d5be7aeab7007ed8fb98cac70d79b29-1');
        axios({
            method: 'post',
            url: 'https://boards-api.greenhouse.io/v1/boards/etereman/jobs/1616345',
            headers: {
                'Authorization': `Basic ${base64data}`,
                'Content-Type': 'multipart/form-data',
            },
            data: data
        }).then(function(response){
            $('#apply-form')[0].reset();
            alert(response.data.success);
            window.location.href = window.location.pathname.substring(0, window.location.pathname.indexOf('apply')) + 'list';
        });
    }
});

$("#apply-form").validate({
    rules: {
        dateField: {
            date: true
        }
    }
});

// jquery
$(function(){
    
    var urlParams = new URLSearchParams(window.location.search);
    var area = urlParams.get('area');
    var position = urlParams.get('position');
    var location = urlParams.get('location');
    var id = urlParams.get('id');

    olark('api.box.onShrink', function() {
        $('#hbl-live-chat-wrapper').removeClass('d-block');
    });

    var $selectJobFamily = $('.selectJobFamily');
    var $selectJobPosition = $('.selectJobPosition');
    var $selectJobOffices = $('.selectJobOffices');
    var $searchResultContainer = $('#searchResultContainer');

    $('#backToSearch').click(function(){
        window.history.back();
    });

    if(/details/.test(window.location.href)) {
        var currentLocation = window.location.pathname;
        var toApply = currentLocation.substring(0, currentLocation.indexOf('list'));
        $('#applyNow').attr('href', toApply + 'apply?id=' + id);
        axios.get('https://boards-api.greenhouse.io/v1/boards/etereman/jobs/'+id)
            .then(function(response) {
                $('#jobTitle').html('<h4>'+response.data.title+'</h4>');
                $('#jobLocation').html('<span>'+response.data.location.name+'</span>');
                while(response.data.content.indexOf('&lt;')  >= 0 || response.data.content.indexOf('&gt;') >= 0) {
                    response.data.content = response.data.content.replace('&lt;','<').replace('&gt;', '>');
                }
                $('#jobDetails').html(response.data.content);
            });
    }
    
    if (/list/.test(window.location.href)) {
        $('html, body').scrollTop(700);
        var jsonJobs = JSON.parse(sessionStorage.getItem('departments'));
        var maxSize = 0;
        var itemPerPage = 5;
        var firstPage = 0;
        jsonJobs.map(function(res){
            // if(res.jobs.length != 0) {
            //     maxSize = maxSize + res.jobs.length;
            // }
            if(area == res.name) {
                res.jobs.map(function(job){
                    if(job.title == position && (location.indexOf(job.location.name) > -1)) {
                        var $careerUrl = window.location.pathname + 'details/?id=' + job.id;
                        var $option = `<div class="row w-100"><div class="col s5"><a href="`+$careerUrl+`">`+job.title+`</a></div>
                        <div class="col s5">`+job.location.name+`</div>
                        <div class="col s2">`+moment(job.updated_at).format('MM/DD/YY')+`</div></div>`;
                        $searchResultContainer.append($option);
                    }
                });
            }
            if(area == null && position == null && location == null) {
            res.jobs.map(function(job){
                    var $careerUrl = window.location.pathname + 'details/?id=' + job.id;
                    var $option = `<div class="row w-100"><div class="col s5"><a href="`+$careerUrl+`">`+job.title+`</a></div>
                    <div class="col s5">`+job.location.name+`</div>
                    <div class="col s2">`+moment(job.updated_at).format('MM/DD/YY')+`</div></div>`;
                    $searchResultContainer.append($option);
            });
        }
        });
    }

    if (/apply/.test(window.location.href)) {
        var $applySchool = $('#applySchool');
        var $applyDegree = $('#applyDegree');
        var $applyDiscipline = $('#applyDiscipline');
        axios.all([getSchool(), getDegrees(), getDisciplines(), getJob(id)])
            .then(axios.spread(function(schools, degrees, disciplines, job) {
                // job data
                    $('#jobTitle').text(job.data.title);
                    $('#jobLocation').text(job.data.location.name);
                    job.data.questions.map(function(question) {
                        $('.questions').each(function(){
                            if($(this).data('holder') == question.label) {
                               $(this).val(question.fields[0].name);
                            }
                        });
                });
                // schools data
                schools.data.items.map(function(school) {
                    var $option = $('<option>');
                        $option
                            .val(school[$applySchool.attr('data-valueKey')])
                            .text(school[$applySchool.attr('data-displayKey')]);
                        
                        $applySchool.append($option);
                });
                // degrees data
                degrees.data.items.map(function(degree) {
                    var $option = $('<option>');
                        $option
                            .val(degree[$applyDegree.attr('data-valueKey')])
                            .text(degree[$applyDegree.attr('data-displayKey')]);
                        
                        $applyDegree.append($option);
                });
                // discipline data
                disciplines.data.items.map(function(discipline) {
                    var $option = $('<option>');
                        $option
                            .val(discipline[$applyDiscipline.attr('data-valueKey')])
                            .text(discipline[$applyDiscipline.attr('data-displayKey')]);
                        
                        $applyDiscipline.append($option);
                });
                // populate select 
                $applySchool.formSelect();
                $applyDegree.formSelect();
                $applyDiscipline.formSelect();
            }));
    }

    var tabLink = window.location.hash;  
    $('.tab a').each(function(){
        if(tabLink == $(this).attr('href') && tabLink == '#employment') {
            $('html, body').scrollTop(700);
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
        }
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

    $selectJobPosition.change(function(){
        $selectJobOffices.prop('disabled', false);
        axios.get('https://boards-api.greenhouse.io/v1/boards/etereman/offices')
        .then(function(response) {
                response.data.offices.map(function(office) {
                    var $option = $('<option>');
                        $option
                            .val(office[$selectJobOffices.attr('data-valueKey')])
                            .text(office[$selectJobOffices.attr('data-displayKey')]);
                    
                    $selectJobOffices.append($option);
                }); 
            $selectJobOffices.formSelect();
        });
    });

    $('#need-help').click(function(){
        $('#hbl-live-chat-wrapper').addClass('d-block');
        olark('api.box.expand');    
    });

    // $('.chat-box-icon-minimize').click(function(){
    //     olark('api.box.hide');    
    // });

    $('#searchPage').on('input.highlight', function(){
        var searchTerm = $(this).val();
        $('body').unmark().mark(searchTerm);
    }).trigger("input.highlight").focus();

    $('.tabs').tabs();

    $('.datepicker').datepicker({
        format: 'm/d/yyyy'
    });
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
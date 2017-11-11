$(document).ready(function () {  

    $("select").select2({dropdownCssClass: 'dropdown-inverse'});
    //populating correct language
    
    //autoset correct language
    var languages; 
    function getLanguage() {
        (localStorage.getItem('languages') == null) ? setLanguage('en') : false;
        $.ajax({ 
            url:  '/languages/' +  localStorage.getItem('languages') + '.json', 
            dataType: 'json', async: false, dataType: 'json', 
            success: function (lang) { language = lang } });
    }

    function setLanguage(lang) {
        localStorage.setItem('languages', lang);
    }
    
    //manually set language
    $('#selectSpanish').click(function(){
        var lang = $(this).val;
        localStorage.setItem('languages','es');
        $("#welcome").text(languages.welcome);
    })
    

    //animate presentation of opening screen
    $('#menu').hide();
    $('#about').show();
    $('#welcome').fadeIn(1500);
    $('#aboutArticle').delay(400).fadeIn(4500);
    $("#aboutImg").delay(400).fadeIn(4500);

    //initial scrolling appear
    $(window).scroll(function(){
        $('#menu').fadeIn(900);
        $('.sectionDiv').each(function(i){
            var middle_of_object = $(this).offset().top + $(this).outerHeight() / 2;
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if(bottom_of_window > middle_of_object){
                $(this).animate({'opacity':'1'},2000);
            }
        });
    });

    //experience section functionality
    $("#fdInfo").hide();
    $("#wgInfo").hide();
    $("#tmxInfo").hide();
    $("#studyInfo").hide();

    $('#frontDevRole').hover(function(){
        $(this).css('color','#fff');
        $('#fdInfo').show();
        $('#html5Check').radiocheck('enable');
        $('#css3Check').radiocheck('enable');
        $('#jsCheck').radiocheck('enable');
        $('#bootCheck').radiocheck('enable');
        $('#jqueryCheck').radiocheck('enable');
    }, 
                             function() {
        $(this).css('color','#34495E');
        $("#fdInfo").hide();
        $('#html5Check').radiocheck('disable');
        $('#css3Check').radiocheck('disable');
        $('#jsCheck').radiocheck('disable');
        $('#bootCheck').radiocheck('disable');
        $('#jqueryCheck').radiocheck('disable');
    });

    $('#wgRole').hover(function(){
        $(this).css('color','#fff');
        $("#wgInfo").show();
        $('#html5Check').radiocheck('enable');
        $('#css3Check').radiocheck('enable');
        $('#jsCheck').radiocheck('enable');
        $('#cSharpCheck').radiocheck('enable');
        $('#jqueryCheck').radiocheck('enable');
        $('#aspCheck').radiocheck('enable');
        $('#sqlCheck').radiocheck('enable');
    }, 
                       function() {
        $(this).css('color','#34495E');
        $("#wgInfo").hide();
        $('#html5Check').radiocheck('disable');
        $('#css3Check').radiocheck('disable');
        $('#jsCheck').radiocheck('disable');
        $('#cSharpCheck').radiocheck('disable');
        $('#jqueryCheck').radiocheck('disable');
        $('#aspCheck').radiocheck('disable');
        $('#sqlCheck').radiocheck('disable');
    });

    $('#tmxRole').hover(function(){
        $(this).css('color','#fff');
        $("#tmxInfo").show();
        $('#html5Check').radiocheck('enable');
        $('#css3Check').radiocheck('enable');
        $('#jsCheck').radiocheck('enable');
        $('#angularCheck').radiocheck('enable');
        $('#aspCheck').radiocheck('enable');
        $('#sqlCheck').radiocheck('enable');
        $('#cSharpCheck').radiocheck('enable');
    }, 
                        function() {
        $(this).css('color','#34495E');
        $("#tmxInfo").hide();
        $('#html5Check').radiocheck('disable');
        $('#css3Check').radiocheck('disable');
        $('#jsCheck').radiocheck('disable');
        $('#angularCheck').radiocheck('disable');
        $('#aspCheck').radiocheck('disable');
        $('#sqlCheck').radiocheck('disable');
        $('#cSharpCheck').radiocheck('disable');
    });

    $('#studyRole').hover(function(){
        $(this).css('color','#fff');
        $("#studyInfo").show();
        $('#html5Check').radiocheck('enable');
        $('#css3Check').radiocheck('enable');
        $('#jsCheck').radiocheck('enable');
        $('#angularCheck').radiocheck('enable');
        $('#pythonCheck').radiocheck('enable');
        $('#sqlCheck').radiocheck('enable');
        $('#phpCheck').radiocheck('enable');
        $('#jqueryCheck').radiocheck('enable');
    }, 
                          function() {
        $(this).css('color','#34495E');
        $("#studyInfo").hide();
        $('#html5Check').radiocheck('disable');
        $('#css3Check').radiocheck('disable');
        $('#jsCheck').radiocheck('disable');
        $('#angularCheck').radiocheck('disable');
        $('#pythonCheck').radiocheck('disable');
        $('#sqlCheck').radiocheck('disable');
        $('#phpCheck').radiocheck('disable');
        $('#jqueryCheck').radiocheck('disable');
    });

    //small screen menu functionality
    $('#miniMenu').click(function () {
        $('#main-nav').slideToggle();
    });

    $('.main-navigation li a').click(function(event){
        var targetSelection = $(this).attr('href');
        var scrTo = $(targetSelection).offset().top;
        $('html,body').animate({
            scrollTop: scrTo
        }, 1250)
        $('#main-nav').slideUp();
    })

});




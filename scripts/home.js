$(document).ready(function () {  

    $("select").select2({dropdownCssClass: 'dropdown-inverse'});
    

    //animate presentation of opening screen
    $('#menu').hide();
    $('#about').show();
    $('#welcome').fadeIn(1500);
    $('#aboutArticle').delay(400).fadeIn(4500);
    $("#aboutImg").delay(400).fadeIn(4500);

    //scrolling appear
    $(window).scroll(function(){
        $('#menu').fadeIn(900);
        $('.sectionDiv').each(function(i){
            var middle_of_object = $(this).offset().top + $(this).outerHeight() / 2;
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if(bottom_of_window > middle_of_object){
                $(this).animate({'opacity':'1'},2000);
            }
        });
        
        //contact div menu opacity
        var contactPos = $('#contactDiv').offset().top - $(window).scrollTop();
        var menuPos = $('#menu').offset().top + $('#menu').height();
        
        if(menuPos > contactPos) {
            $('.main-navigation').css({
                "background" : "rgb(255,255,255)",
                "background" : "rgba(255,255,255,0)",        
                });
            $('.main-navigation a').css({
                "color" : "#fff"
            })
        }
        else {
            $('.main-navigation').css({background:"#fff",});
            $('.main-navigation a').css({color:"#34495E"})
        }
    });


    //set correct language
    var languages; 

    $("#selectLang").change(function(){
        var selectedLang = this.value;

        switch(selectedLang){
            case 'en':
                selectedLang = 'en'
                getLanguage(selectedLang);
                break;
            case 'fr':
                selectedLang = 'fr'
                getLanguage(selectedLang);
                break;
            case 'es':
                selectedLang = 'es'
                getLanguage(selectedLang);
                break;
            default:
                getLanguage('en');
                break;
        }
    });
    
    function getLanguage(selectedLang) {
        $.ajax({ 
            url:  '/languages/' + selectedLang + '.json', 
            dataType: 'json', dataType: 'json', 
            success: function populatePage(languages) {
                $("#aboutMenuText").text(languages.about);
                var test = $("#aboutMenuText");
                $("#qualMenuText").text(languages.qualifications);
                $("#expMenuText").text(languages.experience);
                $("#contactMenuText").text(languages.contact);
                $("#welcome").text(languages.welcome);
                $("#aboutArticle").text(languages.aboutText);
                $("#qualificationsTitle").text(languages.qualificationsTitle);
                $('#selectEnglish').text(languages.selectEnglish);
                $('#selectFrench').text(languages.selectFrench);
                $('#selectSpanish').text(languages.selectSpanish);
                $("#degrees").text(languages.degrees);
                $("#compSci").text(languages.compSci);
                $("#compSciDes").text(languages.compSciDes);
                $("#mec").text(languages.mec);
                $("#mecDes").text(languages.mecDes);
                $("#chooseLang").text(languages.chooseLang);
                $("#languagesTitle").text(languages.languagesTitle);
                $("#english").text(languages.english);
                $("#french").text(languages.french);
                $("#spanish").text(languages.spanish);
                $("#dutch").text(languages.dutch);
                $("#experienceTitle").text(languages.experienceTitle);
                $("#hover4info").text(languages.hover4info);
                $("#frontDevRole").text(languages.frontDevRole);
                $("#wgRole").text(languages.wgRole);
                $("#tmxRole").text(languages.tmxRole);
                $("#studyRole").text(languages.studyRole);
                $("#contactText").text(languages.contactText);
                $("#welcome").show();
            }
        });
    }
    
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

    //contact email functionality
    $('#emailLink').click(function(event){
        event.preventDefault();
        window.location = 'mailto:ryan.headley@me.com';
    })

});




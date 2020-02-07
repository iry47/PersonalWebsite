$(document).ready(function () {  

    //activate flat ui selects
    $("select").select2({dropdownCssClass: 'dropdown-inverse'});
    
    //set language
    getLanguage('en');

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
            });
        }
        else {
            $('.main-navigation').css({background:"#fff",});
            $('.main-navigation a').css({color:"#34495E"});

        }
    });

    $('.filterCheckbox').radiocheck();
    
    $('#filterButton').click(function(){
        $('#filterButton').hide();
        $('.checkFilter').show();
    });
    
    $('#closeFilter').click(function(){
        $('#filterButton').show();
        $('.checkFilter').hide();
    });
    
    //experience section functionality
    $('#flInfo').hide();
    $("#fdInfo").hide();
    $("#wgInfo").hide();
    $("#tmxInfo").hide();
    $("#studyInfo").hide();

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
    //get text from json file and populate page
    function getLanguage(selectedLang) {
        $.ajax({ 
            type: 'GET',
            url:  'https://www.ryanheadley.net/assets/languages/' + selectedLang + '.json',
            dataType: 'json', 
            success: function populatePage(languages) {
                $("#aboutMenuText").text(languages.about);
                $('travelMenuText').text(languages.travel);
                $("#qualMenuText").text(languages.qualifications);
                $("#expMenuText").text(languages.experience);
                $("#contactMenuText").text(languages.contact);
                $("#welcome").text(languages.welcome);
                $("#aboutArticle").text(languages.aboutText);
                $("#travelText").text(languages.travelText);
                $("#instaTitle").text(languages.instaTitle); $("#qualificationsTitle").text(languages.qualificationsTitle);
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



    //small screen menu functionality
    $('#miniMenu').unbind('click').bind('click', function (e) {
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

    function activateExp(exp){
                switch(exp){
                    case "flRole":
                        $("#flRole").css('color','#fff');
                        $('#flInfo').show();
                        $('#moreInfo').show();
                        $('#html5Check').radiocheck('enable');
                        $('#css3Check').radiocheck('enable');
                        $('#jsCheck').radiocheck('enable');
                        $('#jqueryCheck').radiocheck('enable');
                        $('#aspCheck').radiocheck('enable');
                        $('#sqlCheck').radiocheck('enable');
                        $('#phpCheck').radiocheck('enable');
                        $('#bootCheck').radiocheck('enable');
                        $('#ajaxCheck').radiocheck('enable');
                        break;
                    case "frontDevRole":
                        $("#frontDevRole").css('color','#fff');
                        $('#fdInfo').show();
                        $('#moreInfo').show();
                        $('#html5Check').radiocheck('enable');
                        $('#css3Check').radiocheck('enable');
                        $('#jsCheck').radiocheck('enable');
                        $('#bootCheck').radiocheck('enable');
                        $('#jqueryCheck').radiocheck('enable');
                        break;
                    case "wgRole":
                        $("#wgRole").css('color','#fff');
                        $("#wgInfo").show();
                        $('#moreInfo').show();
                        $('#html5Check').radiocheck('enable');
                        $('#css3Check').radiocheck('enable');
                        $('#jsCheck').radiocheck('enable');
                        $('#cSharpCheck').radiocheck('enable');
                        $('#jqueryCheck').radiocheck('enable');
                        $('#aspCheck').radiocheck('enable');
                        $('#sqlCheck').radiocheck('enable');
                        break;
                    case "tmxRole":
                        $("#tmxRole").css('color','#fff');
                        $("#tmxInfo").show();
                        $('#moreInfo').show();
                        $('#html5Check').radiocheck('enable');
                        $('#css3Check').radiocheck('enable');
                        $('#jsCheck').radiocheck('enable');
                        $('#angularCheck').radiocheck('enable');
                        $('#aspCheck').radiocheck('enable');
                        $('#sqlCheck').radiocheck('enable');
                        $('#cSharpCheck').radiocheck('enable');
                        break;
                    case "studyRole":
                        $("#studyRole").css('color','#fff');
                        $("#studyInfo").show();
                        $('#moreInfo').show();
                        $('#html5Check').radiocheck('enable');
                        $('#css3Check').radiocheck('enable');
                        $('#jsCheck').radiocheck('enable');
                        $('#angularCheck').radiocheck('enable');
                        $('#pythonCheck').radiocheck('enable');
                        $('#sqlCheck').radiocheck('enable');
                        $('#phpCheck').radiocheck('enable');
                        $('#jqueryCheck').radiocheck('enable');
                        break;

                }
            }   
            
    function deactivateExp(exp){
                 switch(exp){
                    case "flRole":
                         $("#flRole").css('color','#34495e');
                        $('#flInfo').hide();
                         $('#moreInfo').hide();
                        $('#html5Check').radiocheck('disable');
                        $('#css3Check').radiocheck('disable');
                        $('#jsCheck').radiocheck('disable');
                        $('#jqueryCheck').radiocheck('disable');
                        $('#aspCheck').radiocheck('disable');
                        $('#sqlCheck').radiocheck('disable');
                        $('#phpCheck').radiocheck('disable');
                         $('#bootCheck').radiocheck('disable');
                         $('#ajaxCheck').radiocheck('disable');
                        break;
                    case "frontDevRole":
                         $("#frontDevRole").css('color','#34495e');
                        $('#fdInfo').hide();
                         $('#moreInfo').hide();
                        $('#html5Check').radiocheck('disable');
                        $('#css3Check').radiocheck('disable');
                        $('#jsCheck').radiocheck('disable');
                        $('#bootCheck').radiocheck('disable');
                        $('#jqueryCheck').radiocheck('disable');
                        break;
                    case "wgRole":
                         $("#wgRole").css('color','#34495e');
                        $("#wgInfo").hide();
                         $('#moreInfo').hide();
                        $('#html5Check').radiocheck('disable');
                        $('#css3Check').radiocheck('disable');
                        $('#jsCheck').radiocheck('disable');
                        $('#cSharpCheck').radiocheck('disable');
                        $('#jqueryCheck').radiocheck('disable');
                        $('#aspCheck').radiocheck('disable');
                        $('#sqlCheck').radiocheck('disable');
                        break;
                    case "tmxRole":
                         $("#tmxRole").css('color','#34495e');
                        $("#tmxInfo").hide();
                         $('#moreInfo').hide();
                        $('#html5Check').radiocheck('disable');
                        $('#css3Check').radiocheck('disable');
                        $('#jsCheck').radiocheck('disable');
                        $('#angularCheck').radiocheck('disable');
                        $('#aspCheck').radiocheck('disable');
                        $('#sqlCheck').radiocheck('disable');
                        $('#cSharpCheck').radiocheck('disable');
                        break;
                    case "studyRole":
                         $("#studyRole").css('color','#34495e');
                        $("#studyInfo").hide();
                         $('#moreInfo').hide();
                        $('#html5Check').radiocheck('disable');
                        $('#css3Check').radiocheck('disable');
                        $('#jsCheck').radiocheck('disable');
                        $('#angularCheck').radiocheck('disable');
                        $('#pythonCheck').radiocheck('disable');
                        $('#sqlCheck').radiocheck('disable');
                        $('#phpCheck').radiocheck('disable');
                        $('#jqueryCheck').radiocheck('disable');
                        break;

                }
            }
        
    //experience device functionality
    $('.clickExp').hover(function(){
        if($(window).width() < 480){
            $(this).after($('.smallExp'));
            $('.smallExp').show();
            switch($(this)['0'].id){
                case "flRole":
                    activateExp("flRole");
                    break;
                case "frontDevRole":
                    activateExp("frontDevRole");
                    break;
                case "wgRole":
                    activateExp("wgRole");
                    break;
                case "tmxRole":
                    activateExp("tmxRole");
                    break;
                case "studyRole":
                    activateExp("studyRole");
                    break;   
            }
            }  else{
                $('.positions').after($(".smallExp"));
            }
    }, function(){
        switch($(this)['0'].id){
                case "flRole":
                    deactivateExp("flRole");
                    break;
                case "frontDevRole":
                    deactivateExp("frontDevRole");
                    break;
                case "wgRole":
                    deactivateExp("wgRole");
                    break;
                case "tmxRole":
                    deactivateExp("tmxRole");
                    break;
                case "studyRole":
                    deactivateExp("studyRole");
                    break;   
            }
    } );

            //hover over role functionalities
            $('#flRole').hover(function(){
                activateExp("flRole");
            }, 
                               function() {
                deactivateExp("flRole");
            });

            $('#frontDevRole').hover(function(){
                activateExp("frontDevRole");
            }, 
                                     function() {
                deactivateExp("frontDevRole");
            });

            $('#wgRole').hover(function(){
                activateExp("wgRole");
            }, 
                               function() {
                deactivateExp("wgRole");
            });

            $('#tmxRole').hover(function(){
                activateExp("tmxRole");
            }, 
                                function() {
                deactivateExp("tmxRole");
            });

            $('#studyRole').hover(function(){
                activateExp("studyRole");
            }, 
                                  function() {
                deactivateExp("studyRole");
            });
 



    function attachExp(div){
        $('.smallExp').appendTo(div);
    }

    //contact icons
    $('#emailLink').click(function(event){
        event.preventDefault();
        window.location = 'mailto:ryan.headley@me.com';
    });

    $('#linkedInLink').click(function(event){
        event.preventDefault();
        window.open('https://www.linkedin.com/in/ryan-headley-48980950/');
    });

    $('#twitterLink').click(function(event){
        event.preventDefault();
        window.open('https://twitter.com/iRy47');
    });

    $('#instaLink').click(function(event){
        event.preventDefault();
        window.open('https://instagram.com/iRy47');
    });
    

});




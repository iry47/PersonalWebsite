$(document).ready(function () {  

    //activate flat ui selects
    $("select").select2({dropdownCssClass: 'dropdown-inverse'});
    
    //set language
    getLanguage('en');

    //animate presentation of opening screen
    $('#about').show();
    $('#welcome').fadeIn(1500);
    $('#aboutArticle').delay(400).fadeIn(4500);
    $("#aboutImg").delay(400).fadeIn(4500);

    //scrolling appear
     $(window).scroll(function(){
        $('.sectionDiv').each(function(i){
            var middle_of_object = $(this).offset().top + $(this).outerHeight() / 2;
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if(bottom_of_window > middle_of_object){
                $(this).animate({'opacity':'1'},2000);
            }
        });

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
    $("#kwInfo").hide();
    $("#wgInfo").hide();
    $("#tmxInfo").hide();

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
				$("#aboutSubTitle").text(languages.aboutSubTitle);
            	$(".aboutMenuText").text(languages.about);
				$("#welcome").text(languages.welcome);
				$("#aboutArticle").text(languages.aboutArticle);
				$('#selectEnglish').text(languages.selectEnglish);
				$('#selectFrench').text(languages.selectFrench);
				$('#selectSpanish').text(languages.selectSpanish);
				$('#travelSubTitle').text(languages.travelSubTitle);
				$('#travelTitle').text(languages.travelTitle);
				$('.travelMenuText').text(languages.travelTitle);
				$("#travelText").text(languages.travelText);
				$("#blog1Title").text(languages.blog1Title);
				$("#blog2Title").text(languages.blog2Title);
				$("#blog3Title").text(languages.blog3Title);
				$('.blogButton').text(languages.blogButton);
				$("#qualSubTitle").text(languages.qualSubTitle);
				$("#qualificationsTitle").text(languages.qualificationsTitle);
				$(".qualMenuText").text(languages.qualificationsTitle);
				$("#qualInfo").text(languages.qualInfo);
				$("#compSciDes").text(languages.compSciDes);
				$("#mecDes").text(languages.mecDes);
				$("#english").text(languages.english);
				$("#french").text(languages.french);
				$("#spanish").text(languages.spanish);
				$("#portuguese").text(languages.portuguese);
				$("#languagesTitle").text(languages.languagesTitle);
				$("#experienceTitle").text(languages.experienceTitle);
				$("#cv").text(languages.cvBtn);
				$(".expMenuText").text(languages.experienceTitle);
				$(".tesMenuText").text(languages.tesMenuText);
				$(".experienceButton").text(languages.experienceButton);
				$("#hover4Info").text(languages.hover4Info);
				$("#kwInfo").text(languages.kwInfo);
				$("#flInfo").text(languages.flInfo);
				$("#wgInfo").text(languages.wgInfo);
				$("#tmxInfo").text(languages.tmxInfo);
				$(".contactMenuText").text(languages.contactTitle);
				$("#contactTitle").text(languages.contactTitle);
				$("#contactSubTitle").text(languages.contactSubTitle);
				$("#contactButton").text(languages.contactButton);
				$("#contactFormName").text(languages.contactFormName);
				$("#contactFormSubject").text(languages.contactFormSubject);
				$("#contactFormMessage").text(languages.contactFormMessage);
                $("#contactText").text(languages.contactText);
                $("#welcome").show();
            }
        });
    }

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
                    case "kwRole":
                        $("#kwRole").css({'color':'rgb(222,255,139)', 'border-bottom':'4px solid rgb(222,255,139)','padding':'0 150px 0 0'});
                        $('#kwInfo').show();
                        $('#moreInfo').show();
                        $('#html5Check').css('color','rgb(70, 65, 89)');
                        $('#css3Check').css('color','rgb(70, 65, 89)');
                        $('#jsCheck').css('color','rgb(70, 65, 89)');
                        $('#jqueryCheck').css('color','rgb(70, 65, 89)');
                        $('#aspCheck').css('color','rgb(70, 65, 89)');
                        $('#sqlCheck').css('color','rgb(70, 65, 89)');
                        $('#phpCheck').css('color','rgb(70, 65, 89)');
                        $('#bootCheck').css('color','rgb(70, 65, 89)');
                        $('#ajaxCheck').css('color','rgb(70, 65, 89)');
                        break;
                    case "flRole":
                        $("#flRole").css({'color':'rgb(222,255,139)', 'border-bottom':'4px solid rgb(222,255,139)','padding':'0 150px 0 0'});
                        $('#flInfo').show();
                        $('#moreInfo').show();
                        $('#html5Check').css('color','rgb(70, 65, 89)');
                        $('#css3Check').css('color','rgb(70, 65, 89)');
                        $('#jsCheck').css('color','rgb(70, 65, 89)');
                        $('#bootCheck').css('color','rgb(70, 65, 89)');
                        $('#jqueryCheck').css('color','rgb(70, 65, 89)');
                        break;
                    case "wgRole":
                        $("#wgRole").css({'color':'rgb(222,255,139)', 'border-bottom':'4px solid rgb(222,255,139)','padding':'0 150px 0 0'});
                        $("#wgInfo").show();
                        $('#moreInfo').show();
                        $('#html5Check').css('color','rgb(70, 65, 89)');
                        $('#css3Check').css('color','rgb(70, 65, 89)');
                        $('#jsCheck').css('color','rgb(70, 65, 89)');
                        $('#cSharpCheck').css('color','rgb(70, 65, 89)');
                        $('#jqueryCheck').css('color','rgb(70, 65, 89)');
                        $('#aspCheck').css('color','rgb(70, 65, 89)');
                        $('#sqlCheck').css('color','rgb(70, 65, 89)');
                        break;
                    case "tmxRole":
                        $("#tmxRole").css({'color':'rgb(222,255,139)', 'border-bottom':'4px solid rgb(222,255,139)','padding':'0 150px 0 0'});
                        $("#tmxInfo").show();
                        $('#moreInfo').show();
                        $('#html5Check').css('color','rgb(70, 65, 89)');
                        $('#css3Check').css('color','rgb(70, 65, 89)');
                        $('#jsCheck').css('color','rgb(70, 65, 89)');
                        $('#angularCheck').css('color','rgb(70, 65, 89)');
                        $('#aspCheck').css('color','rgb(70, 65, 89)');
                        $('#sqlCheck').css('color','rgb(70, 65, 89)');
                        $('#cSharpCheck').css('color','rgb(70, 65, 89)');
                        break;

                }
                $('#thingsUsed').show();
            }   
            
    function deactivateExp(exp){
                 switch(exp){
                    case "flRole":
                         $("#flRole").css({'color':'rgb(107,186,112)', 'border-bottom':'none','padding':'0'});
                        $('#flInfo').hide();
                         $('#moreInfo').hide();
                        $('#html5Check').css('color','rgb(108, 123, 149)');
                        $('#css3Check').css('color','rgb(108, 123, 149)');
                        $('#jsCheck').css('color','rgb(108, 123, 149)');
                        $('#jqueryCheck').css('color','rgb(108, 123, 149)');
                        $('#aspCheck').css('color','rgb(108, 123, 149)');
                        $('#sqlCheck').css('color','rgb(108, 123, 149)');
                        $('#phpCheck').css('color','rgb(108, 123, 149)');
                         $('#bootCheck').css('color','rgb(108, 123, 149)');
                         $('#ajaxCheck').css('color','rgb(108, 123, 149)');
                        break;
                    case "kwRole":
                         $("#kwRole").css({'color':'rgb(107,186,112)', 'border-bottom':'none','padding':'0'});
                        $('#kwInfo').hide();
                         $('#moreInfo').hide();
                        $('#html5Check').css('color','rgb(108, 123, 149)');
                        $('#css3Check').css('color','rgb(108, 123, 149)');
                        $('#jsCheck').css('color','rgb(108, 123, 149)');
                        $('#bootCheck').css('color','rgb(108, 123, 149)');
                        $('#jqueryCheck').css('color','rgb(108, 123, 149)');
                        break;
                    case "wgRole":
                         $("#wgRole").css({'color':'rgb(107,186,112)', 'border-bottom':'none','padding':'0'});
                        $("#wgInfo").hide();
                         $('#moreInfo').hide();
                        $('#html5Check').css('color','rgb(108, 123, 149)');
                        $('#css3Check').css('color','rgb(108, 123, 149)');
                        $('#jsCheck').css('color','rgb(108, 123, 149)');
                        $('#cSharpCheck').css('color','rgb(108, 123, 149)');
                        $('#jqueryCheck').css('color','rgb(108, 123, 149)');
                        $('#aspCheck').css('color','rgb(108, 123, 149)');
                        $('#sqlCheck').css('color','rgb(108, 123, 149)');
                        break;
                    case "tmxRole":
                         $("#tmxRole").css({'color':'rgb(107,186,112)', 'border-bottom':'none','padding':'0'});
                        $("#tmxInfo").hide();
                         $('#moreInfo').hide();
                        $('#html5Check').css('color','rgb(108, 123, 149)');
                        $('#css3Check').css('color','rgb(108, 123, 149)');
                        $('#jsCheck').css('color','rgb(108, 123, 149)');
                        $('#angularCheck').css('color','rgb(108, 123, 149)');
                        $('#aspCheck').css('color','rgb(108, 123, 149)');
                        $('#sqlCheck').css('color','rgb(108, 123, 149)');
                        $('#cSharpCheck').css('color','rgb(108, 123, 149)');
                        break;

                }
		$('#thingsUsed').hide();
            }
        
    //experience device functionality
    $('.clickExp').hover(function(){
        if($(window).width() < 480){
            $(this).after($('.smallExp'));
            switch($(this)['0'].id){
                case "flRole":
                    activateExp("flRole");
                    break;
                case "kwRole":
                    activateExp("kwRole");
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
		}
    }, function(){
        switch($(this)['0'].id){
                case "flRole":
                    deactivateExp("flRole");
                    break;
                case "kwRole":
                    deactivateExp("kwRole");
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

	$('#kwRole').hover(function(){
		activateExp("kwRole");
	},
							 function() {
		deactivateExp("kwRole");
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

	$('#cvEnBtn').hide();
	$('#cvFrPhoto').hide();
	$('#cvFrBtn').click(function(){
		$('#cvFrPhoto').show();
		$('#cvEnPhoto').hide();
		$('#cvFrBtn').hide();
		$('#cvEnBtn').show();
	});
	$('#cvEnBtn').click(function(){
		$('#cvEnPhoto').show();
		$('#cvFrPhoto').hide();
		$('#cvEnBtn').hide();
		$('#cvFrBtn').show();
	});
 



    function attachExp(div){
        $('.smallExp').appendTo(div);
    }

    //portfolio hover
	$('.portfolio-item').mouseover(function(){
		$(this).find('.portfolio-image-div').css({top:"-150px"});
	});
	$('.portfolio-item').mouseout(function(){
		$(this).find('.portfolio-image-div').css({top:"0px"});
	});

    //contact icons
    $('#emailLink').click(function(event){
        event.preventDefault();
        window.location = 'mailto:ryan.headley@me.com';x
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

	$('#gitLink').click(function(event){
		event.preventDefault();
		window.open('https://github.com/iry47');
	});




});




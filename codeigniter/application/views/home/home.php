<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123905614-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-123905614-1');
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ryan Headley's Personal Site</title>
        <meta name="description" content="Ryan Headley's website - find out where I am, what I'm doing and how to connect with me.">

        <!-- Fav Icon -->
        <link rel="icon" href="<?= base_url('assets/images/favicon.ico')?>">
        <!-- Stylesheets -->
        <link rel=stylesheet href="<?= base_url('assets/stylesheets/home.css')?>">

        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/scripts/map-icons-master/dist/css/map-icons.css')?>">
        <script type="text/javascript" src="<?= base_url('assets/scripts/map-icons-master/dist/js/map-icons.js')?>"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel=stylesheet href="<?= base_url('assets/dist/css/flat-ui.css')?>">

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="<?= base_url('assets/scripts/home.js')?>"></script>
        <script src="<?= base_url('assets/scripts/home.js')?>"></script>
        <script src="<?= base_url('assets/dist/js/flat-ui.js')?>"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsQaXloxPg8Os1RrHQSQa1HimaE57hkPQ"></script>
        <script src="<?= base_url('assets/scripts/markerclustererplus/src/markerclusterer.js')?>"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body onload="initMap();">
        <!-- The navigation menu of the site -->
        <header id="header">
            <div id="menu">
                <div id="miniMenu" class="fa fa-bars"></div>
                <nav id="main-nav" class="main-navigation">
                    <ul>
                        <li>
                            <a href="#about">
                                <i class="fa fa-info" aria-hidden="true"></i>
                                <span id="aboutMenuText">About</span> 
                            </a>
                        </li>
                        <li>
                            <a href="#travel">
                                <i class="fas fa-map-marked-alt" aria-hidden="true"></i>
                                <span id="travelMenuText">Travel</span> 
                            </a>
                        </li>
                        <li>
                            <a href="#qualifications">
                                <i class="fa fa-graduation-cap"></i>
                                <span id="qualMenuText">Qualifications</span>
                            </a>
                        </li>
                        <li>
                            <a href="#experience">
                                <i class="fa fa-folder-open"></i>
                                <span id="expMenuText">Experience</span>
                            </a>
                        </li>
                        <li>
                            <a href="#testimonials">
                                <i class="fa fa-folder"></i>
                                <span id="tesMenuText">Portfolio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contact">
                                <i class="fa fa-envelope"></i>
                                <span id="contactMenuText">Contact</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="container">

            <!-- The About section
-->
            <section id="about">
                <div id="aboutDiv">
                    <div>
                        <div id="aboutText">
                            <h1 id="welcome">Welcome!</h1>
                            <p id="aboutArticle">My name is Ryan. I'm a computer programer, language enthuisiast and avid traveller. Currently, but not limited to, working as a front end web developer - this site is probably your introduction to my work. My portfolio is growing rapidly and I'd love to include you in it!</p> 
                            <div id="languageSelect">
                                <div>
                                    <select id="selectLang">
                                        <option id="selectEnglish" value="en">English</option>
                                        <option id="selectFrench" value="fr">French</option>
                                        <option id="selectSpanish" value="es">Spanish</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="aboutImg">
                            <img id="meImg" src="<?= base_url('assets/images/IMG.jpg')?>" alt="rheadley"/>
                        </div>  
                    </div>
                </div>
            </section>

            <!--            Travel Section-->
            <section id="travel">
                <div id="travelDiv">
                    <h2>Travel</h2>
                    <p id="travelText" class="sectionDiv">I started out as a traveler discovering the world, and I've now become a digital nomad! Since I'm always on the move, this section let's you know where I am and what I've been up to.</p>
                    <div id="instaDiv">
                        <h3 id="instaTitle">Instagram Feed</h3>
                        <div id="instaFeed"></div>
                    </div>

                    <!--            Map Section-->

                    <div id="mapDiv">
                        <h3 id="mapTitle">Interactive Map</h3>
                        <div id="mapWindow">
                            <div id="map"></div>
                            <div id="filter">
                                <div id="filterButton">
                                    <i class="fas fa-filter"></i><span>Filters</span></div>
                                <div class="checkFilter">
                                    <div id="closeFilter"><span>Select Filters</span><i id="filterChevron" class="fas fa-chevron-down"></i></div>
                                    <label class="checkbox" for="foodCheck">
                                        <input type="checkbox" id="foodCheck" class="filterCheckbox">Food</label>
                                    <label class="checkbox" for="accCheck">
                                        <input type="checkbox" id="accCheck" class="filterCheckbox">Accomodation</label>
                                    <label class="checkbox" for="parkCheck">
                                        <input type="checkbox" id="parkCheck" class="filterCheckbox">Park / Beach</label>
                                    <label class="checkbox" for="barCheck">
                                        <input type="checkbox" id="barCheck" class="filterCheckbox">Bars</label>
                                    <label class="checkbox" for="eyeCheck">
                                        <input type="checkbox" id="eyeCheck" class="filterCheckbox">Sightseeing</label>
                                    <label class="checkbox" for="actCheck">
                                        <input type="checkbox" id="actCheck" class="filterCheckbox">Activities</label>
                                </div>
                            </div>
                            <script type="text/javascript">
                                bounds = new google.maps.LatLngBounds();

                                var locations = [
                                    <?php

									$places = json_decode(file_get_contents(base_url('assets/scripts/saved_places.json')));
									$filter = '';

              foreach($places->features as $marker){

                  $avoidCluster = 'false';
                  switch(''){
                      case "home":
                          $markerHtml = '<i class="map-icon fas fa-home"></i>';
                          $markerColor = '#1ABC9C';
                          $filter = 'homeCheck';
                          break;
                      case "bed":
                          $markerHtml = '<span class="map-icon fas fa-bed"></span>';
                          $markerColor = '#1ABC9C';
                          $filter = 'accCheck';
                          break;
                      case "park":
                          $markerHtml = '<i class="map-icon fas fa-tree"></i>';
                          $markerColor = '#1ABC9C';
                          $filter = 'parkCheck';
                          break;
                      case "bar":
                          $markerHtml = '<i class="map-icon fas fa-glass-martini-alt"></i>';
                          $markerColor = '#1ABC9C';
                          $filter = 'barCheck';
                          break;
                      case "beach":
                          $markerHtml = '<i class="map-icon fas fa-umbrella-beach"></i>';
                          $markerColor = '#1ABC9C';
                          $filter = 'parkCheck';
                          break;
                      case "school":
                          $markerHtml = '<i class="map-icon fas fa-user-graduate"></i>';
                          $markerColor = '#1ABC9C';
                          $filter = 'schoolCheck';
                          break;
                      case "me":
                          $markerHtml = '<i class="map-icon fas fa-child"></i>';
                          $markerColor = '#E74C3C';
                          $avoidCluster = true;
                          break;
                      case "food":
                          $markerHtml = '<i class="map-icon fas fa-utensils"></i>';
                          $markerColor = '#1ABC9C';
                          $filter = 'foodCheck';
                          break;
                      case "coffee":
                          $markerHtml = '<i class="map-icon fas fa-coffee"></i>';
                          $markerColor = '#1ABC9C';
                          $filter = 'foodCheck';
                          break;
                      case "eye":
                          $markerHtml = '<i class="map-icon fas fa-camera"></i>';
                          $markerColor = '#1ABC9C';
                          $filter = 'eyeCheck';
                          break;
                      case "ski":
                          $markerHtml = '<i class="map-icon map-icon-snowboarding"></i>';
                          $markerColor = '#1ABC9C';
                          $filter = 'actCheck';
                          break;
					  default:
					  		$markerHtml = '';
					  		$markerColor = '#1ABC9C';
					  		$filter = 'none';
                  }
                  if(isset($marker->properties->Published)){$start = date_create_from_format('Y-m-d H:i:s', $marker->properties->Published);}
                  if(isset($marker->properties->Updated)){$end = date_create_from_format('Y-m-d H:i:s', $marker->properties->Updated);}

                                    ?>
                                    ['<?= str_replace("'", "\'",$marker->properties->Title) ?>',
                                     '<?= str_replace("'", "\'",'')?>',
                                     '<?= '' ?>',
                                     <?= $marker->geometry->coordinates[1] ?>,
                                     <?= $marker->geometry->coordinates[0] ?>,
                                     '<div style="max-width:450px;"><div style="width:100px;height:100px;float:left;display:inline-block;margin-right:10px;"><div style="background-image: url(<?= base_url("assets/images/".str_replace("'", "\'",''.""))?>);background-size:100% 100%;background-repeat:no-repeat;height:100%;"></div></div>'+'<div class="iw-info" style="float:left;display:inline-block;max-width:70%;">'+'<h5 id="iw-title" style="margin-top:0px;margin-bottom:5px;font-size:20px;"><?= str_replace("'", "\'",$marker->properties->Title)?></h5><?php if((isset($start) or isset($end)) and $start != $end ){?><span style="margin:5px;font-size:14px;text-align:left;color:#16a085;font-style:italic;"><?php if(isset($start)){echo "".date_format($start,"M/Y")." - ".date_format($end,"M/Y")."";}else{echo "".date_format($end,"M/Y")."";}?></span><?php } ?><p style="margin-bottom:0px;font-size:16px;text-align:left;"><?= str_replace("'", "\'",'')?></p>'+'</div></div>',
                                     '<?= $markerHtml ?>',
                                     '<?= $markerColor ?>',
                                     '<?= $avoidCluster ?>',
                                     '<?= $filter ?>'],
                                    <?php } ?>
                                ];
                                var map;
                                var markers = [];
                                var filters = {};
                                var checkedFilters = [];

                                function initMap() {

                                    var myLatlng = new google.maps.LatLng(48.864716,2.349014);
                                    var mapOptions = {
                                        zoom: 6,
                                        center: myLatlng,
                                        disableDefaultUI: false
                                    }

                                    map = new google.maps.Map(document.getElementById('map'), mapOptions);

                                    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
                                    var icon = {
                                        home: {
                                            icon: iconBase + 'home.jpg'
                                        }   
                                    };
                                    
                                    cmarkers();
                                    
                                    function cmarkers(){

                                    //var infowindow = new google.maps.InfoWindow();
                                    var marker,i;
                                    for(i=0; i < locations.length; i++){
                                        var marker = new mapIcons.Marker({
                                            map: map,
                                            position: new google.maps.LatLng(locations[i][3], locations[i][4]),
                                            icon: {
                                                path: mapIcons.shapes.MAP_PIN,
                                                fillColor: locations[i][7],
                                                scale: 0.5,
                                                fillOpacity: 1,
                                                strokeColor: '',
                                                strokeWeight: 0
                                            },
                                            map_icon_label: locations[i][6],
                                            filter: locations[i][9]

                                        });
                                        if(locations[i][8] === 'false'){
                                            markers.push(marker);   
                                        }
                                        //var infowindow = new google.maps.InfoWindow();
                                        loc = new google.maps.LatLng(locations[i][3], locations[i][4]);

                                        // google.maps.event.addListener(marker, 'click', (function (marker, i) {
                                        //     return function () {
                                        //         infowindow.setContent(locations[i][5]);
                                        //         infowindow.open(map, marker);
                                        //     }
                                        // })(marker, i));

                                        bounds.extend(loc);
                                    }
//                                    var markerCluster = new MarkerClusterer(map, markers,
//                                                                            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m',
//                                                                             gridSize: 20});

                                    $('.custom-checkbox').each(function(){
                                        filters[''+$(this).id+''] = false;
                                    });
                                    }

                                }

                                function applyFilters() {
                                    for(f in filters){
                                        if(f.key){
                                            checkFilters.push(f.key);
                                        } 
                                    }

                                    for(i=0; i < markers.length; i++){
                                        var keep = false;
                                        if(checkedFilters.length == 0){
                                            keep = true;
                                        }
                                        if(checkedFilters.indexOf(markers[i]["filter"]) > -1){
                                            keep = true;
                                        }
                                        if(keep){
                                            markers[i].MarkerLabel.div.hidden = false;
                                        }else{
                                            markers[i].MarkerLabel.div.hidden = true;
                                        }
                                        markers[i].setVisible(keep);
                                    }
                                }

                                $('.filterCheckbox').on('change.radiocheck',function(){
                                    var index = checkedFilters.indexOf(this.id);
                                    if(index > -1){
                                        checkedFilters.splice(index,1);
                                    } else{
                                        checkedFilters.push(this.id);
                                    }
                                    applyFilters();
                                })


                            </script>
                        </div>
                    </div>

                    <div id="blogDiv">
                        <h3 id="blogTitle">Blog Articles</h3>
                        <div class="blog-articles">   

<!--<button class="articleTab btn btn-default" type="button" data-toggle="dropdown">Brazil<i class="fas fa-chevron-down tab-chev"></i></button>-->
<!--<ul class="dropdown-menu" role="menu">-->
<!--<li>-->

                            <div class="list">
                                <div class="list-image-div">
                                    <div class="list-image" style="background-image: url(<?= base_url("assets/images/amazon-river-cruise.jpg")?>);"></div>
                                </div>
                                <div class="list-text">
                                    <a class="list-title" href="<?= base_url("/index.php/home/articles/en/amazon-boat.php#disqus_thread")?>"><span>Travelling through the Amazon by boat</span></a>
                                    <p class="list-loc"><i class="fas fa-map-marker-alt"></i> Amazonas, Brasil</p>
                                </div>
                            </div>
                            <div class="list">
                                <div class="list-image-div">
                                    <div class="list-image" style="background-image: url(<?= base_url("assets/images/champagny-crew.jpg")?>);"></div>
                                </div>
                                <div class="list-text">
                                    <a class="list-title" href="<?= base_url("/index.php/home/articles/en/ski-season.php#disqus_thread")?>"><span>Getting a ski season job</span></a>
                                    <p class="list-loc"><i class="fas fa-map-marker-alt"></i> Champagny en Vanoise, France</p>
                                </div>
                            </div>
                            <div class="list">
                                <div class="list-image-div">
                                    <div class="list-image" style="background-image: url(<?= base_url("assets/images/banana-group.jpg")?>);width:260px;"></div>
                                </div>
                                <div class="list-text">
                                    <a class="list-title" href="<?= base_url("/index.php/home/articles/en/hostels.php#disqus_thread")?>"><span>Staying in Hostels</span></a>
                                    <p class="list-loc"><i class="fas fa-map-marker-alt"></i> The World</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="modal fade" id="filterWindow" tabindex="-1" role="dialog" aria-labelledby="filterWindow" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="border-radius:0px;">
                        <div class="modal-body" style="padding:30px 20px;">
                            <h2>Select Filters</h2>

                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="applyFilters()">Apply</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- The Qualifications section of the site
-->
            <section id="qualifications" class="qualifications">
                <div id="qualificationsDiv" class="sectionDiv">
                    <h2 id="qualificationsTitle">Qualifications</h2>
                    <div id="degreesDiv">
                        <h3 id="degrees">Degrees</h3>
                        <article id="educationArticle">
                            <div>
                                <p id="compSci"><b>Computer Science</b></p>
                                <small id="compSciDes">Bachelor's Degree from Queen's University</small><br/>
                                <small class="degree-loc"><i class="fas fa-map-marker-alt"></i> Kingston, Ontario, Canada</small>
                                <p id="mec"><b>Mechanical Engineering</b>
                                </p> <small id="mesDes">Bachelor's Degree from Queen's University</small>
                                <br/>
                                <small class="degree-loc"><i class="fas fa-map-marker-alt"></i> Kingston, Ontario, Canada</small>
                            </div>
                            <figure id="queensFigure">
                                <img id="queensImg" src="<?= base_url('assets/images/Queens_logo.svg.png')?>" alt="Queen's University"/>
                            </figure>
                        </article>
                    </div>
                    <div class="languagesDiv">
                        <h3 id="languagesTitle">Languages</h3>
                        <article id="languagesArticle">
                            <div id="englishDiv">
                                <p id="english">English</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: 100%;"></div>
                                </div>
                            </div>
                            <div id="frenchDiv">
                                <p id="french">Français</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: 100%;"></div>
                                </div>
                                <div id="spanishDiv">
                                    <p id="spanish">Español</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 90%;"></div>
                                    </div>
                                </div>
                                <div id="portugueseDiv">
                                    <p id="portuguese">Português</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    
                </div>
            </section>

            <!-- The Experience section of the site
-->
            <section id="experience">
                <div id="experienceDiv" class="sectionDiv">
                    <h2 id="experienceTitle">Experience</h2>
                    <div id="hoverDiv">
                        <small id="hover4Info">Hover over each for more information!</small>
                        <figure class="fui-downarrow"></figure>
                    </div>
                    <div class="positions">

                        <div id="positionsTable">
                            <div id="flRole" class="clickExp">Remote Freelancer</div>
                            <div id="frontDevRole" class="clickExp">Front-end Developer - This Website!</div>
                            <div id="wgRole" class="clickExp">Software Developer - The Woodbridge Group</div>
                            <div id="tmxRole" class="clickExp">Software Developer - TMX Group</div>
                            <div id="studyRole" class="clickExp">Student - Queen's University</div>
                        </div>
                        <div id="html5" class="experienceImg">
                            <img id="html5Img" src="<?= base_url('assets/images/HTML5_Logo_512.png')?>" alt="HTML5"/>
                        </div>
                        <div id="angular" class="experienceImg">
                            <img id="angularImg" src="<?= base_url('assets/images/angular-14a0f6532f.png')?>" alt="Angular JS"/>
                        </div>
                        <div id="mysql" class="experienceImg">
                            <img id="mysqlImg" src="<?= base_url('assets/images/mysql.png')?>" alt="MySQL"/>
                        </div>
                        <div id="c#" class="experienceImg">
                            <img id="c#Img" src="<?= base_url('assets/images/C-Sharp.png')?>" alt="C#"/>
                        </div>
                    </div>
                    <div id="thingsUsed" class="smallExp">
                        <div id="virtualLanguages">
                            <h3>Languages</h3>
                            <div class="form-group">
                                <label class="checkbox" for="html5Check">
                                    <input type="checkbox" id="html5Check" checked disabled class="custom-checkbox">HTML5</label>
                                <label class="checkbox" for="css3Check">
                                    <input type="checkbox" id="css3Check" checked disabled class="custom-checkbox">CSS3</label>
                                <label class="checkbox" for="jsCheck">
                                    <input type="checkbox" id="jsCheck" checked disabled class="custom-checkbox">JavaScript</label>
                                <label class="checkbox" for="pythonCheck">
                                    <input type="checkbox" id="pythonCheck" checked disabled class="custom-checkbox">Python</label>
                                <label class="checkbox" for="cSharpCheck">
                                    <input type="checkbox" id="cSharpCheck" checked disabled class="custom-checkbox">C#</label>
                                <label class="checkbox" for="phpCheck">
                                    <input type="checkbox" id="phpCheck" checked disabled class="custom-checkbox">PHP</label>
                            </div>
                        </div>
                        <div id="frameworks">
                            <h3>Frameworks</h3>
                            <label class="checkbox" for="angularCheck">
                                <input type="checkbox" id="angularCheck" checked disabled class="custom-checkbox">AngularJS</label>
                            <label class="checkbox" for="aspCheck">
                                <input type="checkbox" id="aspCheck" checked disabled class="custom-checkbox">ASP.NET</label>
                            <label class="checkbox" for="jqueryCheck">
                                <input type="checkbox" id="jqueryCheck" checked disabled class="custom-checkbox">jQuery</label>
                            <label class="checkbox" for="bootCheck">
                                <input type="checkbox" id="bootCheck" checked disabled class="custom-checkbox">Bootstrap</label>
                            <label class="checkbox" for="sqlCheck">
                                <input type="checkbox" id="sqlCheck" checked disabled class="custom-checkbox">MySQL</label>
                            <label class="checkbox" for="ajax">
                                <input type="checkbox" id="ajaxCheck" checked disabled class="custom-checkbox">Ajax</label>
                        </div>
                    </div>
                    <div id="moreInfo" class="smallExp">
                        <blockquote>
                            <p id="flInfo">For the past year I have been a remote freelancer, focusing primarily on web development contracts and working front &amp; back end.</p>
                            <p id="fdInfo">This site was designed to be a simple introduction to my coding abilities as well showcasing my experience.</p>
                            <p id="wgInfo">Converted the existing reporting system from an ASP.NET Web Form application to an ASP.NET MVC application, designed and created a full client and server side reporting site and implemented the Telerik Kendo UI.</p>
                            <p id="tmxInfo">I worked with the team put in charge of developing the new risk analysis software. My tasks varied from programming a web application, developping a RESTful web service to documentation. This allowed me to gain valuable experience in several different computing languages: C#, HTML5, Javascript, CSS, MySQL and Powershell.</p>
                            <p id="studyInfo">I graduated with a general computer science degree and gained a wide array of experience in different languages and frameworks - from command line to object-oriented programing and from data structures to functional programming: my studies were the foundation of my computer science knowledge.</p>
                        </blockquote>
                    </div>
                </div>
            </section>

            <!--            Testimonials section-->
            <section id="testimonials">
                <div id="testimonialsDiv" class="sectionDiv">
                    <div id="testimonialsTitle">
                        <h2>Portfolio</h2>
                    </div>
                    <div style="text-align:center">
                    <div class="blog-articles">
                        <div class="list">
							<div class="list-image-div">
								<div class="list-image" style="background-image: url(<?= base_url("assets/images/opticaltel.png")?>);"></div>
							</div>
                            <div class="list-text">
                                <a class="list-title" href="https://www.kidwelcome.com"><span>OpticalTel</span></a>
                                <p class="list-loc"><i class="fas fa-laptop-code"></i> PHP, Wordpress, jQuery, APIs</p>
                            </div>
                        </div>
                        <div class="list">
                            <div class="list-image-div">
                                <div class="list-image" style="background-image: url(<?= base_url("assets/images/viggo.png")?>);"></div>
                            </div>
                            <div class="list-text">
                                <a class="list-title" href="https://viggo.fr"><span>Viggo</span></a>
                                <p class="list-loc"><i class="fas fa-laptop-code"></i> PHP, Craft, jQuery, APIs</p>
                            </div>
                        </div>
                        <div class="list">
                                <div class="list-image-div">
                                    <div class="list-image" style="background-image: url(<?= base_url("assets/images/kidwelcome.png")?>);"></div>
                                </div>
                                <div class="list-text">
                                    <a class="list-title" href="https://www.kidwelcome.com"><span>Kidwelcome</span></a>
                                    <p class="list-loc"><i class="fas fa-laptop-code"></i> PHP, jQuery, APIs</p>
                                </div>
                        </div>
<!--                        <div class="list">-->
<!--                                <div class="list-image-div">-->
<!--                                    <div class="list-image" ></div>-->
<!--                                </div>-->
<!--                                <div class="list-text">-->
<!--                                    <a class="list-title" href="https://hostravelworldwide.com/"><span>Hostravel Worldwide</span></a>-->
<!--                                    <p class="list-loc"><i class="fas fa-laptop-code"></i> PHP, Wordpress</p>-->
<!--                                </div>-->
<!--                        </div>-->
<!--                        <div class="list">-->
<!--                                <div class="list-image-div">-->
<!--                                    <div class="list-image" ></div>-->
<!--                                </div>-->
<!--                                <div class="list-text">-->
<!--                                    <a class="list-title" href="http://manitobafootballfeed.net/"><span>Manitoba Football Feed</span></a>-->
<!--                                    <p class="list-loc"><i class="fas fa-laptop-code"></i> Wordpress</p>-->
<!--                                </div>-->
<!--                        </div>-->
                    </div>
                        </div>
<!--
                    <div class="testimonialArticle">
                        <div class="tesQuote">
                            <cite>"I recommend Ryan over all. Very professional and experienced!"</cite>
                        </div>
                        <div class="tesPerson">
                            <b>Matthieu Boulogne, 3/8/18 - Kidwelcome</b>
                        </div>
                    </div>
                    <div class="testimonialArticle">
                        <div class="tesQuote">
                            <cite>"Excellent freelancer. Great communication. Great energy and attitude. Strong adherence to deadlines. Would highly recommend. A+++"</cite>
                        </div>
                        <div class="tesPerson">
                            <b>Lynn Moore, 5/3/18 - MeetHook</b>
                        </div>
                    </div>
                    <div class="testimonialArticle">
                        <div class="tesQuote">
                            <cite>"Ryan delivered amazing work and we would recommend him for anyone looking for a skillful hand."</cite>
                        </div>
                        <div class="tesPerson">
                            <b>Jeppe Danish, 29/11/17 - Spire Konto</b>
                        </div>
                    </div>
-->
                </div>
            </section>

            <!-- The Contact section 
-->
            <section id="contact">
                <div id="contactDiv" class="sectionDiv">
                    <h2>Contact</h2>
                    <article id="contactArticle">
                        <p id="contactText">Whether you're looking for a developer, want to meet up for a drink or anything in between - send me an email. Looking forward to hearing from you!</p>
                        <!--                        <a id="emailLink">ryan.headley@me.com</a>-->
                    </article>
                    <div id="socialLinks">
                        <i id="emailLink" title="Open your email application" class="fa fa-at"></i>
                        <i id="linkedInLink" title="LinkedIn" class="fab fa-linkedin"></i>
                        <i id="twitterLink" title="Twitter" class="fab fa-twitter"></i>
                        <i id="instaLink"   title="Instagram" class="fab fa-instagram"></i>
                    </div>

                    <div id="contactForm" class="contactForm">
                        <?php echo form_open('home/contact'); ?>
                        <div id="contactName" class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="name" placeholder="Name" />
                        </div>
                        <div id="contactEmail" class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="email" placeholder="Email" />
                        </div>
                        <div id="contactSubject" class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="subject" placeholder="Subject" />
                        </div>
                        <div id="contactMsg" class="input-group">                            <span class="input-group-addon"></span>
                            <textarea id="msg" type="text" class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="g-recaptcha" style="margin-left:15px;margin-bottom:0px;" data-sitekey="6Ldfmm0UAAAAAC57eggqtRxPK1I70lgrbT36sCwy"></div>
                        <div id="sendBtn">
                            <button id="sendBtn" class="btn btn-hg btn-primary" type="submit">Send Email</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </section>
        </div>
    </body>

    <script type="text/javascript">
        var request = new XMLHttpRequest();
        request.open('GET', 'https://api.instagram.com/v1/users/self/media/recent/?access_token=243041655.02d2968.62395b7ebe65470ca1b2113e01a26ebf&count=12', true);

        request.onload = function(container) {
            if (request.status >= 200 && request.status < 400) {
                var data = JSON.parse(request.responseText);
                for (var i=0;i < data.data.length;i++) {
                    var imgURL = data.data[i].images.thumbnail.url;
                    //var caption = data.data[i].caption.text;
                    var div = $('<div class="instapic"></div>');
                    //                    var div = $('<div class="instapic" style="width:320px;height:320px;background-image:url(\''+imgURL+'\');"></div>');
                    $('#instaFeed').append(div);
                    var img = $('<img src="'+imgURL+'"/>');
                    //var cap = $('<p class="instaCap"><b>iry47</b> '+caption+'</p>');
                    div.append(img);
                    //div.append(cap);
                    if((i+1) % 4 == 0){
                        div.after('<br>');    
                    }
                }

                console.log(data);
            } else {
            }
        };
        request.onerror = function() {
            // There was a connection error of some sort
        };
        request.send();
    </script>

</html>

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
		<link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('assets/images/favicon/apple-icon-57x57.png') ?>">
		<link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('assets/images/favicon//apple-icon-60x60.png') ?>">
		<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/images/favicon//apple-icon-72x72.png') ?>">
		<link rel="icon" type="image/png" sizes="36x36"  href="<?= base_url('assets/images/favicon//android-icon-36x36.png') ?>">
		<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon/favicon-32x32.png') ?>">
		<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/images/favicon/favicon-96x96.png') ?>">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon/favicon-16x16.png') ?>">
		<link rel="icon" href="<?= base_url('assets/images/favicon/favicon.ico') ?>" type="image/x-icon" />
		<link rel="manifest" href="<?= base_url('assets/images/favicon//manifest.json') ?>">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?= base_url('assets/images/favicon/ms-icon-144x144.png') ?>">
		<meta name="theme-color" content="#ffffff">

        <!-- Stylesheets -->
        <link rel=stylesheet href="<?= base_url('assets/stylesheets/home.css')?>">
		<link rel=stylesheet href="<?= base_url('assets/stylesheets/style.css')?>">

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
                                <span id="aboutMenuText">About</span> 
                            </a>
                        </li>
                        <li>
                            <a href="#travel">
                                <span id="travelMenuText">Travel</span> 
                            </a>
                        </li>
                        <li>
                            <a href="#qualifications">
                                <span id="qualMenuText">Qualifications</span>
                            </a>
                        </li>
                        <li>
                            <a href="#experience">
                                <span id="expMenuText">Experience</span>
                            </a>
                        </li>
                        <li>
                            <a href="#testimonials">
                                <span id="tesMenuText">Portfolio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contact">
                                <span id="contactMenuText">Contact</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="container">
			<div class="row">
            <!-- The About section-->
            <section id="about" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img src="<?= base_url('assets/images/green_background_1.png') ?>" class="bg-blob bg1">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div id="aboutText">
								<p class="above-title">ABOUT ME</p>
								<h1 id="welcome" class="title">Welcome!</h1>
								<p id="aboutArticle">My name is Ryan. I'm a <span class="l-grn">computer programer</span>, language enthuisiast and avid traveller. Currently, but not limited to, working as a front end web developer - this site is probably your introduction to my work. My portfolio is growing rapidly and I'd love to include you in it!</p>
								<div id="languageSelect">
									<div>
										<select id="selectLang">
											<option id="selectEnglish" value="en">ENGLISH</option>
											<option id="selectFrench" value="fr">FRENCH</option>
											<option id="selectSpanish" value="es">SPANISH</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div id="aboutImg">
								<img id="meImg" src="<?= base_url('assets/images/illustration_Ryan.png')?>" alt="rheadley"/>
							</div>
						</div>
					</div>
            </section>

            <!--   Travel Section-->
            <section id="travel" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img src="<?= base_url('assets/images/green_background_7.png') ?>" class="bg-blob bg7">
				<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 nopadding">
							<div id="instaDiv">
								<div id="instaFeed"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<img src="<?= base_url('assets/images/illustration_world.png') ?>" class="bg-blob bgw">
							<p class="above-title">THROUGH THE WORLD</p>
							<h2 class="title">Travel</h2>
							<p id="travelText">I started out as a traveler discovering the world, and I've now become a <span class="l-grn">digital nomad</span>! Since I'm always on the move, this section let's you know where I am and what I've been up to.</p>
						</div>
						<div id="mapDiv">
							<div id="mapWindow">
								<div id="map"></div>
								<div id="filter">
									<!--                                <div id="filterButton">-->
									<!--                                    <i class="fas fa-filter"></i><span>Filters</span>-->
									<!--								</div>-->
									<div class="checkFilter">
										<div id="closeFilter"><span>Select Filters</span><i id="filterChevron" class="fas fa-chevron-down"></i></div>
										<label class="checkbox" id="foodCheck">Food</label>
										<label class="checkbox" id="accCheck">Accomodation</label>
										<label class="checkbox" id="parkCheck">Park / Beach</label>
										<label class="checkbox" id="barCheck">Bars</label>
										<label class="checkbox" id="eyeCheck">Sightseeing</label>
										<label class="checkbox" id="actCheck">Activities</label>
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
												$markerHtml = '<i class="map-icon map-icon-crosshairs"></i>';
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
											'<div style="max-width:450px;"><div class="iw-info" style="text-align:center;display:inline-block;max-width:70%;">'+'<h5 id="iw-title" style="margin-top:0px;margin-bottom:5px;font-size:14px;color:black;"><?= str_replace("'", "\'",$marker->properties->Title)?></h5><a href="<?= $marker->properties->{'Google Maps URL'} ?>" style="color:#1ABC9C;font-size:12px;">More info</a></div></div>',
											'<?= $markerHtml ?>',
											'<?= $markerColor ?>',
											'<?= $avoidCluster ?>',
											'<?= $filter ?>'],
										<?php } ?>
									];
									var map;
									var markers = [];
									var markercluster;
									var filters = {};
									var checkedFilters = [];

									function initMap() {

										var myLatlng = new google.maps.LatLng(48.864716, 2.349014);
										var mapOptions = {
											zoom: 2,
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
									}

									function cmarkers(){

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
											var infowindow = new google.maps.InfoWindow();
											loc = new google.maps.LatLng(locations[i][3], locations[i][4]);

											google.maps.event.addListener(marker, 'click', (function (marker, i) {
												return function () {
													infowindow.setContent(locations[i][5]);
													infowindow.open(map, marker);
												}
											})(marker, i));

											bounds.extend(loc);
										}
										// markerCluster = new MarkerClusterer(map, markers, {
										// 	imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m',
										// 	//gridSize: 5,
										// });

										$('.custom-checkbox').each(function(){
											filters[''+$(this).id+''] = false;
										});
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
</div>
					<!--            Map Section-->
			</section>

			<section id="blog" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p class="above-title">RYANHEADLEY.NET</p>
				<h2 class="title">BLOG</h2>
                    <div id="blogDiv">
						<img src="<?= base_url('assets/images/green_background_3.png') ?>" class="bg-blob bg3">
                        <div class="blog-articles">
<!--<button class="articleTab btn btn-default" type="button" data-toggle="dropdown">Brazil<i class="fas fa-chevron-down tab-chev"></i></button>-->
<!--<ul class="dropdown-menu" role="menu">-->
<!--<li>-->
                            <div class="list">
                                <div class="list-image-div">
                                    <div class="list-image" style="background-image: url(<?= base_url("assets/images/amazon_river_cruise.jpeg")?>);"></div>
                                </div>
                                <div class="list-text">
                                    <a class="list-title" href="<?= base_url("/index.php/home/articles/en/amazon-boat.php#disqus_thread")?>"><span>The Amazon by boat</span></a>
                                    <p class="list-loc"><i class="fas fa-map-marker-alt"></i> Amazonas, Brasil</p>
									<button class="btn"><a href="<?= base_url("/index.php/home/articles/en/amazon-boat.php#disqus_thread")?>">READ</a></button>
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
                                    <div class="list-image" style="background-image: url(<?= base_url("assets/images/banana-group.jpg")?>);"></div>
                                </div>
                                <div class="list-text">
                                    <a class="list-title" href="<?= base_url("/index.php/home/articles/en/hostels.php#disqus_thread")?>"><span>Staying in Hostels</span></a>
                                    <p class="list-loc"><i class="fas fa-map-marker-alt"></i> The World</p>
									<button class="btn"><a href="<?= base_url("/index.php/home/articles/en/hostels.php#disqus_thread")?>">READ</a></button>
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
            <section id="qualifications" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 qualifications">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="section-title">
								<p class="above-title">DEGREES & LANGUAGES</p>
								<h2 class="title">QUALIFICATIONS</h2>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
									<img src="<?= base_url('assets/images/illustration_hat.png') ?>" class="bg-blob bgh">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="qual-text">
										<p>I graduated with a general <span class="l-grn">computer science</span> degree and gained a wide array of experience in different languages and frameworks - from command line to object-oriented programing and from data structures to functional programming: my studies were the foundation of my computer science knowledge.</p>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
											<div class="row">
												<div class="col-xs-3 col-sm-3 col-md-6 col-lg-6">
													<p class="year">2014-2015</p>
												</div>
												<div class="col-xs-9 col-sm-9 col-md-6 col-lg-6">
													<p class="degree">Bachelor's in computer science</p>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
											<p class="degree-loc"><i class="fas fa-map-marker-alt"></i>Queen's university (Kingston, Ontario, Canada)</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
											<div class="row">
												<div class="col-xs-3 col-sm-3 col-md-6 col-lg-6">
													<p class="year">2010-2014</p>
												</div>
												<div class="col-xs-9 col-sm-9 col-md-6 col-lg-6">
													<p class="degree">Bachelor's in mechanical engineering</p>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
											<p class="degree-loc"><i class="fas fa-map-marker-alt"></i>Queen's university (Kingston, Ontario, Canada)</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="languagesDiv">
								<div id="languagesArticle">
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
								</div>
							</div>
						</div>
					</div>
            </section>

            <!-- The Experience section of the site
-->
            <section id="experience" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p class="above-title">PORTFOLIO</p>
						<h2 class="title">EXPERIENCE</h2>
						<div id="hoverDiv">
							<small id="hover4Info">Hover over each for more information!</small>
							<figure class="fui-downarrow"></figure>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 exprecience-history">
								<div class="positions">
									<div id="positionsTable">
										<div id="flRole" class="clickExp">Remote Freelancer</div>
										<div id="frontDevRole" class="clickExp">Front-end Developer - This Website!</div>
										<div id="wgRole" class="clickExp">Software Developer - The Woodbridge Group</div>
										<div id="tmxRole" class="clickExp">Software Developer - TMX Group</div>
									</div>
								</div>
								<div id="moreInfo" class="smallExp">
									<blockquote>
										<p id="flInfo">For the past three years I have been a remote freelancer, focusing primarily on web development contracts and working front &amp; back end.</p>
										<p id="fdInfo">This site was designed to be a simple introduction to my coding abilities as well showcasing my experience.</p>
										<p id="wgInfo">Converted the existing reporting system from an ASP.NET Web Form application to an ASP.NET MVC application, designed and created a full client and server side reporting site and implemented the Telerik Kendo UI.</p>
										<p id="tmxInfo">I worked with the team put in charge of developing the new risk analysis software. My tasks varied from programming a web application, developping a RESTful web service to documentation. This allowed me to gain valuable experience in several different computing languages: C#, HTML5, Javascript, CSS, MySQL and Powershell.</p>
									</blockquote>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div id="thingsUsed" class="smallExp">
									<img src="<?= base_url('assets/images/green_background_6.png') ?>" class="bg-blob bg6">
									<img src="<?= base_url('assets/images/illustration_click.png') ?>" class="bg-blob bgc">
									<div id="virtualLanguages">
										<h3>Languages</h3>
										<div class="form-group">
											<label class="checkbox" id="html5Check">HTML5</label>
											<label class="checkbox" id="css3Check">CSS3</label>
											<label class="checkbox" id="jsCheck">JavaScript</label>
											<label class="checkbox" id="pythonCheck">Python</label>
											<label class="checkbox" id="cSharpCheck">C#</label>
											<label class="checkbox" id="phpCheck">PHP</label>
										</div>
									</div>
									<div id="frameworks">
										<h3>Frameworks</h3>
										<label class="checkbox" id="angularCheck">AngularJS</label>
										<label class="checkbox" id="aspCheck">ASP.NET</label>
										<label class="checkbox" id="jqueryCheck">jQuery</label>
										<label class="checkbox" id="bootCheck">Bootstrap</label>
										<label class="checkbox" id="sqlCheck">MySQL</label>
										<label class="checkbox" id="ajax">Ajax</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="portfolio">
							<img src="<?= base_url('assets/images/green_background_7.png') ?>" class="bg-blob bg7">
							<img src="<?= base_url('assets/images/green_background_8.png') ?>" class="bg-blob bg8">
							<img src="<?= base_url('assets/images/green_background_9.png') ?>" class="bg-blob bg9">

							<div class="portfolio-item">
								<div class="portfolio-box portfolio-image-div">
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/opticaltel.png")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> PHP, Wordpress, jQuery, APIs</p>
									<button class="btn"><a href="https://opticaltel.com">GO TO WEB<i class="fas fa-chevron-up"></i></a></button>
								</div>
							</div>
							<div class="portfolio-item">
								<div class="portfolio-box portfolio-image-div">
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/lecontactmoderne.png")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> PHP, CRAFT, jQuery, APIs</p>
									<button class="btn"><a href="https://lecontactmoderne.com">GO TO WEB<i class="fas fa-chevron-up"></i></a></button>
								</div>
							</div>
							<div class="portfolio-item">
								<div class="portfolio-box portfolio-image-div">
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/viggo.png")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> PHP, Craft, jQuery, APIs</p>
									<button class="btn"><a href="https://viggo.fr">GO TO WEB<i class="fas fa-chevron-up"></i></a></button>
								</div>
							</div>
							<div class="portfolio-item">
								<div class="portfolio-box portfolio-image-div">
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/KW.png")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> PHP, jQuery, APIs</p>
									<button class="btn"><a href="https://kidwelcome.com">GO TO WEB<i class="fas fa-chevron-up"></i></a></button>
								</div>
							</div>
							<!--                        <div class="portfolio">-->
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
				</div>
            </section>

            <!--            Testimonials section-->
<!--            <section id="testimonials" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
<!--                <div id="testimonialsDiv" class="sectionDiv">-->
<!---->
<!--                    <div class="testimonialArticle">-->
<!--                        <div class="tesQuote">-->
<!--                            <cite>"I recommend Ryan over all. Very professional and experienced!"</cite>-->
<!--                        </div>-->
<!--                        <div class="tesPerson">-->
<!--                            <b>Matthieu Boulogne, 3/8/18 - Kidwelcome</b>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="testimonialArticle">-->
<!--                        <div class="tesQuote">-->
<!--                            <cite>"Excellent freelancer. Great communication. Great energy and attitude. Strong adherence to deadlines. Would highly recommend. A+++"</cite>-->
<!--                        </div>-->
<!--                        <div class="tesPerson">-->
<!--                            <b>Lynn Moore, 5/3/18 - MeetHook</b>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="testimonialArticle">-->
<!--                        <div class="tesQuote">-->
<!--                            <cite>"Ryan delivered amazing work and we would recommend him for anyone looking for a skillful hand."</cite>-->
<!--                        </div>-->
<!--                        <div class="tesPerson">-->
<!--                            <b>Jeppe Danish, 29/11/17 - Spire Konto</b>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </section>-->

            <!-- The Contact section 
-->
            <section id="contact" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 order-2">
						<div id="contactForm" class="contactForm">
							<?php echo form_open('home/contact'); ?>
							<div id="contactName" class="input-group">
								<input type="text" class="form-control" name="name" placeholder="Name" />
							</div>
							<div id="contactEmail" class="input-group">
								<input type="text" class="form-control" name="email" placeholder="Email" />
							</div>
							<div id="contactSubject" class="input-group">
								<input type="text" class="form-control" name="subject" placeholder="Subject" />
							</div>
							<div id="contactMsg" class="input-group">                            
								<textarea id="msg" type="text" class="form-control" name="message" placeholder="Message"></textarea>
							</div>
							<div class="g-recaptcha" data-sitekey="6Ldfmm0UAAAAAC57eggqtRxPK1I70lgrbT36sCwy"></div>
							<div id="sendBtn">
								<button class="btn" type="submit">Send Email</button>
							</div>
							<?= form_close(); ?>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 order-1">
						<p class="above-title">LET'S MEET</p>
						<h2 class="title">CONTACT</h2>
						<div id="contactArticle">
							<p id="contactText">Whether you're looking for a developer, want to meet up for a drink or anything in between - send me an email. <span class="l-gry">Looking forward to hearing from you!</span></p>
							<!--                        <a id="emailLink">ryan.headley@me.com</a>-->
						</div>
						<div id="socialLinks">
							<i id="emailLink" title="Open your email application" class="fa fa-at"></i>
							<i id="linkedInLink" title="LinkedIn" class="fab fa-linkedin"></i>
							<i id="twitterLink" title="Twitter" class="fab fa-twitter"></i>
							<i id="instaLink"   title="Instagram" class="fab fa-instagram"></i>
						</div>
					</div>
				</div>
            </section>
        	</div>
		</div>
    </body>
	<footer>
		<img src="<?= base_url('assets/images/green_background_10.png') ?>" class="bg-blob bg10">
		<div id="menu">
			<img src="<?= base_url('assets/images/logo_Ryan.png') ?>" class="bg-blob logo">
			<div id="miniMenu" class="fa fa-bars"></div>
			<nav id="main-nav" class="main-navigation">
				<ul>
					<li>
						<a href="#about">
							<span id="aboutMenuText">About</span>
						</a>
					</li>
					<li>
						<a href="#travel">
							<span id="travelMenuText">Travel</span>
						</a>
					</li>
					<li>
						<a href="#qualifications">
							<span id="qualMenuText">Qualifications</span>
						</a>
					</li>
					<li>
						<a href="#experience">
							<span id="expMenuText">Experience</span>
						</a>
					</li>
					<li>
						<a href="#testimonials">
							<span id="tesMenuText">Portfolio</span>
						</a>
					</li>
					<li>
						<a href="#contact">
							<span id="contactMenuText">Contact</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</footer>

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
                    //div.append(cap);}
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

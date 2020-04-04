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
		<meta name="author" content="Ryan Headley">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ryan Headley's Personal Site</title>
        <meta name="description" content="Find out where I am, what I'm doing, and how to connect with me.">

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
		
        <!-- Bootstrap -->
<!--		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel=stylesheet href="<?= base_url('assets/dist/css/flat-ui.css')?>">

        <!-- Scripts -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
		<script src="<?= base_url('assets/dist/js/flat-ui.js')?>"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsQaXloxPg8Os1RrHQSQa1HimaE57hkPQ"></script>
		<script type="text/javascript" src="<?= base_url('assets/scripts/map-icons-master/dist/js/map-icons.js')?>"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

		<script src="<?= base_url('assets/scripts/home.js')?>"></script>
		<script src="<?= base_url('assets/scripts/markerclusterer.js')?>"></script>

    </head>

    <body onload="initMap();">
        <!-- The navigation menu of the site -->
        <header id="header">
            <div id="menu">
                <div id="miniMenu" class="dropdown">
					<i class="dropdown-toggle fa fa-bars" data-toggle="dropdown"></i>
					<div class="dropdown-menu dropdown-menu-right" role="menu">
						<a href="#about" class="dropdown-item">
							<span class="aboutMenuText">About</span>
						</a>
						<a href="#travel" class="dropdown-item">
							<span class="travelMenuText">Travel</span>
						</a>
						<a href="#qualifications" class="dropdown-item">
							<span class="qualMenuText">Qualifications</span>
						</a>
						<a href="#experience" class="dropdown-item">
							<span class="expMenuText">Experience</span>
						</a>
						<a href="#experience" class="dropdown-item">
							<span class="tesMenuText">Portfolio</span>
						</a>
						<a href="#contact" class="dropdown-item">
							<span class="contactMenuText">Contact</span>
						</a>
					</div>
				</div>
				<a href="<?= base_url() ?>"><img id="top-logo" src="<?= base_url('assets/images/logo_Ryan_circle.png') ?>" class="bg-blob logo"></a>
                <nav id="main-nav" class="main-navigation">
                    <ul>
                        <li>
                            <a href="#about">
                                <span class="aboutMenuText">About</span>
                            </a>
                        </li>
                        <li>
                            <a href="#travel">
                                <span class="travelMenuText">Travel</span>
                            </a>
                        </li>
                        <li>
                            <a href="#qualifications">
                                <span class="qualMenuText">Qualifications</span>
                            </a>
                        </li>
                        <li>
                            <a href="#experience">
                                <span class="expMenuText">Experience</span>
                            </a>
                        </li>
                        <li>
                            <a href="#experience">
                                <span class="tesMenuText">Portfolio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contact">
                                <span class="contactMenuText">Contact</span>
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
								<p id="aboutSubTitle" class="above-title">ABOUT ME</p>
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
            <section id="travel" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<img src="<?= base_url('assets/images/green_background_7.png') ?>" class="bg-blob bg7">
				<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 nopadding insta-container">
							<div id="instaDiv">
								<div id="instaFeed"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 travel-container">
							<img src="<?= base_url('assets/images/illustration_world.png') ?>" class="bg-blob bgw">
							<p id="travelSubTitle" class="above-title">THROUGH THE WORLD</p>
							<h2 id="travelTitle" class="title">Travel</h2>
							<p id="travelText">I started out as a traveler discovering the world, and I've now become a <span class="l-grn">digital nomad</span>! Since I'm always on the move, this section let's you know where I am and what I've been up to.</p>
							<button id="instaBtn" class="btn"><a href="https://www.instagram.com/iry47/"><i class="fas fa-caret-left"></i> INSTAGRAM</a></button>
						</div>
						<div id="mapDiv" class="col-xs-12 col-sm-12 order-3">
							<div id="mapWindow">
								<div id="map"></div>
								<img src="<?= base_url('assets/images/geo_altitude.png') ?>" class="bg-blob bga">

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
												$markerColor = 'rgb(107,186,112)';
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

										var myLatlng = new google.maps.LatLng(41.3887900, 2.1589900);
										var mapOptions = {
											zoom: 3,
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

										//my current location
										let i = locations.length;
										var marker = new mapIcons.Marker({
											map: map,
											position: new google.maps.LatLng(41.3887900, 2.1589900),
											icon: {
												path: mapIcons.shapes.MAP_PIN,
												fillColor: '#E74C3C',
												scale: 0.5,
												fillOpacity: 1,
												strokeColor: '',
												strokeWeight: 0
											},
											map_icon_label: '<i class="map-icon fas fa-child"></i>',

										});

										var infowindow = new google.maps.InfoWindow();
										loc = new google.maps.LatLng(41.3887900, 2.1589900);

										google.maps.event.addListener(marker, 'click', (function (marker, i) {
											return function () {
												infowindow.setContent('This is where I currently live! \n If you\'re around or planning on coming, then let me know');
												infowindow.open(map, marker);
											}
										})(marker, i));

										bounds.extend(loc);
									}

									function cmarkers(){

										var marker,i;
										for(i=0; i < locations.length; i++){
											var marker = new mapIcons.Marker({
												map: map,
												position: new google.maps.LatLng(locations[i][3], locations[i][4]),
												icon: {
													path: mapIcons.shapes.MAP_PIN,
													fillColor: '#F4B400',
													scale: 0.5,
													fillOpacity: 1,
													strokeColor: 'rgb(107,186,112)',
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
										markerCluster = new MarkerClusterer(map, markers, {
											imagePath: '<?= base_url('/assets/images/m') ?>',
											gridSize: 40,
										});

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
				<p class="above-title pl-1">RYANHEADLEY.NET</p>
				<h2 class="title">BLOG</h2>
                    <div id="blogDiv">
						<img src="<?= base_url('assets/images/green_background_3.png') ?>" class="bg-blob bg3">
                        <div class="blog-articles">
<!--<button class="articleTab btn btn-default" type="button" data-toggle="dropdown">Brazil<i class="fas fa-caret-down tab-chev"></i></button>-->
<!--<ul class="dropdown-menu" role="menu">-->
<!--<li>-->
                            <div class="list">
                                <div class="list-image-div">
                                    <div class="list-image" style="background-image: url(<?= base_url("assets/images/amazon_river_cruise.jpeg")?>);"></div>
                                </div>
                                <div class="list-text">
                                    <a id="blog1Title" class="list-title" href="<?= base_url("/index.php/home/articles/en/amazon-boat.php#disqus_thread")?>"><span>The Amazon by boat</span></a>
                                    <p class="list-loc"><i class="fas fa-map-marker-alt"></i> Amazonas, Brasil</p>
									<button class="btn "><a href="<?= base_url("/index.php/home/articles/en/amazon-boat.php#disqus_thread")?>"><span class="blogButton">READ</span></a></button>
                                </div>
                            </div>
                            <div class="list">
                                <div class="list-image-div">
                                    <div class="list-image" style="background-image: url(<?= base_url("assets/images/champagny-crew.jpg")?>);"></div>
                                </div>
                                <div class="list-text">
                                    <a id="blog2Title" class="list-title" href="<?= base_url("/index.php/home/articles/en/ski-season.php#disqus_thread")?>"><span>Getting a ski season job</span></a>
                                    <p class="list-loc"><i class="fas fa-map-marker-alt"></i> Champagny en Vanoise, France</p>
									<button class="btn"><a href="<?= base_url("/index.php/home/articles/en/ski-season.php#disqus_thread")?>"><span class="blogButton">READ</span></a></button>
                                </div>
                            </div>
                            <div class="list">
                                <div class="list-image-div">
                                    <div class="list-image" style="background-image: url(<?= base_url("assets/images/banana-group.jpg")?>);"></div>
                                </div>
                                <div class="list-text">
                                    <a id="blog3Title" class="list-title" href="<?= base_url("/index.php/home/articles/en/hostels.php#disqus_thread")?>"><span>Staying in Hostels</span></a>
                                    <p class="list-loc"><i class="fas fa-map-marker-alt"></i> The World</p>
									<button class="btn"><a href="<?= base_url("/index.php/home/articles/en/hostels.php#disqus_thread")?>"><span class="blogButton">READ</span></a></button>
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
								<p id="qualSubTitle" class="above-title pl-1">DEGREES & LANGUAGES</p>
								<h2 id="qualificationsTitle" class="title">QUALIFICATIONS</h2>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
									<img src="<?= base_url('assets/images/illustration_hat.png') ?>" class="bg-blob bgh">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="qual-text">
										<p id="qualInfo">I graduated with a general <span class="l-grn">computer science</span> degree and gained a wide array of experience in different languages and frameworks - from command line to object-oriented programing and from data structures to functional programming: my studies were the foundation of my computer science knowledge.</p>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
											<div class="row">
												<div class="col-xs-3 col-sm-3 col-md-6 col-lg-5">
													<p class="year">2014-2015</p>
												</div>
												<div class="col-xs-9 col-sm-9 col-md-6 col-lg-7">
													<p id="compSciDes" class="degree">Bachelor's in computer science</p>
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
												<div class="col-xs-3 col-sm-3 col-md-6 col-lg-5">
													<p class="year">2010-2014</p>
												</div>
												<div class="col-xs-9 col-sm-9 col-md-6 col-lg-7">
													<p id="mecDes" class="degree">Bachelor's in mechanical engineering</p>
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
						<p class="above-title pl-1">PORTFOLIO</p>
						<h2 class="title">EXPERIENCE</h2>
						<div id="hoverDiv">
							<button id="cvBtn" class="btn"><a href="#" data-target="#cvEn" data-toggle="modal"><i class="fa fa-address-card"></i> <span id="cv"> My  CV</span></a></button>
							<small id="hover4Info">Hover over or click each for more information!</small>
							<figure class="fui-downarrow"></figure>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 experience-history">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 positions">
											<div id="positionsTable">
												<div id="kwRole" class="clickExp">Kidwelcome</div>
												<div id="flRole" class="clickExp">Remote Freelancer</div>
												<div id="wgRole" class="clickExp">The Woodbridge Group</div>
												<div id="tmxRole" class="clickExp">TMX Group</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
										<div id="moreInfo" class="smallExp">
											<blockquote>
												<p id="kwInfo">As the CTO of Kidwelcome, I've created, managed and maintain the entire application as the solo developer.</p>
												<p id="flInfo">For the past three years I have been a remote freelancer, focusing primarily on front &amp; back end web development.</p>
												<p id="wgInfo">Converted the existing reporting system from an ASP.NET Web Form application to an ASP.NET MVC application, designed and created a full client and server side reporting site and implemented the Telerik Kendo UI.</p>
												<p id="tmxInfo">I worked with the team put in charge of developing the new risk analysis software. My tasks varied from programming a web application, developping a RESTful web service to documentation. This allowed me to gain valuable experience in several different computing languages: C#, HTML5, Javascript, CSS, MySQL and Powershell.</p>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 languages-frameworks">
								<div id="thingsUsed" class="smallExp">
									<img src="<?= base_url('assets/images/green_background_6.png') ?>" class="bg-blob bg6">
									<img src="<?= base_url('assets/images/illustration_click.png') ?>" class="bg-blob bgc">
									<div id="virtualLanguages">
										<h3 id="languagesTitle">Languages</h3>
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
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/KW.png")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> PHP, MySQL, APIs</p>
									<button class="btn"><a href="https://kidwelcome.com"><span class="experienceButton">GO TO WEB</span> <i class="fas fa-caret-up"></i></a></button>
								</div>
							</div>
							<div class="portfolio-item">
								<div class="portfolio-box portfolio-image-div">
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/iipsa.jpg")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> PHP, Drupal, jQuery, MySQL</p>
									<button class="btn "><a href="http://iipsafrica.com"><span class="experienceButton">GO TO WEB</span> <i class="fas fa-caret-up"></i></a></button>
								</div>
							</div>
							<div class="portfolio-item">
								<div class="portfolio-box portfolio-image-div">
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/corsematin.jpg")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> HTML, CSS, Javascript</p>
									<button class="btn"><a href="http://corsematin.fr"><span class="experienceButton">GO TO WEB</span> <i class="fas fa-caret-up"></i></a></button>
								</div>
							</div>
							<div class="portfolio-item">
								<div class="portfolio-box portfolio-image-div">
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/opticaltel.png")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> PHP, Wordpress, jQuery, APIs</p>
									<button class="btn"><a href="http://opticaltel.com"><span class="experienceButton">GO TO WEB</span> <i class="fas fa-caret-up"></i></a></button>
								</div>
							</div>
							<div class="portfolio-item">
								<div class="portfolio-box portfolio-image-div">
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/rndtax.png")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> PHP, Wordpress, jQuery, APIs</p>
									<button class="btn"><a href="http://rndtax.co.uk"><span class="experienceButton">GO TO WEB</span> <i class="fas fa-caret-up"></i></a></button>
								</div>
							</div>
							<div class="portfolio-item">
								<div class="portfolio-box portfolio-image-div">
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/crypto.jpg")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> PHP, Wordpress, jQuery, APIs</p>
									<button class="btn"><a href="http://crypto.farm"><span class="experienceButton">GO TO WEB</span> <i class="fas fa-caret-up"></i></a></button>
								</div>
							</div>
							<div class="portfolio-item">
								<div class="portfolio-box portfolio-image-div">
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/lecontactmoderne.png")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> PHP, CRAFT, jQuery, APIs</p>
									<button class="btn"><a href="https://lecontactmoderne.com"><span class="experienceButton">GO TO WEB</span> <i class="fas fa-caret-up"></i></a></button>
								</div>
							</div>
							<div class="portfolio-item">
								<div class="portfolio-box portfolio-image-div">
									<div class="portfolio-image" style="background-image: url(<?= base_url("assets/images/viggo.png")?>);"></div>
								</div>
								<div class="portfolio-box portfolio-text">
									<p class="portfolio-loc"><i class="fas fa-laptop-code"></i> PHP, Craft, jQuery, APIs</p>
									<button class="btn"><a href="https://viggo.fr"><span class="experienceButton">GO TO WEB</span> <i class="fas fa-caret-up"></i></a></button>
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
								<input id="contactFormName" type="text" class="form-control" name="name" placeholder="Name" />
							</div>
							<div id="contactEmail" class="input-group">
								<input type="text" class="form-control" name="email" placeholder="Email" />
							</div>
							<div id="contactSubject" class="input-group">
								<input id="contactFormName" type="text" class="form-control" name="subject" placeholder="Subject" />
							</div>
							<div id="contactMsg" class="input-group">
								<textarea id="msg" type="text" class="form-control" name="message" placeholder="Message"></textarea>
							</div>
							<div class="g-recaptcha" data-sitekey="6Ldfmm0UAAAAAC57eggqtRxPK1I70lgrbT36sCwy"></div>
							<div id="sendBtn">
								<button id="contactButton" class="btn" type="submit">Send Email</button>
							</div>
							<?= form_close(); ?>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 order-1">
						<p id="contactSubTitle" class="above-title pl-1">LET'S MEET</p>
						<h2 id="contactTitle" class="title">CONTACT</h2>
						<div id="contactArticle">
							<p id="contactText">Whether you're looking for a developer, want to meet up for a drink or anything in between - send me an email. <span class="l-gry">Looking forward to hearing from you!</span></p>
							<!--                        <a id="emailLink">ryan.headley@me.com</a>-->
						</div>
						<div id="socialLinks">
							<i id="emailLink" title="Open your email application" class="fa fa-at"></i>
							<i id="linkedInLink" title="LinkedIn" class="fab fa-linkedin"></i>
							<i id="twitterLink" title="Twitter" class="fab fa-twitter"></i>
							<i id="instaLink"   title="Instagram" class="fab fa-instagram"></i>
							<i id="gitLink"   title="GitHub" class="fab fa-github"></i>
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
			<nav id="main-nav-footer" class="main-navigation">
				<ul>
					<li>
						<a href="#about">
							<span class="aboutMenuText">About</span>
						</a>
					</li>
					<li>
						<a href="#travel">
							<span class="travelMenuText">Travel</span>
						</a>
					</li>
					<li>
						<a href="#qualifications">
							<span class="qualMenuText">Qualifications</span>
						</a>
					</li>
					<li>
						<a href="#experience">
							<span class="expMenuText">Experience</span>
						</a>
					</li>
					<li>
						<a href="#testimonials">
							<span class="tesMenuText">Portfolio</span>
						</a>
					</li>
					<li>
						<a href="#contact">
							<span class="contactMenuText">Contact</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</footer>

	<div class="modal" id="cvEn" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				 <div id="cvHeader" class="modal-header">
					 <button id="cvEnBtn" class="btn"><i class="fa fa-exchange"></i> Switch to English</span></a></button>
					 <button id="cvFrBtn" class="btn"><i class="fa fa-exchange"></i> Traduire à français</span></a></button>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>
				<div id="cvEnPhoto" class="modal-body">
					<img src="<?= base_url('assets/images/cv_en.png') ?>"/>
				</div>
				<div id="cvFrPhoto" class="modal-body">
					<img src="<?= base_url('assets/images/cv_fr.png') ?>"/>
				</div>
			</div>
		</div>
	</div>


    <script type="text/javascript">
        var request = new XMLHttpRequest();
        //request.open('http://api.instagram.com/v1/users/self/media/recent/?access_token=243041655.02d2968.62395b7ebe65470ca1b2113e01a26ebf&count=12', true);

		$.getJSON('https://graph.instagram.com/me/media?fields=media_url,caption,thumbnail_url&access_token=IGQVJVTWdwLUVrMndCbnZACdGpIalBZAVmxfU2RFcE45dFlscTl0Sm9COHNVa2lzSmRxUzdlYWNoQUFLRVZAyaUVpbU5tbHdES0tjazJiNk1BTXNvMzZAvUGtzN19DWlMxM3pYSld0c21R',{
			format: 'json'
		})
		.done(function(data){
			for (var i=0;i < 12;i++) {
				var imgURL = data.data[i].media_url;
				var thumbnail = data.data[i].thumbnail_url;
				var div = $('<a href="#" class="instapic" data-target="#pic'+i+'" data-toggle="modal" ></a>');
				var modal ='<div class="modal" id="pic'+i+'" tabindex="-1" role="dialog" aria-hidden="true">' +
					'  <div class="modal-dialog modal-dialog-centered">' +
					'    <div class="modal-content">' +
					' 	 <div class="modal-header">' +
					'        <button type="button" class="close" data-dismiss="modal">&times;</button>' +
					'      </div>' +
					'    <div class="modal-body">' +
					'		<img src="'+data.data[i].media_url+'"/>'+
					'       <p class="insta-caption">'+data.data[i].caption+'</p>'+
					'	</div>' +
					'	</div>' +
					'</div>' +
					'</div>';
				$('#instaFeed').append(div);
				$('#instaFeed').append(modal);
				var img;
				if(typeof(thumbnail) != "undefined"){
					img = $('<img src="'+thumbnail+'"/>');
				}else{
					img = $('<img src="'+imgURL+'"/>');
				}

				//var cap = $('<p class="instaCap"><b>iry47</b> '+caption+'</p>');
				div.append(img);
				//div.append(cap);}
			}
		});
        // request.onload = function(container) {
        //     if (request.status >= 200 && request.status < 400) {
        //         var data = JSON.parse(request.responseText);
        //         for (var i=0;i < data.data.length;i++) {
        //             var imgURL = data.data[i].images.thumbnail.url;
        //             //var caption = data.data[i].caption.text;
        //             var div = $('<a href="#" class="instapic" data-target="#pic'+i+'" data-toggle="modal" ></a>');
		// 			var modal ='<div class="modal" id="pic'+i+'" tabindex="-1" role="dialog" aria-hidden="true">' +
		// 				'  <div class="modal-dialog modal-dialog-centered">' +
		// 				'    <div class="modal-content">' +
		// 				' 	 <div class="modal-header">' +
		// 				'        <button type="button" class="close" data-dismiss="modal">&times;</button>' +
		// 				'      </div>' +
		// 				'    <div class="modal-body">' +
		// 				'		<img src="'+data.data[i].images.standard_resolution.url+'"/>'+
		// 				'	</div>' +
		// 				'	</div>' +
		// 				'</div>' +
		// 				'</div>';
        //             $('#instaFeed').append(div);
		// 			$('#instaFeed').append(modal);
        //             var img = $('<img src="'+imgURL+'"/>');
        //             //var cap = $('<p class="instaCap"><b>iry47</b> '+caption+'</p>');
        //             div.append(img);
        //             //div.append(cap);}
        //         }
		//
        //         console.log(data);
        //     } else {
        //     }
        // };
        // request.onerror = function() {
        //     // There was a connection error of some sort
        // };
        // request.send();
    </script>

</html>

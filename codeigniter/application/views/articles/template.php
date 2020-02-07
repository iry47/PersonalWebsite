<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta name="description" content="">
    
    <!-- Fav Icon -->
        <link rel="icon" href="<?= base_url('www/assets/images/favicon.ico')?>">
        <!-- Stylesheets -->
        <link rel=stylesheet href="<?= base_url('www/assets/stylesheets/articles.css')?>">

        <link rel="stylesheet" type="text/css" href="<?= base_url('www/assets/scripts/map-icons-master/dist/css/map-icons.css')?>">
        <script type="text/javascript" src="<?= base_url('www/assets/scripts/map-icons-master/dist/js/map-icons.js')?>"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel=stylesheet href="<?= base_url('www/assets/dist/css/flat-ui.css')?>">

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="<?= base_url('www/assets/scripts/articles.js')?>"></script>
        <script src="<?= base_url('www/assets/dist/js/flat-ui.js')?>"></script>
    
    <script id="dsq-count-scr" src="//ryanheadley-net.disqus.com/count.js" async></script>
</head>
    <body>
    <div class="cover-photo" style="background-image: url('<?= base_url("www/assets/images/amazon-river-cruise.jpg")?>')">
    <div class="article-title">
    <h1></h1></div>
    </div>
    <div class="article">
        <div id="return">
            <a href="<?= base_url()?>"><i class="fas fa-arrow-left"></i><span> Back to homepage</span></a>
        </div>
        <p class="article-text">
            
        </p>
        
        <h3></h3>
        <div class="unexpandable">
        <div class="photos">
            <img class="photo" alt="boat terminal belem" src="<?= base_url("www/assets/images/hidroviaria-belem.jpg")?>">
        </div>
        <div class="points">
        <ul>
            <li>T</li>
        </ul>
        </div>
        </div>
        <div class="expandable">
        <button class="btn btn-hg btn-primary text-expand">Expand to read more <i style="float:right" class="fas fa-chevron-down"></i></button>
        <div class="section-expand">
            <div class="expandable-text"></div>
        </div>
        </div>
        
        <h3>Conclusion</h3>
            <div class="article-text"><p></p>
    </div>
        <div id="disqus_thread"></div>
    </div>
</body>
</html>
    <script>

var disqus_config = function () {
this.page.url = 'https://www.ryanheadley.net/index.php/home/articles/amazon-boat.php#disqus_thread';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = 'amazon';
    this.page.title = 'Boat through The Amazon';
    this.page.url = 'https://www.ryanheadley.net/index.php/home/articles/amazon-boat.php#disqus_thread';
};

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://ryanheadley-net.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
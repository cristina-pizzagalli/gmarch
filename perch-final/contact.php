<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>
      Guthrie Muscovitch Architects - Contact
    </title>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
    <meta description='Page title'>
    <link href='assets/stylesheets/vendor/reset.css' rel='stylesheet' type='text/css'>
    <link href='assets/stylesheets/main.css' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <link href='assets/stylesheets/ie8.css' rel='stylesheet' type='text/css'>
      <script src='assets/javascripts/vendor/html5shiv.min.js'></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700,700italic|Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet'>
  </head>
  <body class='contact'>
    <div class='mobile-only'>
      <a href='#sidr' id='simple-menu'></a>
      <div id='sidr'>
        <ul>
          <li>
            <a class='default' href='index.php'>Home</a>
          </li>
          <li>
            <a class='about' href='about.php'>About</a>
          </li>
          <li>
            <a class='projects' href='#'>Projects</a>
            <?php perch_pages_navigation(array('navgroup' =>'Projects')); ?>
          </li>
          <li>
            <a class='people' href='people.php'>People</a>
          </li>
          <li>
            <a class='services' href='services.php'>Services</a>
          </li>
          <li>
            <a class='recognition' href='recognition.php'>Recognition</a>
          </li>
          <li>
            <a class='contact' href='contact.php'>Contact</a>
          </li>
        </ul>
      </div>
      <div class='keyline'></div>
    </div>
    <header>
      <img src='assets/images/gma-logo.png'>
      <ul id='menu-desktop'>
        <li>
          <a class='default' href='index.php'>Home</a>
        </li>
        <li>
          <a class='about' href='about.php'>About</a>
        </li>
        <li>
          Projects
          <?php perch_pages_navigation(array('navgroup' =>'Projects')); ?>
        </li>
        <li>
          <a class='people' href='people.php'>People</a>
        </li>
        <li>
          <a class='services' href='services.php'>Services</a>
        </li>
        <li>
          <a class='recognition' href='recognition.php'>Recognition</a>
        </li>
        <li>
          <a class='contact' href='contact.php'>Contact</a>
        </li>
      </ul>
      <div class='clear'></div>
      <div class='keyline'></div>
    </header>
    <section class='interior-page-header contact'>
      <script src='http://maps.google.com/maps/api/js?sensor=false' type='text/javascript'></script>
      <a href='https://www.google.ca/maps/place/770+Brown%27s+Line,+Etobicoke,+ON+M8W+3W2/@43.6079017,-79.5495925,14z/data=!4m2!3m1!1s0x882b481ab1076a47:0x61092b3e40b71289?hl=en' target='blank'>
        <div style='height:600px;width:100%;'>
          <div id='gmap_canvas' style='height:600px;width:100%;'></div>
          <style>
            #gmap_canvas img{max-width:none!important;background:none!important}span{font-size:10px;font-family:arial;}span a{text-decoration:none;}  %span
            supported by
            %a#get-map-data.google-map-code{:href => "http://www.stromaffe.de"} stromaffe.de
          </style>
        </div>
        <script>
          function init_map(){var myOptions = {zoom:11,center:new google.maps.LatLng(43.6083833,-79.54860539999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(43.6083833, -79.54860539999999)});infowindow = new google.maps.InfoWindow({content:"Guthrie Muscovitch Architects770 Browns LineM8W 3W2 Toronto" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);
        </script>
      </a>
    </section>
    <div class='keyline'></div>
    <section class='interior-page contact'>
      <h2>
        Guthrie Muscovitch Architects
      </h2>
      <h3>
        770 Browns Line. Toronto, ON M8W 3W2
      </h3>
      <p>
        <i class='fa fa-phone fa-lg'></i>
        (416) 252 5679
        <br>
        <i class='fa fa-print fa-lg'></i>
        (416) 252 9637
      </p>
      <div class='wrapper'>
        <div class='left'>
          <h4>
            Randy Guthrie
          </h4>
          <p>
            Principal
          </p>
          <a href='mailto:grguthrie@gmarch.ca'>
            grguthrie@gmarch.ca
          </a>
        </div>
        <div class='right'>
          <h4>
            Arthur Muscovitch
          </h4>
          <p>
            Principal
          </p>
          <a href='mailto:amuscovitch@gmarch.ca'>
            amuscovitch@gmarch.ca
          </a>
        </div>
      </div>
      <div class='clear'></div>
    </section>
    <footer>
      © 2014 Guthrie Muscovitch Architects
    </footer>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script>
      window.jQuery || document.write('<script src="javascripts/vendor/jquery-1.9.1.js"><\/script>');
    </script>
    <script src='assets/javascripts/vendor/jquery-ui.js'></script>
    <script src='assets/javascripts/vendor/placeholders.js'></script>
    <script src='assets/javascripts/main.js'></script>
    <script src='assets/javascripts/vendor/owl.carousel.js'></script>
    <script src='assets/javascripts/vendor/jquery.magnific-popup.js'></script>
    <script src='assets/javascripts/vendor/jquery.sidr.min.js'></script>
    <script src='assets/javascripts/vendor/jquery.touchwipe.min.js'></script>
  </body>
</html>

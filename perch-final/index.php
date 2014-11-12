<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>
      Guthrie Muscovitch Architects
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
  <body class='default'>
    <style>
      section#feature {
        background-image: url(<?php perch_content('feature-image')?>);
      }
    </style>    
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
    <section id='feature'>
      <div class='content'>
        <div class='feature-wrapper'>
          <div class='lock-up'>
            <div class='top'>
              Innovation
            </div>
            <img src='assets/images/divider.png'>
            <div class='middle'>
              Implementation
            </div>
            <div class='bottom'>
              Makes Great Architecture
            </div>
          </div>
          <a class='scroll-to' href='#scroll'>
            <img src='assets/images/scroll-to.png'>
          </a>
        </div>
      </div>
    </section>
    <section class='home-nav' id='scroll'>
      <div id='project-listing'>
        <h1>
          Featured Projects
        </h1>
        <div class='wrapper-scroll'>
          <div class='owl-carousel owl-theme' id='owl-demo'>
            <?php perch_content('projects-listing') ?>
          </div>
        </div>
      </div>
    </section>
    <div class='footer-logos'>
      <img src='assets/images/footer-logos.png'>
    </div>
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

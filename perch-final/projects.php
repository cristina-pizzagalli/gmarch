<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>
      
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
  <body class=''>
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
            <ul>
              <li>
                <a class='projects' href='urban-infill-condominiums.php'>Urban infill condominiums</a>
              </li>
              <li>
                <a class='projects' href='suburban-condominiums.php'>Suburban condominiums</a>
              </li>
              <li>
                <a class='projects' href='recreational-buildings.php'>Recreational buildings</a>
              </li>
              <li>
                <a class='projects' href='neighbourhood-housing.php'>Neighbourhood housing</a>
              </li>
              <li>
                <a class='projects' href='estate-and-custom-homes.php'>Estate and custom homes</a>
              </li>
              <li>
                <a class='projects' href='urban-houses.php'>Urban houses</a>
              </li>
              <li>
                <a class='projects' href='resort-housing.php'>Resort Housing</a>
              </li>
              <li>
                <a class='projects' href='mixed-use-condominiums.php'>Mixed use condominiums</a>
              </li>
              <li>
                <a class='projects' href='new-community-planning.php'>New community planning</a>
              </li>
              <li>
                <a class='projects' href='feasibility-studies.php'>Feasibility Studies</a>
              </li>
            </ul>
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
    <section class='projects-nav'>
      <div id='project-listing'>
        <h1>
          <?php perch_pages_title(); ?>
        </h1>
        <div class='wrapper-scroll'>
          <div class='owl-carousel owl-theme' id='owl-demo'>
            <?php perch_content('projects-listing') ?>
          </div>
        </div>
      </div>
    </section>
    <div class='project-details'>
      <h2>
        <div id="project-name"></div>
      </h2>
      <div id="project-description"></div>
      <p>
        <span>
          <div id="client-name"></div>
        </span>
        <span>
          <div id="project-status"></div>
        </span>
      </p>
      <div class='parent-container'></div>
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

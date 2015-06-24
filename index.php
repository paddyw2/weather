

<?php
include 'weather.php';
?>

<?php
include 'icon_chooser.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Weather</title>
<meta name="description" content="">
<link href="css/weatherstyle.css" rel="stylesheet">
      <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    <link href="css/weatherstyle.css" rel="stylesheet">
    <link href="css/icons/flaticon.css" rel="stylesheet">
     <link href="mobile-menu/rmm-css/responsivemobilemenu.css" rel="stylesheet">
<!-- IE6-8 support of HTML5 elements --> <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
    
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">
            
  
            <!-- optional menu -->
            <!--
            <div class="rmm">
            <ul>
                <li><a href='#home'>Home</a></li>
                <li><a href='#about-me'>About me</a></li>
                <li><a href='#gallery'>Gallery</a></li>
                <li><a href='#blog'>Blog</a></li>
                <li><a href='#links'>Links</a></li>
                <li><a href='#sitemap'>Sitemap</a></li> 
            </ul>
        </div>
            -->
            
            
            

          <div class="inner cover">
              <div class="profileimage <?php echo $weather_icon ?>"></div>
              
            <h1 class="cover-heading"><?php echo $location_full ?></h1>
              <div class="lead weatherdescription"><h2><?php echo $location_weather ?></h2></div>
              <div class="lead weatherlist">
            <ul>
              <li><?php echo $location_temperature."C" ?>  </li>
                <li><?php echo $location_humidity ?></li>
                   <li><?php echo $location_windmph."mph" ?></li>
               
              
                  </ul></div>
            <p class="lead">
              <a href="http://www.wunderground.com/" class="btn btn-lg btn-default">Created Using the Wunderground API</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p></p>
            </div>
          </div>

        </div>
<div class="credit">Icons by <a href="http://www.flaticon.com" title="Flaticon">Flaticon</a></div>
      </div>

    </div>
    
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/mobile-menu/rmm-js/responsivemobilemenu.js"></script>
  
    
    
    
</body>
</html>
    
    


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
<title>HTML5 Template</title>
<meta name="description" content="">
<link rel="stylesheet" href="/API/css/weatherstyle.css">
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
            
            
   <!---         

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Weather</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="/CMS/adminhome.php"><span class="glyphicon glyphicon-cog"></span></a></li>
                  <li><a href="/CMS/logout.php"><span class="glyphicon glyphicon-off"></span></a></li>
                    
                </ul>
              </nav>
            </div>
          </div>
            
            
           ---->
            
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
              <a href="#" class="btn btn-lg btn-default">More weather from Wunderground</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p></p>
            </div>
          </div>

        </div>
<div class="credit">Icons made by <a href="http://www.flaticon.com/authors/yannick" title="Yannick">Yannick</a>, <a href="http://www.flaticon.com/authors/situ-herrera" title="Situ Herrera">Situ Herrera</a>, <a href="http://www.flaticon.com/authors/rami-mcmin" title="Rami McMin">Rami McMin</a>, <a href="http://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
      </div>

    </div>
    
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/API/dist/js/bootstrap.min.js"></script>
    <script src="/API/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/API/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/API/mobile-menu/rmm-js/responsivemobilemenu.js"></script>
  
    
    
    
</body>
</html>
    
    
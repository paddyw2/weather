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
<title>Weather App</title>
<meta name="description" content="">
<link href="css/weatherstyle.css" rel="stylesheet">
<link href="dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/cover.css" rel="stylesheet">
<link href="css/weatherstyle.css" rel="stylesheet">
<link href="css/icons/flaticon.css" rel="stylesheet">
<link href="mobile-menu/rmm-css/responsivemobilemenu.css" rel="stylesheet">
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
                         </ul>
                    </div>
                    <p class="lead">
                        <a href="http://www.wunderground.com/" class="btn btn-lg btn-default">Created Using the Wunderground API</a>
                    </p>
                </div>
            </div>
        <div class="credit">Icons by <a href="http://www.flaticon.com" title="Flaticon">Flaticon</a>&nbsp;|&nbsp;Image by <a href="https://unsplash.com/gregshield" title="Flaticon">Unsplash</a></div>
        </div>
    </div>


<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/dist/js/bootstrap.min.js"></script>
<script src="/mobile-menu/rmm-js/responsivemobilemenu.js"></script>

</body>
</html>
    
    
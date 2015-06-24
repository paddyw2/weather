<?php


$string = file_get_contents("http://api.wunderground.com/api/8f27c98e5c7d7563/conditions/q/CA/Calgary.json");
    
    $json_decoded = json_decode($string,true);



$location_full = $json_decoded['current_observation']['display_location']['full'];
$location_weather = $json_decoded['current_observation']['weather'];
$location_temperature = $json_decoded['current_observation']['temp_c'];
$location_weathericon = $json_decoded['current_observation']['icon_url'];
$location_windmph = $json_decoded['current_observation']['wind_mph'];
$location_humidity = $json_decoded['current_observation']['relative_humidity'];

/*
echo 'Location Name: '.$location_full;
echo "</br> ";
echo 'Location Weather: '.$location_weather;
echo "</br> ";
echo "Location Temperature: ".$location_temperature."C";
echo "</br> ";
echo '<img src="'.$location_weathericon.'" alt="">';

*/
                             
                      
                             ?>
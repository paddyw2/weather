<?php

$icon_default = "flaticon-cloudy19";
$weather_icon = $icon_default;
$icon_cloudy = "flaticon-cloud-storage";
$icon_sunny = "flaticon-sunny";
$icon_snow = "flaticon-snowflake3";



if ($location_weather == "Cloudy") {
    $weather_icon = $icon_cloudy;
} elseif ($location_weather == "Partly Cloudy") {
    $weather_icon = $icon_cloudy;
}

elseif ($location_weather == "Mostly Cloudy") {
  $weather_icon = $icon_cloudy;
}

elseif ($location_weather == "Hazy") {
  $weather_icon = $icon_cloudy;
}

elseif ($location_weather == "Foggy") {
  $weather_icon = $icon_cloudy;
}

elseif ($location_weather == "Overcast") {
  $weather_icon = $icon_cloudy;
}

elseif ($location_weather == "Clear") {
  $weather_icon = $icon_sunny;
}

elseif ($location_weather == "Very Hot") {
  $weather_icon = $icon_default;
}

elseif ($location_weather == "Very Cold") {
  $weather_icon = $icon_default;
}

elseif ($location_weather == "Blowing Snow") {
  $weather_icon = $icon_snow;
}

elseif ($location_weather == "Flurries") {
  $weather_icon = $icon_snow;
}

elseif ($location_weather == "Chance of Snow Showers") {
  $weather_icon = $icon_snow;
}

elseif ($location_weather == "Snow Showers") {
  $weather_icon = $icon_snow;
}

elseif ($location_weather == "Chance of Snow") {
  $weather_icon = $icon_snow;
}

elseif ($location_weather == "Snow") {
  $weather_icon = $icon_snow;
}

elseif ($location_weather == "Chance of Ice Pellets") {
  $weather_icon = $icon_snow;
}

elseif ($location_weather == "Ice Pellets") {
  $weather_icon = $icon_snow;
}

elseif ($location_weather == "Blizzard") {
  $weather_icon = $icon_snow;
}

elseif ($location_weather == "Chance of Showers") {
  $weather_icon = $icon_rain;
}

elseif ($location_weather == "Showers") {
  $weather_icon = $icon_rain;
}

elseif ($location_weather == "Chance of Rain") {
  $weather_icon = $icon_rain;
}

elseif ($location_weather == "Rain") {
  $weather_icon = $icon_rain;
}

elseif ($location_weather == "Chance of a Thunderstorm") {
  $weather_icon = $icon_rain;
}

elseif ($location_weather == "Thunderstorm") {
  $weather_icon = $icon_rain;
}


else {
    $weather_icon = $icon_default;
};
?>
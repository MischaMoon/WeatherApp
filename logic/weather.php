<?php



// Sanitize the form input
$location = htmlentities($_POST['location']);

// Replace any space in the form input with plus marks
$location = str_replace (' ', '+',$location);

// Using Google Geodcode Api to replace the darksky api lang and lat with address name
$geocode_url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$location.'&key=AIzaSyDVQDvXhCYAfhU16Ux5NHyQ7z7FfSTFJ3c';
$location_data= json_decode(@file_get_contents($geocode_url));




//For testing the results

//echo '<pre>';
//print_r($location_data);
//echo '</prev>';



$coordinates = $location_data->results[0]->geometry->location;

$time = 1544227200 - 25920000  ;

// Combining lat and Lng for DarkSky
$coordinates = $coordinates->lat.','.$coordinates->lng;



// DarkSky Api
$api_url = 'https://api.darksky.net/forecast/a278534634e93849cdd63cd21d5f984b/' .$coordinates;


// Decode the weather from DarkSky
$forecast = json_decode(@file_get_contents($api_url));
$forecast_past = json_decode(@file_get_contents($api_url.$time));




// Set time zone based on location searched
date_default_timezone_set($forecast->timezone);

// Set time zone based on the location you searched in the past
date_default_timezone_set($forecast_past->timezone);

//Get the location that the user searched for
$place = $location_data->results[0]->address_components[0]->long_name;



// Current Conditions
$temperature_current = round($forecast->currently->temperature);
$summary_current = $forecast->currently->summary;
$windspeed_current = round($forecast->currently->windSpeed);
$humidity_current = $forecast->currently->humidity * 100;



//Past Conditions
$temperature_past = round($forecast_past->currently->temperature);
$summary_past = $forecast->currently->summary;
$windspeed_past = round($forecast_past->currently->windSpeed);
$humidity_past = $forecast_past->currently->humidity * 100;

// Getting the appropriate icons

function get_icons($icon)

{


  if ($icon==='clear-day')
  {
      $the_icon = '<i class="wi wi-day-sunny "> </i>';
      return $the_icon;

}
    elseif ($icon==='clear-night')
    {
      $the_icon = '<i class="wi wi-night-clear"></i>';
      return $the_icon;

     }
 elseif ($icon==='rain')
    {

      $the_icon = '<i class="wi wi-rain"></i>' ;
      return $the_icon;
     }
 elseif ($icon==='snow')
    {

      $the_icon = '<i class="wi wi-snow"></i>';
      return $the_icon;
     }
 elseif ($icon==='sleet')
    {
      $the_icon = '<i class="wi wi-sleet"></i>';
      return $the_icon;

     }
 elseif ($icon==='wind')
    {
      $the_icon = '<i class="wi wi-windy"></i>';
      return $the_icon;

     }
 elseif ($icon==='fog')
    {

      $the_icon = '<i class="wi wi-fog"></i>';
      return $the_icon;
     }
 elseif ($icon==='cloudy')
    {
      $the_icon = '<i class="wi wi-cloudy"></i>';
      return $the_icon;

     }
 elseif ($icon==='partly-cloudy-day')
    {

      $the_icon = '<i class="wi wi-day-cloudy-high"></i>';
      return $the_icon;
     }
 elseif ($icon==='partly-cloudy-night')
    {
      $the_icon = '<i class="wi wi-night-alt-partly-cloudy"></i>';
      return $the_icon;

     }

}































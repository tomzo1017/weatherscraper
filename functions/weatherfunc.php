<?php
 $message = '';
 $error ="";
 $weather='';
 $city='';
 if (array_key_exists('city', $_GET)) {
   $city = str_replace(' ', '', $_GET['city']);
   $file_headers = @get_headers("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");

   if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
     $error = "That city could not be found.";
   } else {
    
     $forecastPage = file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
     $pageArray = explode('<p class="b-forecast__table-description-content"><span class="phrase">',$forecastPage);
    if (sizeof($pageArray) > 1) {
     $secondPageArray = explode('</span></p>', $pageArray[1]);
     $weather = $secondPageArray[0];

   
    } else {
      $error = "The city could not be found.";
    }
        
   }
 
   
 
 }
 
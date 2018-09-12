<?php 
  $message = '';
  $error ="";

  if ($_GET['city']) {
    $city = str_replace(' ', '', $_GET['city']);
    $file_headers = @get_headers("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");

    if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
      $error = "That city could not be found.";
    } else {

      $forecastPage = file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
      $pageArray = explode('class="phrase">',$forecastPage);
      $secondPageArray = explode('</span></p></td>', $pageArray[1]);
      $weather = $secondPageArray[0];
    }
    <td class="b-forecast__table-description-cell--js" colspan="9"><span class="b-forecast__table-description-title"><h2>Turku Weather (4–7 days)</h2></span><p class="b-forecast__table-description-content"><span class="phrase"></span></p></td>
  }
  
   
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Weatherscraper</title>
  </head>
  <body>
    <div class="container">
    <h1>City Scraper</h1>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter the name of a city. </label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Paris.. Helsinki etc.." value="<?php echo $_GET['city'];?>">
  </div>
  <button type="submit" class="btn btn-primary"> Submit </button>
  <p> <?php  echo $message; ?></p>

</form>
<div id="result"> 
 </div>
    </div>
  
   
  </body>
</html>
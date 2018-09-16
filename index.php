
  
   <?php require './functions/weatherfunc.php' ?>
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/weather.js"></script>
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
    <h1>Weather Scraper</h1>
<form action="#" method="GET" class="form-home">
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter the name of a city. </label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Paris.. Helsinki etc.." value="<?php if ($city) {echo $_GET['city']; } else { echo "Paris, Helsinki etc."; } ?> ">
  </div>
  <button type="submit" class="btn btn-primary"> Submit </button>
   

</form>
<div id="success"> </div>
<div id="weather"><?php  
    if ($weather) {
    echo '<div class="alert alert-success" role="alert" >'.$weather.'</div>';
       } else if ($error) {
         echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
       }
?> </div>
    </div>
  
   
  </body>
</html>
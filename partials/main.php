<main class="container text-center">

  <h1>Weather</h1>

  <form class="form-inline" method="post">
        <div class="form-group mx-auto my-5">
             <label class ="sr-only"  for="location">  Enter a Location </label>
             <input type="text" class="form-control" id="location" placeholder="location" name="location">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

  </form>

  <?php

  if ( isset ($_POST['location']))
  {

    if ($location_data->status==='OK')

    {

      echo '<h2  class="display-4 result-weather"> Results for '.$place.'</h2>';
    require 'current-weather.php';
    require 'hourly-weather.php';
      echo '<h2  class="display-4 result-weather"> Results of current week for '.$place.'</h2>';
    require 'daily-weather.php';
      echo '<h2  class="display-4 result-weather"> Results of past days for '.$place.'</h2>';
    require 'past-weather.php';

  }  else  {

       echo '<h2> Location not Found </h2>';
    }
  }


  ?>

</main>

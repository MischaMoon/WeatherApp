<div class="row">
  <?php


  //Set counter at 0

  $i = 0;
  $secondPerDays = 604800;

  //Start the foreach loop to get daily forecast

  foreach ($forecast_past->daily->data as $day):

    //average Temp
    $average_temp = (round($day->temperatureHigh) + round($day->temperatureLow)) / 2;


    ?>


    <div class="col-12 col-md-3 result-weather">

      <div class="card p-4 mb-4 back-card-color">
        <br>
        <h2 class="h4">
          <?php
          echo date("l Y/m/d", $day->time - $secondPerDays);

          ?>
        </h2>


        <span class="display-2 mb-3">  <?php echo get_icons($day->icon); ?>   </span>


        <h3 class="display-4">
          <?php echo round($average_temp); ?> &deg;


        </h3>


        <p class="lead ">
          Hi <?php echo round($day->temperatureHigh); ?> &deg; </p>
        <p class="lead ">
          Lo <?php echo round($day->temperatureLow); ?> &deg; </p>


      </div>

    </div>


    <?php

    //increase counter by one for each iteration
    $i++;

    // Stop the loop after 7 iterations

    if ($i == 7) break;


    // End of the foreach
  endforeach;

  //Set counter at 0

  $i = 0;
  $secondPerDays += 604800;
  //Start the foreach loop to get daily forecast
  foreach ($forecast_past->daily->data as $day):

    //average Temp
    $average_temp = (round($day->temperatureHigh) + round($day->temperatureLow)) / 2;


    ?>


    <div class="col-12 col-md-3 result-weather">

      <div class="card p-4 mb-4 back-card-color">
        <h2 class="h4">
          <?php
          echo date("l Y/m/d", $day->time - $secondPerDays);

          ?>
        </h2>


        <span class="display-2 mb-3">  <?php echo get_icons($day->icon); ?>   </span>


        <h3 class="display-4">
          <?php echo round($average_temp); ?> &deg;


        </h3>


        <p class="lead ">
          Hi <?php echo round($day->temperatureHigh); ?> &deg; </p>
        <p class="lead ">
          Lo <?php echo round($day->temperatureLow); ?> &deg; </p>

      </div>

    </div>


    <?php

    $i++;


    if ($i == 7) break;


  endforeach;


  $i = 0;
  $secondPerDays += 604800;

  foreach ($forecast_past->daily->data as $day):

    $average_temp = (round($day->temperatureHigh) + round($day->temperatureLow)) / 2;


    ?>


    <div class="col-12 col-md-3 result-weather">

      <div class="card p-4 mb-4 back-card-color">
        <h2 class="h4">
          <?php
          echo date("l Y/m/d", $day->time - $secondPerDays);

          ?>
        </h2>


        <span class="display-2 mb-3">  <?php echo get_icons($day->icon); ?>   </span>


        <h3 class="display-4">
          <?php echo round($average_temp); ?> &deg;


        </h3>


        <p class="lead ">
          Hi <?php echo round($day->temperatureHigh); ?> &deg; </p>
        <p class="lead ">
          Lo <?php echo round($day->temperatureLow); ?> &deg; </p>


      </div>

    </div>


    <?php

    $i++;


    if ($i == 7) break;


  endforeach;

  $i = 0;
  $secondPerDays += 604800;

  foreach ($forecast_past->daily->data as $day):

    $average_temp = (round($day->temperatureHigh) + round($day->temperatureLow)) / 2;


    ?>


    <div class="col-12 col-md-3 result-weather">

      <div class="card p-4 mb-4 back-card-color">
        <h2 class="h4">
          <?php
          echo date("l Y/m/d", $day->time - $secondPerDays);

          ?>
        </h2>


        <span class="display-2 mb-3">  <?php echo get_icons($day->icon); ?>   </span>


        <h3 class="display-4">
          <?php echo round($average_temp); ?> &deg;


        </h3>


        <p class="lead ">
          Hi <?php echo round($day->temperatureHigh); ?> &deg; </p>
        <p class="lead ">
          Lo <?php echo round($day->temperatureLow); ?> &deg; </p>


      </div>

    </div>


    <?php

    $i++;

    if ($i == 7) break;

  endforeach;

  $i = 0;
  $secondPerDays += 172800;

  foreach ($forecast_past->daily->data as $day):

    $average_temp = (round($day->temperatureHigh) + round($day->temperatureLow)) / 2;

    ?>


    <div class="col-12 col-md-3 result-weather">

      <div class="card p-4 mb-4 back-card-color">
        <h2 class="h4">
          <?php
          echo date("l Y/m/d", $day->time - $secondPerDays);

          ?>
        </h2>


        <span class="display-2 mb-3">  <?php echo get_icons($day->icon); ?>   </span>


        <h3 class="display-4">
          <?php echo round($average_temp); ?> &deg;


        </h3>


        <p class="lead ">
          Hi <?php echo round($day->temperatureHigh); ?> &deg; </p>
        <p class="lead ">
          Lo <?php echo round($day->temperatureLow); ?> &deg; </p>


      </div>

    </div>


    <?php

    $i++;

    if ($i == 2) break;

  endforeach;

  ?>

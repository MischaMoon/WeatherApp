<ul class="list-group" style="margin: 0 auto ; max-width: 320px;">


  <?php


  //Set counter at 0

  $i = 0;

  //Start the foreach loop to get daily forecast
  foreach ($forecast->hourly->data as $hour):


    ?>


    <li class="list-group-item d-flex justify-content-between"
        style="color: white;background-color: rgba(0, 0, 0, 0.3);">
      <p class="lead m-0">
        <?php echo date("g:i a", $hour->time); ?></p>


      <p class="lead m-0">
        <?php echo round($hour->temperature); ?> &deg; </p>


    </li>


    <?php

    //increase counter by one for each iteration
    $i++;

    // Stop the loop after 4 iterations

    if ($i == 4) break;


    // End of the foreach

  endforeach;
  echo "<br><br>";

  ?>


</ul>

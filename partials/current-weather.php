
<div style="margin: 0 auto;max-width: 320px;color: white;background-color: rgba(0, 0, 0, 0.1);">
  <span class="display-2 mb-3">  <?php echo get_icons($forecast->currently->icon); ?>   </span>
  <h3 class="display-2"><?php echo $temperature_current; ?>&deg;</h3>
  <h3> Humidity <?php echo $humidity_current; ?>%</>  </h3>
  <p class="lead"><?php echo $summary_current; ?>   </p>
  <p class="lead"> Wind Speed <?php echo $windspeed_current; ?> <abbr title="Km per hours ">KPH</abbr></p>
  <br><br>
</div>



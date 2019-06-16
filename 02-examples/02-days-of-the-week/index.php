<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Day's of The Week</title>
  </head>
  <body>
    <?php
      // global varriables
      $dtw = 0;

      //set time zone
      date_default_timezone_set("Europe/London");

      // output day of week as number 1-7
      $day = date("N");

      // output depending on day
      if ($day < 6) {
        // calcs days till weekend
        $dtw = 6 - $day;
        echo "<p>It's ".date("l").", ".$dtw." days till the weekend!</p>";
      } else{
          echo "<p>It's the weekend!</p>";
      }
     ?>
  </body>
</html>

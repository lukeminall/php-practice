<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>For Each Loop</title>
  </head>
  <body>
    <h1>2019 Conservative Leadership Contest</h1>
    <p>As of 18th June 2019...</p>
    <?php
      $candidates = array("Boris Johnson","Jeremy Hunt","Michael Gove","Dominic Raab","Sajid Javid","Rory Stewart");

      $number = 1;

      foreach ($candidates as $x) {
        echo "<p>".$number.". ".$x."</p>";
        $number++;
      }
     ?>
  </body>
</html>

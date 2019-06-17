<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Do While Loops</title>
  </head>
  <body>
    <?php
        $x = 1;
        do{
          echo "<p>Blog Post ".$x."</p>";
          $x++;
        }
        while($x <= 10);
     ?>
  </body>
</html>

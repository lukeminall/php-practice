<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GET &amp; Post Super Global</title>
  </head>
  <body>
    <h1>Who Would You Vote For As Next Conservative Leader:</h1>
    <form method="GET">
      <button type="submit" name="leader" value="Boris Johnson">Boris Johnson</button>
      <button type="submit" name="leader" value="Jeremy Hunt">Jeremy Hunt</button>
    </form>


    <?php
      if (isset($_GET["leader"])) {
        $choice = $_GET["leader"];
        echo "<p>You chose to vote for ".$choice.".<p>";
      }
     ?>
  </body>
</html>

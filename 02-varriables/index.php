<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>What is Your Name?</h3>

    <form method="GET">
      <input type="text" name="person" placeholder="enter your name">
      <button type="submit">Submit</button>
    </form>

    <p>
      <?php
        // note this only works if you do
        $name = $_GET['person'];

        echo "Hello there ".$name;
      ?>
    </p>
  </body>
</html>

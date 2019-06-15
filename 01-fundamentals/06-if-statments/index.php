<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ciggerettes&amp;Alcohol.com</h1>
    <form class="" method="GET">
      <label for="age">Enter Age</label>
      <input type="number" name="age">
      <button type="submit">Submit</button>
    </form>
    <p>
      <?php
      
      // NOTE: outputs an error when varriable is empty.
      $age = $_GET['age'];

      if ($age >= 18) {
        echo "You can buy alcohol &amp; all that good stuff";
      } else{
        echo "Come back when your 18 kid";
      }
     ?>
   </p>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Defined Functions</title>
  </head>
  <body>

    <h1>VAT Calculator:</h1>
    <form method="GET">
      <label for="cost">Item Before Tax:</label>
      <input type="text" name="cost" value="0.00">
      <button type="submit" name="submit">Submit</button>
    </form>

    <?php
      // calc VAT
      function calcVAT($cost){
        $VAT = $cost * 0.20;
        // round to 2 decimal places with "," every 3 pos num i.e 1,000.00
        return number_format($VAT,2,".",",");
      }

      // calc total cost
      function calcTotal($cost){
        $VAT = calcVAT($cost);// local varriable
        $total = $cost + $VAT;
        // round to 2 decimal places with "," every 3 pos num i.e 1,000.00
        return number_format($total,2,".",",");
      }

      if (isset($_GET['submit'])) {
        // input
        $cost = $_GET["cost"];

        // output
        echo "<p>The cost of VAT would be £".calcVAT($cost)."</p>";
        echo "<p>The Total cost would be £".calcTotal($cost)."</p>";
      }
     ?>

  </body>
</html>

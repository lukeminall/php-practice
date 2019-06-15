<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple Calculator</title>
    <style media="screen">
      fieldset{ border:none;}
      label{margin-left: 1vw;}
    </style>
  </head>
  <body>
    <h1>Simple Calculator</h1>
    <p>Ever wanted to: add, subtract, divide &amp; multiply numbers? Your in look!</p>
    <form method="GET">
      <fieldset>
        <input type="number" name="num1" placeholder="Enter Number">
        <select name="operator">
          <option value="none">None</option>
          <option value="add">Add</option>
          <option value="subtract">Subtract</option>
          <option value="multiply">Multiply</option>
          <option value="divide">Divide</option>
        </select>
        <input type="number" name="num2" placeholder="Enter Number">
      </fieldset>
      <fieldset>
        <button type="submit" name="submit">Submit</button>
        <label>
          <?php

            //calculation
            if(isset($_GET['submit'])){

              //inputs
              $num1 = $_GET['num1'];
              $num2 = $_GET['num2'];
              $operator = $_GET['operator'];

              // output varriable
              $output;

              switch ($operator) {
                case 'none':
                  $output = 0;
                  break;
                case 'add':
                  $output = $num1 + $num2;
                  break;
                case 'subtract':
                  $output = $num1 - $num2;
                  break;
                case 'multiply':
                  $output = $num1 * $num2;
                  break;
                case 'divide':
                  $output = $num1 / $num2;
                  break;
                default:
                  $output = 0;
                  break;
              }

              //output
              echo $output;
            }
           ?>
        </label>
      </fieldset>
    </form>
  </body>
</html>

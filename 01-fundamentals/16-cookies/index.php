<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cookies Example</title>
  </head>
  <body>
    <?php
      setcookie("browsers",$_SERVER['HTTP_USER_AGENT'],time()+86400000);

      echo $_COOKIE['browsers'];
     ?>
  </body>
</html>

<?php
  include("header.php");
?>
    <main>
      <section>
        <?php
          if (!isset($_SESSION["name"])) {
            echo "<p><strong>Please enter your name on home page.</strong></p>";
          } else{
            echo "<h1>Welcome to your profile ".$_SESSION["name"];
          }
         ?>
      </section>
    </main>
  </body>
</html>

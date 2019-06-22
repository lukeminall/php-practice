<?php
  include("header.php");
 ?>
    <main>
      <section>
        <?php
          if (!isset($_SESSION["name"])) {
            echo "<p><strong>Please enter your name on home page.</strong></p>";
          } else{
            echo "<h1>Welcome to the website ".$_SESSION["name"];
          }
         ?>

         <?php
            // origional idea was to get name from input form, can't see how to
            // store it $_GET value across pages without db .. maybe revisit later
            $username = "Bob";
            $_SESSION["name"] = $username;
          ?>
      </section>
    </main>
  </body>
</html>

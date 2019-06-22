<?php
  include("header.php");
 ?>
   <main>
     <section>
       <?php
         if (!isset($_SESSION["name"])) {
           echo "<p><strong>Please enter your name on home page.</strong></p>";
         } else{
           echo "<h1>Please feel free to contact us ".$_SESSION["name"];
         }
        ?>
     </section>
   </main>
  </body>
</html>

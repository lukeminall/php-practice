<!-- include functions.php -->
<?php
  include "functions.php"
 ?>

<!-- include header and nav -->
<?php
  include "header.php";
 ?>
    <main>
      <article class="main-content">
        <p>Nisi et quis incididunt eu adipisicing officia nulla excepteur eiusmod duis elit ea voluptate ullamco. Cillum amet consequat exercitation mollit eiusmod nulla exercitation ex voluptate. Do veniam Lorem laborum enim excepteur minim cupidatat commodo laboris. Irure proident dolore incididunt velit officia fugiat sit aliquip. Dolor laborum tempor adipisicing ex quis esse commodo ipsum laboris aliquip tempor. Culpa in adipisicing voluptate ea occaecat consequat voluptate ex sint anim.</p>
        <p>Quis officia deserunt reprehenderit est sit veniam pariatur velit incididunt irure qui anim laboris sunt esse id aliqua. Excepteur dolore ex adipisicing dolore laborum cupidatat cupidatat qui in ut tempor veniam ad velit labore. Magna laboris pariatur exercitation commodo reprehenderit duis dolore sint nostrud veniam nulla sunt do id dolor cillum. Do id exercitation ipsum aute fugiat dolore ea consectetur. Irure sit voluptate nulla cupidatat et ullamco reprehenderit nulla incididunt id magna et sunt commodo exercitation non adipisicing. Lorem ea aliquip enim quis veniam anim amet pariatur in magna sint aute consectetur.</p>
        <p>Aliqua magna in officia deserunt officia pariatur anim. Exercitation sunt aliqua dolor consectetur eiusmod pariatur dolore cupidatat dolor. Et nulla occaecat eu esse dolor esse amet eiusmod ea fugiat eiusmod dolor nisi eiusmod mollit. Deserunt sunt do ex proident cupidatat est irure quis commodo duis voluptate qui fugiat esse mollit reprehenderit aute. Elit veniam proident consequat laboris incididunt ex et. Quis sunt consectetur incididunt cillum aute labore occaecat exercitation occaecat nulla aute aliqua exercitation voluptate.</p>
        <p>Occaecat sit ut ipsum esse fugiat labore enim dolore consequat amet. Ipsum cupidatat anim incididunt est commodo cillum cillum fugiat est incididunt irure dolore non dolor fugiat voluptate. Aliqua cupidatat consequat nisi minim dolor nostrud eu aliquip occaecat in nulla. Sint aliquip deserunt mollit duis dolor id excepteur laborum commodo nostrud nisi elit qui ad.</p>
      </article>
      <div class="functions-test">
        <h1>Calculator Starts</h1>
        <form method="GET">
          <label for="cost">Item Before Tax:</label>
          <input type="text" name="cost" value="0.00">
          <button type="submit" name="submit">Submit</button>
        </form>

        <?php
          if (isset($_GET['submit'])) {
            // input
            $cost = $_GET["cost"];

            // output
            echo "<p>The cost of VAT would be £".calcVAT($cost)."</p>";
            echo "<p>The Total cost would be £".calcTotal($cost)."</p>";
          }
         ?>

        <h1>Calculator Ends</h1>
      </div>
      <aside class="sidebar">
        <p>Nisi et quis incididunt eu adipisicing officia nulla excepteur eiusmod duis elit ea voluptate ullamco. Cillum amet consequat exercitation mollit eiusmod nulla exercitation ex voluptate. Do veniam Lorem laborum enim excepteur minim cupidatat commodo laboris. Irure proident dolore incididunt velit officia fugiat sit aliquip. Dolor laborum tempor adipisicing ex quis esse commodo ipsum laboris aliquip tempor. Culpa in adipisicing voluptate ea occaecat consequat voluptate ex sint anim.</p>
        <p>Quis officia deserunt reprehenderit est sit veniam pariatur velit incididunt irure qui anim laboris sunt esse id aliqua. Excepteur dolore ex adipisicing dolore laborum cupidatat cupidatat qui in ut tempor veniam ad velit labore. Magna laboris pariatur exercitation commodo reprehenderit duis dolore sint nostrud veniam nulla sunt do id dolor cillum. Do id exercitation ipsum aute fugiat dolore ea consectetur. Irure sit voluptate nulla cupidatat et ullamco reprehenderit nulla incididunt id magna et sunt commodo exercitation non adipisicing. Lorem ea aliquip enim quis veniam anim amet pariatur in magna sint aute consectetur.</p>
        <p>Aliqua magna in officia deserunt officia pariatur anim. Exercitation sunt aliqua dolor consectetur eiusmod pariatur dolore cupidatat dolor. Et nulla occaecat eu esse dolor esse amet eiusmod ea fugiat eiusmod dolor nisi eiusmod mollit. Deserunt sunt do ex proident cupidatat est irure quis commodo duis voluptate qui fugiat esse mollit reprehenderit aute. Elit veniam proident consequat laboris incididunt ex et. Quis sunt consectetur incididunt cillum aute labore occaecat exercitation occaecat nulla aute aliqua exercitation voluptate.</p>
        <p>Occaecat sit ut ipsum esse fugiat labore enim dolore consequat amet. Ipsum cupidatat anim incididunt est commodo cillum cillum fugiat est incididunt irure dolore non dolor fugiat voluptate. Aliqua cupidatat consequat nisi minim dolor nostrud eu aliquip occaecat in nulla. Sint aliquip deserunt mollit duis dolor id excepteur laborum commodo nostrud nisi elit qui ad.</p>
      </aside>

    </main>

<!-- include footer.php -->
<?php
  include "footer.php";
 ?>

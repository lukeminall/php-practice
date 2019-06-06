<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Panagrams</h1>

    <h3>What is a Pangram?</h3>
    <p>A pangram sentence is a sentence using every letter of a given alphabet at least once. An example of this is "The quick brown fox jumped over the lazy dog"</p>

    <h3>Choose a Pangram:</h3>
    <form method="GET">
      <button type="submit" name="pana" value="1">1</button>
      <button type="submit" name="pana" value="2">2</button>
      <button type="submit" name="pana" value="3">3</button>
      <button type="submit" name="pana" value="4">4</button>
      <button type="submit" name="pana" value="5">5</button>
      <button type="submit" name="pana" value="6">6</button>
    </form>

    <p>
      <?php
        // get the button value
        $pana = $_GET['pana'];

        // print corosponding pangram
        //NOTE: There will be an error if no button is clicked
        switch ($pana) {
          case '1':
            echo "Jived fox nymph grabs quick waltz.";
            break;
          case '2':
            echo "Glib jocks quiz nymph to vex dwarf.";
            break;
          case '3':
            echo "Sphinx of black quartz, judge my vow.";
            break;
          case '4':
            echo "How vexingly quick daft zebras jump!";
            break;
          case '5':
            echo "The five boxing wizards jump quickly.";
            break;
          case '6':
            echo "Pack my box with five dozen liquor jugs.";
            break;
          default:
            echo "please choose from 1-6";
            break;
        }
       ?>
    </p>

  </body>
</html>

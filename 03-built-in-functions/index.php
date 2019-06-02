<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Panagrams</h1>
    <h3>What is a Panagram</h3>
    <p>A pangram sentence is a sentence using every letter of a given alphabet at least once. An example of this is "The quick brown fox jumped over the lazy dog"</p>

    <h3>Interesting Fact:</h3>
    <p>
      <?php
        $panagram = "The quick brown fox jumps over the lazy dog";

        // finds out the position of "dog" in the panagram
        $dogPos = strpos($panagram,"dog");
        $dogPos++;

        // find the length of the panagram
        $panagramLen = strlen($panagram);
        $panagramLen++;

        // NOTE: This isn't really acurute because it counts the spaces as well but it serves it's purpose.
        echo "The dog is so lazy that it doesn't get involved till letter ".$dogPos." of ".$panagramLen." letters!";

      ?>
    </p>
  </body>
</html>

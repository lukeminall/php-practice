<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Joke Generator:</h1>
    <p>Choose a number between 1 &dash; 5</p>
    <form method="GET">
        <input type="text" name="pos">
        <button type="submit">Submit</button>
    </form>

    <p>
      <?php
        // array of jokes.
        //Source: https://www.telegraph.co.uk/christmas/0/revealed-50-worst-christmas-cracker-jokes-ever/
        $jokes = array("Who hides in a bakery at Christmas? A mince spy",
                       "What do you get if you cross Santa with a duck? A Christmas quacker",
                       "What's a horse's favourite TV show? Neigh-bours",
                       "What do you call a boomerang that doesn't come back? A stick",
                       "Why do birds fly south in the winter? It's too far to walk");

        // get number from input
        // NOTE: if input is blank, error will be returned.
        $position = $_GET['pos'];

        if ($position <= 5) {
          echo $jokes[$position-1];
        } else{
          echo "Please enter a number between 1 &dash; 5";
        }
       ?>
    </p>

  </body>
</html>

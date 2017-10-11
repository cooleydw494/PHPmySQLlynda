<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Defining Functions</title>
  </head>
  <body>

    <?php
    function say_hello() {
      echo "Hello VVorld";
    }

    say_hello();
    echo "<br />";

    function say_hello_to($word) {
      echo "Hello {$word}!<br />";
    }

    say_hello_to("Ladies");

    say_hello_loudly("GENTLEMEN");

    function say_hello_loudly($word) {
      echo "HELLO {$word}!<br />";
    }
     ?>

  </body>
</html>

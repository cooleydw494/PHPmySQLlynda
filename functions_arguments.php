<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Functions: Arguments</title>
  </head>
  <body>

    <?php

    function say_hello_to($word) {
      echo "Hello {$word}!<br />";
    }

    $name = "John Doe";
    say_hello_to($name);

     ?>

     <?php
     function better_hello($greeting, $target, $punct) {
       echo "{$greeting} {$target}{$punct}<br />";
     }

     better_hello("Hola", "Lola", "!!!");
     better_hello("Greetings,", "Johnboy", ".");
      ?>

  </body>
</html>

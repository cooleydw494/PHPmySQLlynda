<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Functions: Return Values</title>
  </head>
  <body>

    <?php
    function add($val1, $val2) {
      return $val1 + $val2;
    }

    $result = add(3, 4);
    echo $result . "<br />";

    $result2 = add($result, 5);

    echo $result2;
     ?>
     <br />

     <?php

     function chinese_zodiac($year) {
       switch (($year - 4) % 12) {
         case 0: return "Rat";
         case 1: return "Ox";
         case 2: return "Tiger";
         case 3: return "Rabbit";
         case 4: return "Dragon";
         case 5: return "Snake";
         case 6: return "Horse";
         case 7: return "Goat";
         case 8: return "Monkey";
         case 9: return "Rooster";
         case 10: return "Dog";
         case 11: return "Pig";
         default: echo "the fabric of the universe has been torn asunder"; exit;
       }
     }

     echo "I was born in the year of the " . chinese_zodiac(1992) . "<br />";

      ?>
      <br />

      <?php
      function better_hello($greeting, $target, $punct) {
        return "{$greeting} {$target}{$punct}<br />";
      }

      echo better_hello("Howdy", "Billybob", "!");
       ?>

  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Functions: Multiple Returns</title>
  </head>
  <body>

    <?php

    function add_subt($val1, $val2) {
      $add = $val1 + $val2;
      $subt = $val1 - $val2;
      return [$add, $subt];
    }

    $result = add_subt(10, 5);
    echo "Add: {$result[0]}<br />";
    echo "Subtract: {$result[1]}<br />";

    echo "<br />";

    list($add_result, $subt_result) = add_subt(20, 7);
    echo "Add: {$add_result}<br />";
    echo "Subtract: {$subt_result}<br />";

     ?>

  </body>
</html>

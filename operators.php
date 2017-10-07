<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Comparison and Logical Operators</title>
  </head>
  <body>

    <?php
    $a = 4;
    $b = 3;
    $c = 20;
    $d = 1;
    if (($a > $b) && ($c > $d)) {
      echo "a is larger than b AND ";
      echo "c is larger than d<br />";
    }
    else {
      echo "nope<br />";
    }


    $c = 1;
    $d = 20;
    if (($a > $b) || ($c > $d)) {
      echo "a is larger than b OR ";
      echo "c is larger than d";
    }
    else {
      echo "nope";
    }
     ?>
     <br />

     <?php
     $e = 100;
     if (!isset($e)) { //set default value if not set
       $e = 200;
     }
     echo $e;
      ?>
      <br />

      <?php
      //don't reject 0 or 0.0
      $quantity = 0;
      if (empty($quantity) && !is_numeric($quantity)) {
        echo "You must enter a quantity!";
      }
      else {
        echo "Thanks for the quantity!";
      }
       ?>

  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>If Statements</title>
  </head>
  <body>

    <?php
    $a = 4;
    $b = 5;

    if ($a > $b) {
      echo "$a(a) is larger than $b(b)";
    }
    else if ($a < $b) {
      echo "$a(a) is smaller than $b(b)";
    }
    else {
      echo "$a(a) is equal to $b(b)";
    }
     ?>
     <br />

     <?php //only welcome new users
     $new_user = true;
     if ($new_user) {
       echo "<h1>Welcome New User!</h1>";
       echo "<p>We are glad you decided to join us.</p>";
     }
     ?>
     <br />

     <?php //don't divide by zero
     $numerator = 20;
     $denominator = 4; //if its zero the result will be zero
     $result = 0;
     if ($denominator > 0) {
       $result = $numerator / $denominator;
     }
     echo "Result: {$result}";
     ?>
     <br />




  </body>
</html>

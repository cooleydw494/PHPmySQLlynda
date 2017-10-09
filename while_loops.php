<!DOCTYPE html>
<html lang="en">
  <head>
    <title>While Loops</title>
  </head>
  <body>

    <?php
    $count = 0;
    while ($count <= 10) {
      if ($count == 5) {
        echo "FIVE" . ", ";
      }
      else {
        echo $count . (($count == 10) ? "" : ", ");
      }
      $count++;
    }
    echo "<br />";
    echo "Count: {$count}";
     ?>
     <br />

     <?php
     $count = 0;
     while ($count <= 10) {
       if ($count % 2 == 0) {
         echo $count . (($count == 10) ? "" : ", ");
       }
       $count++;
     }
      ?>

  </body>
</html>

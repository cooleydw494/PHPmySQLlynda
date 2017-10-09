<!DOCTYPE html>
<html lang="en">
  <head>
    <title>For Loops</title>
  </head>
  <body>

    <?php
    $count = 0;
    while ($count <= 10) {
      echo $count . (($count == 10) ? "" : ", ");
      $count++;
    }
     ?>
     <br />

     <?php
     for ($count = 0; $count <= 10; $count++) {
       echo $count . (($count == 10) ? "" : ", ");
     }
      ?>
      <br />

      <?php
      for ($count = 1; $count < 20; $count++) {
        if ($count % 2 == 0) {
          echo "{$count} is even.<br />";
        }
        else {
          echo "{$count} is odd.<br />";
        }
      }
       ?>
       <br />

       <?php
        for ($count = 20; $count > 0; $count--) {
          if ($count % 2 == 0) {
            echo "{$count} is even.<br />";
          }
          else {
            echo "{$count} is odd.<br />";
          }
        }
        ?>

  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Break</title>
  </head>
  <body>

    <?php
    for ($count = 0; $count <= 10; $count++) {
      if ($count == 5) {
        //continue;
        break;
      }
      echo $count . (($count == 10) ? "" : ", ");
    }
     ?>
     <br />

     <?php
     for ($i = 1; $i <= 5; $i++) {
       if ($i % 2 == 0) { continue(1); }
       for ($k = 1; $k <= 5; $k++) {
         if ($k == 3) { break(2); }
         echo $i . "-" . $k . "<br />";
       }
     }
      ?>

  </body>
</html>

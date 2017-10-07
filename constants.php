<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CONSTANTS</title>
  </head>
  <body>

    <?php
    $max_width = 980;

    define("MAX_WIDTH", 980);

    echo MAX_WIDTH;
    ?>
    <br />

    <?php
    //cant change the value
    //MAX_WIDTH += 1;
    //echo MAX_WIDTH;

    //can't redefine either
    define("MAX_WIDTH", 981);
    echo MAX_WIDTH;
     ?>

  </body>
</html>

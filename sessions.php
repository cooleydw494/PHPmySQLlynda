<?php
//sessions use cookies which use headers
//must start before any HTML output
//unless output buffering is turned on
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sessions</title>
  </head>
  <body>

    <?php
    $_SESSION['first_name'] = "David";
    $name = $_SESSION['first_name'];
    echo $name;
     ?>

  </body>
</html>

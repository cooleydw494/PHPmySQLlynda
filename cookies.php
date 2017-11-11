<?php
//setting cookies must be done before any HTML is output
//unless output buffering is turned on
$name = "test";
$value = "hello";
$expire = time() + (60*60*24*7); //add one week in seconds
//setcookie($name, $value, $expire); //set the cookie
//setcookie($name, null, $expire); //unset 1
//setcookie($name, null); //unset 2
setcookie($name, null, time() - 3600); //unset 3
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cookies</title>
  </head>
  <body>

    <?php
    $test = isset($_COOKIE['test']) ? $_COOKIE['test'] : "";
    echo $test;
     ?>

  </body>
</html>

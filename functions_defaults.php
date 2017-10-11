<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Functions: Default Argument Values</title>
  </head>
  <body>

    <?php

    function paint($room = "office", $color = "default green") {
      return "The color of the {$room} is {$color}.<br />";
    }

    echo paint("bedroom", "blue");
    echo '<br />';
    echo paint();
    echo '<br />';
    echo paint("bedroom", null); //default does not replace null values
    echo '<br />';
    echo paint("bedroom");

     ?>

  </body>
</html>

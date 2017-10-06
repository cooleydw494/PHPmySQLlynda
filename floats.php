<!DOCTYPE html>
<html>
  <head>
    <title>Floats</title>
  </head>
  <body>

    <?php

    echo $float = 3.14; echo "<br />";
    echo $float + 7; echo "<br />";
    echo 4/3; echo "<br /><br />";

    ?>

    Round: <?php echo round($float, 1); ?><br />
    Ceiling: <?php echo ceil($float); ?><br />
    Floor: <?php echo floor($float); ?><br />
    <br />

    <?php $integer = 3; ?>

    <?php echo "Is {$integer} integer? " . (is_int($integer) ? "yes" : "no"); ?><br />
    <?php echo "Is {$float} integer? " . (is_int($float) ? "yes" : "no"); ?><br />
    <br />

    <?php echo "Is {$integer} float? " . (is_float($integer) ? "yes" : "no"); ?><br />
    <?php echo "Is {$float} float? " . (is_float($float) ? "yes" : "no"); ?><br />
    <br />

    <?php echo "Is {$integer} numeric? " . (is_numeric($integer) ? "yes" : "no"); ?><br />
    <?php echo "Is {$float} numeric? " . (is_numeric($float) ? "yes" : "no"); ?><br />
    <br />

  </body>
</html>

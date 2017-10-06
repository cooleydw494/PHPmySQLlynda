<!DOCTYPE html>
<html>
  <head>
    <title>Arrays</title>
  </head>
  <body>

    <?php

    $numbers = array(4,8,15,16,23,42);
    echo $numbers[1] . "<br />";

    $mixed = array(6, "fox", "dog", array("x", "y", "z"));
    echo $mixed[2] . "<br />";
    //echo $mixed[3] . "<br />";

     ?>

    <?php echo $mixed[3][1]; ?>

    <?php $mixed[2] = "cat"; ?>
    <?php $mixed[4] = "mouse"; ?>
    <?php $mixed[] = "horse"; ?>

    <pre>
    <?php echo print_r($mixed); ?><br />
   </pre>

   <?php $array = [1,2,3]; ?>

   <pre>
     <?php echo print_r($array); ?>
   </pre>

  </body>
</html>

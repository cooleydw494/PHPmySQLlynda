<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Null/Empty</title>
  </head>
  <body>

    <?php
    $var1 = null;
    $var2 = "";
     ?>

     var1 null?: <?php echo (is_null($var1) ? "yes" : "no"); ?><br />
     var2 null?: <?php echo (is_null($var2) ? "yes" : "no"); ?><br />
     var3 null?: <?php echo (is_null($var3) ? "yes" : "no"); ?><br />
     <br />

     var1 set?: <?php echo (isset($var1) ? "yes" : "no"); ?><br />
     var2 set?: <?php echo (isset($var2) ? "yes" : "no"); ?><br />
     var3 set?: <?php echo (isset($var3) ? "yes" : "no"); ?><br />
     <br />

     <?php //empty: "", null, 0, 0.0, "0", false, array() ?>

     <?php $var3 = 0; ?>
     var1 empty?: <?php echo (empty($var1) ? "yes" : "no"); ?><br />
     var2 empty?: <?php echo (empty($var2) ? "yes" : "no"); ?><br />
     var3 empty?: <?php echo (empty($var3) ? "yes" : "no"); ?><br />
     <br />

  </body>
</html>

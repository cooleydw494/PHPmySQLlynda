<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Associative Arrays</title>
  </head>
  <body>

    <?php $assoc = array("first_name" => "David", "last_name" => "Cooley"); ?>

    <?php echo $assoc["first_name"]; ?><br />

    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php $assoc["first_name"] = "Larry"; ?>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php //echo $assoc[0]; ?>

    <?php $numbers = array(4,8,15,16,23,42); ?>
    <?php $numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42); ?>
    <?php echo $numbers[0]; ?>

  </body>
</html>

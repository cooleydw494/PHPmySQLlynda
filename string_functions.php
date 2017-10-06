<!DOCTYPE html>
<html>
  <head>
    <title>String Functions</title>
  </head>
  <body>
    <?php

    $first = "the quick brown fox";
    $second = " jumped over the lazy dog.";

    $third = $first;
    $third .= $second;

    echo $third;

     ?>

     <br />
     Lowercase: <?php echo strtolower($third); ?><br />
     Uppercase: <?php echo strtoupper($third); ?><br />
     Uppercase first: <?php echo ucfirst($third) ?><br />
     Uppercase words: <?php echo ucwords($first) ?><br />
     <br />
     Length: <?php echo strlen($third); ?><br />
     Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br />
     Find: <?php echo strstr($third, "brown"); ?><br />
     Replace by string: <?php echo str_replace("quick", "SUPERFAST", $third); ?><br />
     <br />
     Repeat (twice): <?php echo str_repeat($third, 2); ?><br />
     Make substring (5, 10): <?php echo substr($third, 5, 10); ?><br />
     Find position (of 'brown'): <?php echo strpos($third, "brown"); ?><br />
     Find character: <?php echo strchr($third, "z"); ?><br />

  </body>
</html>

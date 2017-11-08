<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Validations</title>
  </head>
  <body>

    <?php
    // * presence
    $value = "x";
    if (!isset($value) || empty($value)) {
      echo "Presence Validation Failed.<br />";
    }
    // * string length
    // // min
    $value = "abcd";
    $min = 3;
    if (strlen($value) < $min) {
      echo "Min String Length Validation Failed<br />";
    }
    // // max
    $max = 6;
    if (strlen($value) > $max) {
      echo "Max String Length Validation Failed<br />";
    }
    // * type
    $value = "1";
    if (!is_string($value)) {
      echo "Type String Validation Failed<br />";
    }
    // * inclusion in a set
    $value = "3";
    $set = ["1", "2", "3", "4"];
    if (!in_array($value, $set)) {
      echo "Included in Set Validation Failed<br />";
    }

    // * uniqueness
      //uses a database to check uniqueness

    // * format
    // // use a regex on a string
    // // preg_match($regex, $subject)
    if (preg_match("/PHP/", "PHP is fun.")) {
      echo "A match was found<br />";
    } else {
      echo "A match was not found<br />";
    }

    //check that the value has an @
    $value = "nobody@nowhere.com";
    if (!preg_match("/@/", $value)) {
      echo "Regex Validation Failed.<br />";
    }

    //alternative check that the value has an @
    if (strpos($value, "@") === false) {
      echo "String Position Validation Failed.<br />";
    }
     ?>

  </body>
</html>

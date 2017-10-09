<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Foreach Loops</title>
  </head>
  <body>

    <?php
      $ages = [4,5,6,12,23,34,45,56,45,56,67,78,89,90,10];
      foreach ($ages as $age) {
        echo "Age: {$age}<br />";
      }
     ?>
     <br />

     <?php
      $person = [
        "first_name" => "David",
        "last_name" => "Cooley",
        "address" => "123 Main Street",
        "city" => "Beverly Hills",
        "state" => "CA",
        "zip_code" => "90210"
      ];
      foreach ($person as $key => $value) {
        $key_nice = ucwords(str_replace("_", " ", $key));
        echo "{$key_nice}: {$value}<br />";
      }
      ?>
      <br />

      <?php
      $prices = array("Brand New Computer" => 2000,
                      "1 month of Lynda.com" => 25,
                      "Learning PHP" => null);

      foreach ($prices as $item => $price) {
        echo "{$item}: ";
        if (is_int($price)) {
          echo "$" . "{$price}<br />";
        }
        else {
          echo "priceless<br />";
        }
      }
       ?>

  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form Processing</title>
  </head>
  <body>

    <pre>
      <?php
      print_r($_POST);
       ?>
    </pre>
    <br />
    <?php
    if (isset($_POST['username'])) {
      $username = $_POST['username'];
    }
    else {
      $username = "default username";
    }
    if (isset($_POST['password'])) {
      $password = $_POST['password'];
    }
    else {
      $password = "default password";
    }

    echo "{$username}: {$password}";
     ?>
     <br />

     <?php
     //same thing with ternary operator
     $username = isset($_POST['username']) ? $_POST['username'] : "default username";
     $password = isset($_POST['password']) ? $_POST['password'] : "default password";

     echo "{$username}: {$password}";
      ?>
      <br />

      <?php
      //detecting form submission
      if (isset($_POST['submit'])) {
        echo "form was submitted";
      }
       ?>

  </body>
</html>

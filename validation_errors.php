<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Validation Errors</title>
  </head>
  <body>
    <?php
    require_once('validation_functions.php');
    $errors = [];
    $username = trim("");

    if (!has_presence($username)) {
      $errors['username'] = "username can't be blank";
    }
    ?>
    <?php
    echo form_errors($errors);
     ?>

  </body>
</html>

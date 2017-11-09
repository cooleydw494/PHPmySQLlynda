<?php
require_once('included_functions.php');
require_once('validation_functions.php');

$errors = [];
$message = "";

if (isset($_POST['submit'])) {
  //form was submitted
  $username = $_POST['username'];
  $password = $_POST['password'];

  //validate
  $fields_required = ['username', 'password'];
  foreach($fields_required as $field) {
    $value = trim($_POST[$field]);
    if (!has_presence($value)) {
      $errors[$field] = ucfirst($field) . " can't be blank";
    }
  }

  $fields_with_max_lengths = ['username' => 30, 'password' => 8];
  validate_max_lengths($fields_with_max_lengths);

  //if no errors, log in
  if (empty($errors)) {
    if($username == "david" && $password == "secret") {
      redirect_to('new.php');
    }
    else {
      $message = "There were some errors";
    }
  }
}
else {
  $username = "";
  $message = "Please log in.";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form Single</title>
  </head>
  <body>
    <?php echo $message; ?><br />
    <?php echo form_errors($errors); ?> <br />
    <form action="form_with_validation.php" method="post">
      Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br />
      Password: <input type="password" name="password" value="" /><br />
      <br />
      <input type="submit" name="submit" value="Submit" />
    </form>

  </body>
</html>

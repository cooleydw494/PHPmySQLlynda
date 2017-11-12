<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "widget_cms";
  $dbpass = "secret";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno())
  {
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
  }
 ?>
 <?php
 // Often these are form values in $_POST
 $menu_name = "Today's Widget Trivia";
 $position = (int) 4;
 $visible = (int) 1;
 // Escape any strings
 $menu_name = mysqli_real_escape_string($connection, $menu_name);
 // 2. Perform database query
 $query = "INSERT INTO subjects (menu_name, position, visible) ";
 $query .= "VALUES ('{$menu_name}', {$position}, {$visible})";
 $result = mysqli_query($connection, $query);
 // Test if there was a query error
 if ($result)
 {
   //Success
   //redirect to somepage.php
   echo "Success!";
 }
 else
 {
   die("Subject creation failed. " . mysqli_error($connection));
 }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Databases | Insert</title>
  </head>
  <body>



  </body>
</html>
<?php
  // 5. Close the database connection
  mysqli_close($connection);
 ?>

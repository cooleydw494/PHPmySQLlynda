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
 $id = 5;
 $menu_name = "Delete Me";
 $position = 4;
 $visible = 1;
 // 2. Perform database query
 $query = "UPDATE subjects SET ";
 $query .= "menu_name = '{$menu_name}', ";
 $query .= "position = {$position}, ";
 $query .= "visible = {$visible} ";
 $query .= "WHERE id = {$id}";
 $result = mysqli_query($connection, $query);
 // Test if there was a query error
 if ($result && mysqli_affected_rows($connection) == 1)
 {
   //Success, redirect usually
   echo "Success!";
 }
 else
 {
   die("Subject update failed. " . mysqli_error($connection));
 }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Databases | Update</title>
  </head>
  <body>



  </body>
</html>
<?php
  // 5. Close the database connection
  mysqli_close($connection);
 ?>

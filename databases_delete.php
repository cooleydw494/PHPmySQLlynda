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
 // 2. Perform database query
 $query = "DELETE FROM subjects ";
 $query .= "WHERE id = {$id} ";
 $query .= "LIMIT 1";
 $result = mysqli_query($connection, $query);
 // Test if there was a query error
 if ($result && mysqli_affected_rows($connection) == 1)
 {
   //Success, redirect usually
   echo "Success!";
 }
 else
 {
   die("Subject delete failed. " . mysqli_error($connection));
 }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Databases | Delete</title>
  </head>
  <body>



  </body>
</html>
<?php
  // 5. Close the database connection
  mysqli_close($connection);
 ?>

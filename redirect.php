<?php
//this is how you redirect to a new page
function redirect_to($new_location)
{
  header("Location: {$new_location}");
  exit;
}
$logged_in = $_GET['logged_in'];
if ($logged_in == "1") {
  redirect_to("new.php");
}
else {
  redirect_to("http://www.lynda.com");
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Redirect</title>
  </head>
  <body>



  </body>
</html>

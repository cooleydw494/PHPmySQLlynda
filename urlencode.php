<!DOCTYPE html>
<html lang="en">
  <head>
    <title>urlencode</title>
  </head>
  <body>

    <?php

    $page = "William Shakespeare";
    $quote = "To be or not to be";
    $link1 = "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote); //best
    $link2 = "/bio/" . urlencode($page) . "?quote=" . rawurlencode($quote); //worst

    echo $link1 . "<br />";
    echo $link2 . "<br />";

    ?>

  </body>
</html>

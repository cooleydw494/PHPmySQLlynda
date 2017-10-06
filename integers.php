<!DOCTYPE html>
<html>
  <head>
    <title>Integers</title>
  </head>
  <body>

    <?php
    $var1 = 3;
    $var2 = 4;
    ?>
    Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
    <br />

    Absolute value (of -300): <?php echo abs(0 - 300); ?><br />
    Exponential 2^8: <?php echo pow(2,8); ?><br />
    Square Root of 100: <?php echo sqrt(100); ?><br />
    Modulo(20%7): <?php echo fmod(20,7); ?><br />
    Random: <?php echo rand(); ?><br />
    Random (min=1,max=10): <?php echo rand(1,10) ?><br />
    <br />

    var = 4; <br />
    +=4 : <?php echo $var2 += 4; ?><br />
    -=4 : <?php echo $var2 -= 4; ?><br />
    *=4 : <?php echo $var2 *= 4; ?><br />
    /=4 : <?php echo $var2 /= 4; ?><br />

    <br />

    var = 4; <?php $var2 = 4; ?> <br />
    Increment(post): <?php echo $var2++; ?><br />
    Decrement(post): <?php echo $var2--; ?><br />

    var = 4; <?php $var2 = 4; ?> <br />
    Increment(pre): <?php echo ++$var2; ?><br />
    Decrement(pre): <?php echo --$var2; ?><br />

  </body>
</html>

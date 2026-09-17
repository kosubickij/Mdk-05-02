<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a = 2; 
    $b = 7;
    $c = 10;
    $d = 5;
    $rez = ($a/$c)*($b/$d)-($a*$b-$c)/($c*$d);
    ?>
    <?php echo "a = $a"; ?><br>
    <?php echo "b = $b"; ?><br>
    <?php echo "c = $c"; ?><br>
    <?php echo "d = $d"; ?><br>
    <?php echo "Результат: $rez"; ?><br>
    <?php 
    $x = 10;
    $y = 5;
    ?>
    <?php echo "x = $x"; ?><br>
    <?php echo "y = $y"; ?><br>
    <?php
    $rez = ($x + $y) / ($y+1) - ($x*$y - 12) / (34 + $x);
    echo "Результат: $rez";
    ?><br>
    <?php echo "x = $x"; ?><br>
    <?php echo "y = $y"; ?><br>
    <?php 
    $rez = (($x+1)/($x-1))**$x + (18 * $x * $y**2);
    echo "Результат: $rez";
    ?><br>
    <?php echo "x = $x"; ?><br>
    <?php echo "y = $y"; ?><br>
    <?php 
    $rez = (1 + 1/$x**2)**2 - (12*$x**2*$y);
    echo "Результат: $rez";
    ?>
</body>
</html>
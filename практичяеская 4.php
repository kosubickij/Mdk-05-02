<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "задание 1 <br>";
    $startnumber = 2;
    echo "startnumber = 2 <br>";
    $multiplier = 5;
    echo "multiplier = **2 <br>";
    $quantity = 0;
    echo "quantity = 5 <br>";
    while($multiplier != 0) {
        $quantity = $startnumber ** (5 - $multiplier + 1);
        echo "$quantity ";
        $multiplier -= 1;
    }
    ?>
    <br>
    <?php
    echo "задание 2 <br>";
    $sum = 0;
    $lastnumber = 10;
    echo "lastnumder = 10 <br>";
    for ($i = 0; $i <= $lastnumber; $i++) {
        $sum += $i + 1;
    }
    echo "$sum ";
    ?>
    <br>
    <?php
    echo "задание 3 <br>";
    $ln = 100;
    echo "ln = 100 <br>";
    $multiplicatipnresult = 0;
    for ($j = 0; $j <= $ln; $j +=2) {
        $multiplicatipnresult += $j;
    }
    echo "$j";
    ?>
    <br>
    <?php
    echo "задание 4 <br>";
    $dist = 10000;
    echo "dist = 10000 (10 km) <br>";
    $day = 10;
    echo "day = 10 <br>";
    for ($k = 0; $k <= $day; $k++) {
        $dist = $dist * 1.1;
        echo "$dist ";
    }
    ?>
    <br>
    <?php
    echo "задание 5 <br>";
    $lapi = 64;
    $gus = $lapi / 2;
    while ($gus >= 0) {
        $gusi = $gus;
        $zaits = (32-$gus) / 2;
        echo "гусей = $gusi, кролей = $zaits <br>";
        $gus -= 2;
    }
    ?>
</body>
</html>
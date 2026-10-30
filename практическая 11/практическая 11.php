<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>задание 1</h2>
    <?php
    function circle($r) {
        return 2*3.14*$r;
    }
    $rad = circle(5);
    echo "$rad";
    ?>
    <h2>задание 2</h2>
    <?php
    function sqear($a, $b, $c) {
        $v = $a + $b + $c;
        return ((($v) / 2) * ((($v) / 2)-$a) * ((($v) / 2)-$b) * ((($v) / 2)-$c))**0.5;
    }
    echo sqear(3, 4, 5);
    ?>
    <h2>задание 3</h2>
    <?php

    ?.
</body>
</html>
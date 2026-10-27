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
    $of = [[1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]];
    foreach ($of as $ofmin) {
        foreach ($ofmin as $num) {
            echo "$num ";
        }
        echo "<br>";
    }
    ?>
    <h2>задание 2</h2>
    <?php
    $of = [[0, 1, 2, 3, 4, 5, 6, 7, 8, 9],[10, 20, 30, 40, 50, 60, 70, 80, 90]];
    foreach($of[1] as $des) {
        foreach($of[0] as $ed){
            $a = ($ed + $des)**2;
            echo "$a ";
        }
        echo "<br>";
    }
    ?>
    <h2>задание 3</h2>
    <?php
    $of = [
        [],
        [],
        [],
        []
    ]
    ?>
</body>
</html>
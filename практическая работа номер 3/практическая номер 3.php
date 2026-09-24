<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '1 задача ';
    $a = 9;
    $b = 18;
    if($a>$b){
        echo 'cумма = ' . $a + $b;
    } else {
        echo 'произведение = ' . $a*$b;
    }
    ?>
    <br>
    <?php
    echo '2 задача ';
    $x = 30;
    $y = 60;
    if($x + $y - 180 >= -90) {
        echo 'существует ';
        if($x != 90 and $y != 90 and $y + $x == 90) {
            echo 'прямоугольный';
        } else {
            echo 'не прямоугольный';
        }
    } else {
        echo 'не существует';
    }
    ?>
    <br>
    <?php
    echo '3 задача ';
    $age = 4;
    $agegroups = 0;
    if ($age < 0) {
        $agegroups = 'Котята';
    } elseif($age >= 1 and $age <= 3) {
        $agegroups = 'Молодые коты';
    } elseif($age > 3 and $age <= 7) {
        $agegroups = ' Коты средних лет';
    } else {
        $agegroups = 'Почтенные коты';
    }
    echo $agegroups;
    ?>
    <br>
    <?php
    echo '4 задача ';
    $x = 30;
    $y = 60;
    if($x + $y - 180 >= -90) {
        echo 'существует ';
    } else {
        echo 'не существует';
    }
    ?>
    <br>
    <?php
    echo '5 задача ';
    $N = 2026;
    if ($N % 4 == 0) {
        echo 'год високосный';
    } else {
        echo 'год не високосный';
    }
    ?>
    <BR>
    <?php
    echo '6 задача ';
    $a = 20000;
    $b = 30000;
    if ($a + $b > 32767) {
        echo 'ошибка';
    } else {
        echo 'все хорошо';
    }
    ?>
    <br>
    <?php
    echo '7 задача ';
    $a = 4;
    $b = 3;
    $x = 2;
    $y = 3;
    $z = 4;
    $c = $a * $b;
    if($x * $y <= $c or $y * $z <= $c or $x * $z <= $c) {
        echo 'пройдет';
    } else {
        echo 'не пройдет';
    }
    ?>
    <br>
    <?php
    echo '8 задача ';
    $data = 23;
    if ($data <= 31) {
        echo 'январь 23 число';
    } elseif ($data >31 and $data <=61) {
        echo "февраль ";
    }
    ?>
</body>
</html>
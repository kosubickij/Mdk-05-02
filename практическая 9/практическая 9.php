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
    echo "['core' => 'ядро', 'ice' => 'лед', 'human' => 'человек'] <br>";
    $of1 = ['core' => 'ядро', 'ice' => 'лед', 'human' => 'человек'];
    foreach ($of1 as $key => $value) {
        echo "$key - $value <br>";
    }
    ?>
    <h2>задание 2</h2>
    <form>
        <input name="qwe">
        <input type="submit">
    </form>
    <?php
    if(isset($_GET['qwe'])) {
        $n1 = $_GET['qwe'];
    }
    $asd = false;
    foreach($of1 as $key => $num) {
        if ($n1 == $num) {
            echo "$key - $num";
            $asd = true;
            break;
        } 
    }
    if ($asd == false) {
        echo "нет такого слова";
    }
    ?>
    <h2>задание 3</h2>
    <form>
        <input name="qwe">
        <input type="submit">
    </form>
    <?php
    if(isset($_GET['qwe'])) {
        $n2 = $_GET['qwe'];
    }
    $asd = false;
    foreach($of1 as $key => $num) {
        if ($n2 == $num) {
            echo "$key - $num";
            $asd = true;
            break;
        } 
        if ($n2 == $key) {
            echo "$num - $key";
            $asd = true;
        }
    }
    if ($asd == false) {
        echo "нет такого слова";
    }
    ?>
    <h2>задание 4</h2>
    <form>
        <input name="qwe">
        <input type="submit">
    </form>
    <?php
    if(isset($_GET['qwe'])) {
        $n = $_GET['qwe'];
    }
    $asd = false;
    foreach($of1 as $key => $num) {
        if ($n == $num) {
            echo "$key - $num";
            $asd = true;
            break;
        } 
        if ($n == $key) {
            echo "$num - $key";
            $asd = true;
        }
    }
    if ($asd == false) {
        echo "нет такого слова";
    }
    ?>
    <h2>задание 5</h2>
    <?php
    $n = "banana";
    $res = [];

    for ($i = 0; $i < strlen($n); $i++) {
        $c = $n[$i];

        if (isset($res[$c])) {
            $res[$c]++;
        } else {
            $res[$c] = 1;
        }
    }
    foreach ($res as $key => $num) {
    echo "$key => $num<br>";
    }
    ?>
    <h2>задание 7</h2>
    <?php
    $w = ['кот', 'слон', 'дом', 'мышь', 'лес', "восемь"];
    $res = [];
    foreach ($w as $wd) {
        $l = mb_strlen($wd);
        if (!isset($res[$l])) {
            $res[$l] = $wd;
        } else {
            $res[$l] .= ' ' . $wd;
        }
    }
    foreach ($res as $key => $num) {
        echo "$key => $num,  ";
    }
    ?>
</body>
</html>
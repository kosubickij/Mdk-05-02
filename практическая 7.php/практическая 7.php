<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>задание 1</h2>
    <form>
        <input name="a1">
        <input type="submit">
        <input name="b1">
        <input type="submit">
    </form>
    <?php 
    $a1 = 0;
    $b1 = 0;
    if (isset($_GET['a1'])) {
        $a1 = $_GET['a1'];
    }
    if (isset($_GET['b1'])) {
        $b1 = $_GET['b1'];
    }
    $res1 = $a1 < $b1 ? $a1 + $b1 : $a1 * $b1;
    echo "$res1";
    ?>
    <h2>задание 2</h2>
    <form>
        <input name="n1">
        <input type="submit">  
    </form>
    <?php
    $n1 = 0;
    if (isset($_GET['n1'])) {
        $n1 = $_GET['n1'];
    }
    $res2 = $n1 % 2 ? 'нечетное' : 'четное';
    echo "$res2"
    ?>
    <h2>задание 3</h2>
    <form>
        <input name="sum1">
        <input type="submit">
    </form>
    <?php
    $sum1 = 0;
    if (isset($_GET['sum1'])) {
        $sum1 = $_GET['sum1'];
    }
    $res3 = $sum1 < 1000 ? $sum1 * 0.95 : $sum1 * 0.90;
    echo "$res3"
    ?>
    <h2>задание 4</h2>
    <form>
        <input name="a2">
        <input name="b2">
        <input name="c2">
        <input type="submit">
    </form>
    <?php
    $a2 = 0;
    $b2 = 0;
    $c2 = 0;
    if (isset($_GET['a2'])) {
        $a2 = $_GET['a2'];
    }
    if (isset($_GET['b2'])) {
        $b2 = $_GET['b2'];
    }
    if (isset($_GET['c2'])) {
        $c2 = $_GET['c2'];
    }
    $res4 = ($a2 + $b2 > $c2 and $a2 + $c2 > $b2 and $b2 + $c2 > $c2) ? "существует" : 'несуществует';
    echo "$res4";
    ?>
    <h2>задание 5</h2>
    <form>
        <input name="age">
        <input type="submit">
    </form>
    <?php
    $age = 0;
    if (isset($_GET['age'])) {
        $age = $_GET['age'];
    }
    $ageGroup = ($age <= 1) ? 'Котята' : (($age <= 3) ? 'Молодые коты' : (($age <= 7) ? 'Коты средних лет' : 'Почтенные коты'));
    echo "$ageGroup";
    ?>
    <h2>задание 6</h2>
    <form>
        <input name="g1">
        <input name="g2">
        <input type="submit">
    </form>
    <?php
    $g1 = 0;
    $g2 = 0;
    if (isset($_GET['g1'])) {
        $g1 = $_GET['g1'];
    }
    if (isset($_GET['g2'])) {
        $g2 = $_GET['g2'];
    }
    $res6 = ($g1 + $g2 >= 180) ? 'не существует' : ((90 - $g1 - $g2 == 0) ? 'существует и прямоугольный' : 'существует и не прямоугольный');
    echo "$res6";
    ?>
</body>
</html>
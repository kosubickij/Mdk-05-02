<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="qwe">
    <h2>задание 1</h2>
    <form>
        <input name="num1">
        <input type="submit">
    </form>
    <?php
    if(isset($_GET['num1'])){
        $i = $_GET['num1'];
    
    
        switch($i){
            case 0:
                echo "0 = zero <br>";
                break;
            case 1:
                echo "1 = one<br>";
                break;
            case 2:
                echo "2 = two<br>";
                break;
            case 3:
                echo "3 = three<br>";
                break;
            case 4:
                echo "4 = four<br>";
                break;
            case 5:
                echo "5 = five<br>";
                break;
            case 6:
                echo "6 = six<br>";
                break;
            case 7:
                echo "7 = seven<br>";
                break;
            case 8:
                echo "8 = eight <br>";
                break;
            case 9:
                echo "9 = nine <br>";
                break;
            
            
        }
    
        $i +=  1;
    }
    ?>
    <br>
    <h2>задание 2</h2> <br>
    <form>
        <input name="num2">
        <input type="submit">
    </form>
    <?php
    if(isset($_GET['num2'])){
        $n = $_GET['num2'];
    
        switch ($n) {
            case 1:
                echo "январь: 1 - Новый год, 7 - Рождество";
                break;
            case 2:
                echo "февраль";
                break;
            case 3:
                echo "март";
                break;
            case 4:
                echo "апрель";
                break;
            case 5:
                echo "май";
                break;
            case 6:
                echo "июнь";
                break;
            case 7:
                echo "июль";
                break;
            case 8:
                echo "август";
                break;
            case 9:
                echo "сентябрь";
                break;
            case 10:
                echo "октябрь";
                break;
            case 11:
                echo "ноябрь";
                break;
            case 12:
                echo "декабрь";
                break;
        }
    } 
    ?>
    <br>
    <H2>задание 3</H2> <BR>
    <form>
        <input name="num3">
        <input type="submit">
    </form>
    <?php
    if(isset($_GET['num3'])){
        $n = (int)$_GET['num3'];
        $n **= 2;
        while (intdiv($n, 10)> 0) {
            $n = $n  % 10;
        }
        switch($n) {
            case 0:
                echo "n = 0";
                break;
            case 1:
                echo "n = 1";
                break;
            case 2:
                echo "n = 2";
                break;
            case 3:
                echo "n = 3";
                break;
            case 4:
                echo "n = 4";
                break;
            case 5:
                echo "n = 5";
                break;
            case 6:
                echo "n = 6";
                break;
            case 7:
                echo "n = 7";
                break;
            case 8:
                echo "n = 8";
                break;
            case 9:
                echo "n = 9";
                break;
        }
    }
    ?>
    <br>
    <h2>задание 4</h2> <br>
    <form>
        <input name="num4">
        <input type="submit">
    </form>
    <?php
    if(isset($_GET['num4'])){
        $n = (int)$_GET['num4'];
    
        $t = $n;
        if (intdiv($t, 10) != 1) {
           $t = intdiv($t, 10);
            switch($t) {
                case 0:
                    echo "$n = лет";
                    break;
                case 1:
                    echo "$n = год";
                    break;
                case 2:
                    echo "$n = года";
                    break;
                case 3:
                    echo "$n = года";
                    break;
                case 4:
                    echo "$n = года";
                    break;
                case 5:
                    echo "$n = лет";
                    break;
                case 6:
                    echo "$n = лет";
                    break;
                case 7:
                    echo "$n = лет";
                    break;
                case 8:
                    echo "$n = лет";
                    break;
                case 9:
                    echo "$n = лет";
                    break;
            }
        } else {
            switch($n) {
                case 11:
                    echo "$n = лет";
                    break;
                case 12:
                    echo "$n = лет";
                    break;
                case 13:
                    echo "$n = лет";
                    break;
                case 14:
                    echo "$n = лет";
                    break;
                case 15:
                    echo "$n = лет";
                    break;
                case 16:
                    echo "$n = лет";
                    break;
                case 17:
                    echo "$n = лет";
                    break;
                case 18:
                    echo "$n = лет";
                    break;
                case 19:
                    echo "$n = лет";
                    break;
            }
        }
    } 
    
    ?>
    <br>
    <h2>задание 5</h2> <br>
    <form>
        <input name="number">
        <input type="submit">
    </form>
    <?php
    if(isset($_GET['number'])){
        $n = $_GET['number'];
        switch ($n) {
            case 1:
                echo "1 кг";
                break;
            case 2:
                echo "0,000001 кг";
                break;
            case 3:
                echo "0,001 кг";
                break;
            case 4:
                echo "1000 кг";
            case 5:
                echo "100 кг";
                break;
        }
    }
    ?>
    </div>




    <div> 
    <h2>задание 1</h2>
    <form>
        <input name="num1">
        <input type="submit">
    </form>
    <?php
    $res1 = ' ';
    if(isset($_GET['num1'])){
        $i = $_GET['num1'];
        $res1 = match($i){
            '0' => "0 = zero <br>",
            '1' => "1 = one<br>",
            '2' => "2 = two<br>",
            '3' => "3 = three<br>",
            '4' => "4 = four<br>",
            '5' => "5 = five<br>",
            '6' => "6 = six<br>",
            '7' => "7 = seven<br>",
            '8' => "8 = eight <br>",
            '9' => "9 = nine <br>", 
        };
    }
    echo "$res1";
    ?>
    <br>
    <h2>задание 2</h2> <br>
    <form>
        <input name="num2">
        <input type="submit">
    </form>
    <?php
    $res2 = ' ';
    if(isset($_GET['num2'])){
        $n = (int)$_GET['num2'];
    
        $res2 = match ($n) {
            1 => "январь: 1 - Новый год, 7 - Рождество",
            2 => "февраль",
            3 => "март",
            4 => "апрель",
            5 => "май",
            6 => "июнь",
            7 => "июль",
            8 => "август",
            9 => "сентябрь",
            10 => "октябрь",
            11 => "ноябрь",
            12 => "декабрь",
        };
    } 
    echo "$res2";
    ?>
    <br>
    <H2>задание 3</H2> <BR>
    <form>
        <input name="num3">
        <input type="submit">
    </form>
    <?php
    $res3 = ' ';
    if(isset($_GET['num3'])){
        $n = (int)$_GET['num3'];
        $n **= 2;
        while (intdiv($n, 10)> 0) {
            $n = $n  % 10;
        }
        $res3 = match($n) {
                0 => "n = 0",
                1 => "n = 1",
                2 => "n = 2",
                3 => "n = 3",
                4 => "n = 4",
                5 => "n = 5",
                6 => "n = 6",
                7 => "n = 7",
                8 => "n = 8",
                9 => "n = 9",      
        };
    }
    echo "$res3"
    ?>
    <br>
    <h2>задание 4</h2> <br>
    <form>
        <input name="num4">
        <input type="submit">
    </form>
    <?php
    $res4 = ' ';
    if(isset($_GET['num4'])){
        $n = (int)$_GET['num4'];
    
        $t = $n;
        if (intdiv($t, 10) != 1) {
           $t = intdiv($t, 10);
            $res4 = match($t) {
                0 => "$n = лет",
                1 => "$n = год",
                2 => "$n = года",
                3 => "$n = года",
                4 => "$n = года",
                5 => "$n = лет",
                6 => "$n = лет",
                7 => "$n = лет",
                8 => "$n = лет",
                9 => "$n = лет",
            };
        } else {
            $res4 = match($n) {
                11 => "$n = лет",
                12 => "$n = лет",
                13 => "$n = лет",
                14 => "$n = лет",
                15 => "$n = лет",
                16 => "$n = лет",
                17 => "$n = лет",
                18 => "$n = лет",
                19 => "$n = лет",
            };
        };
    } 
    echo "$res4"
    ?>
    <br>
    <h2>задание 5</h2> <br>
    <form>
        <input name="number">
        <input type="submit">
    </form>
    <?php
    $res5 = ' ';
    if(isset($_GET['number'])){
        $n = (int)$_GET['number'];
        match($n) {
            1 => "1 кг",
            2 => "0,000001 кг",
            3 => "0,001 кг",
            4 => "1000 кг",
            5 => "100 кг",
        };
    }
    echo "$res5"
    ?>
    </div>
</body>
</html>
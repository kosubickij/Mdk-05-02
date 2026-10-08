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
        $n = $_GET['num3'];
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
        $n = $_GET['num4'];
    
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
</body>
</html>
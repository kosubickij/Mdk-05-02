<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>задание 1</h2>
    <form >
        <input name="num1">
        <input type="submit">
    </form>
    <?php
    if(isset($_GET["num1"])){
        function circle($r) {
            return 2*3.14*$r;
        }
        $rad = circle($_GET["num1"]);
        echo "$rad";
    }
    ?>
    <h2>задание 2</h2>
    <form>
        <input name="a">
        <input name="b">
        <input name="c">
        <input type="submit">
    </form>
    <?php
    function sqear($a, $b, $c) {
        $v = $a + $b + $c;
        return ((($v) / 2) * ((($v) / 2)-$a) * ((($v) / 2)-$b) * ((($v) / 2)-$c))**0.5;
    }
    if(isset($_GET["a"], $_GET["b"], $_GET["c"])){
        echo sqear($_GET["a"], $_GET["b"], $_GET["c"]);
    }
    ?>
    <h2>задание 3</h2>
    <form>
        <input name="num2">
        <input type="submit">
    </form>
    <?php
    function maxdel($a) {
        for($i = 1; $i <$a; $i++){
            if($a % $i == 0){
                $res = $i;
            }
        }
        echo "$res";
    }
    if(isset($_GET["num2"])) {
        maxdel($_GET["num2"]);
    }
    ?>
    <h2>задание 4</h2>
    <form>
        <input name="num3">
        <input type="submit">
    </form>
    <?php  
    $nums = [];
    function del($a){
        for($i = 1; $i < $a; $i++){
            if($a % $i == 0){
                $nums[] = $i;
            }
        }
    return $nums;
    }
    if(isset($_GET["num3"])) {
        $nums = del($_GET["num3"]);
        foreach ($nums as $num) {
            echo "$num ";
        }
    }
    ?>
    <h2>задание 5</h2>
    <?php
    $nums = [2, 4, 6, 3, 2, 5];
    function sumsqu($nums) {
        $t = 0;
        foreach ($nums as $num) {
            $t = $t + $num ** 2;
        }
    echo "$t";
    }
    sumsqu($nums);
    ?>
    <h2>задание 6</h2>
    <?php
    $ar = ["1", ["2", "3"], ["4", "5"], "6"];
    function convertToStringg(array $ar) {
        $strnums = '';
        foreach($ar as $underar1) {
            
            if(is_array($underar1)){
                foreach($underar1 as $underar2) {
                    $strnums .= $underar2;
                }
            } else {
                $strnums .= $underar1;
            }
        }
    echo $strnums;
    }
    convertToStringg($ar);
    ?>
    <h2>задание 7</h2>
    <?php
    $strs = ["qwe","rty","uio","p[]"];
    function sumstr($strs) {
        $strinline = '';
        foreach($strs as $str) {
            $strinline .= $str;
        }
    echo "$strinline";
    }
    sumstr($strs);
    ?>
    <h2>задание 8</h2>
    <?php
    $arr = ["934", ["1234"], ["1323", ["134"]]];
    function convertToString(array $arr) {
        $res = "";
        $count = count($arr);
        $step = 0; 
        foreach ($arr as $item) { 
            if (is_array($item)) {
                $res .= convertToString($item);
            } else {
                $res .= (string)$item;
            }
            if (++$step < $count) {
                $res .= ", ";
            }
        }
        return $res;
    }
    $rez = convertToString($arr);
    echo $rez; 
    ?>
</body>
</html>
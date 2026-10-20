<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H2>задание 1</H2>
    <?php
    $n = 0;
    $nn = 10000;
    $f = [3, 6, 12, 9, 1];
    foreach($f as $of) {
        if ($n < $of) {
            $n = $of;
        }
        if ($nn > $of) {
            $nn = $of;
        }
    }
    echo "$n = max, $nn = min"
    ?>
    <h2>задание 2</h2>
    <?php
    $pro = 1;
    $sum = null;
    $ff = [2, 4, 2];
    foreach($ff as $off) {
        $sum += $off;
        $pro *= $off;
    }
    echo "произведение $pro, сумма $sum"
    ?>
    <h2>задание 3</h2>
    <?php
    $sum = null;
    $fff = [3, 5, 7, 2, 5, 9];
    $co = count($fff);
    foreach($fff as $offf) {
        $sum += $offf;
    }
    $sr = $sum / $co;
    echo "$sr";
    ?>
    <h2>ЗАДАНИЕ 4</h2>
    <?php
    $er = [3.5, -5.2, 9.3, -3.4];
    $err = [];
    foreach($er as $re) {
        if ($re < 0) {
            $otri = $re * -1;
            $err[] = $otri;
        } else {
            $otri = $re ** 2;
            $err[] = $otri;
        }
    }
    foreach($err as $eer ) {
        echo "$eer, ";
    }
    ?>
    <h2>задание 5</h2>
    <?php
    $we = [1,2,3,4,5,6,7,8,9];
    for($i = 0;  $i <= count($we); $i += 2) {
        echo "$we[$i] = $i, ";
    }
    ?>
    <h2>задание 6</h2>
    <?php
    $qwe = [2, 5, 3, 8, 9];
    for($j = 0; $j < count($qwe)-1; $j++) {
        if ($qwe[$j] < $qwe[$j+1]) {
            $res = $qwe[$j + 1];
            echo "$res,  ";
        }
    }
    ?>
    <h2>задание 7</h2>
    <?php
    $wer = [1, 4, 6, 4, 23, 2, 6, 3];
    for($i = 0; $i < count($wer) - 1; $i++) {
        if ($wer[$i+1] == true) {
            $rezerv = $wer[$i];
            $wer[$i] = $wer[$i+1];
            $wer[$i+1] = $rezerv;
        }
    }
    foreach($wer as $wer1) {
        echo "$wer1, ";
    }
    ?>
    <h2>задание 8</h2>
    <?php
    $asd = [1,2,3,4,5,6,7,8,9,0];
    $n = count($asd);
    $l = $asd[$n - 1];
    for ($i = $n -1; $i>0; $i--) {
        $asd[$i] = $asd[$i - 1];
    }
    $asd[0] = $l;
    foreach($asd as $asd1) {
        echo "$asd1, ";
    }
    ?>
    <h2>задание 9</h2>
    <?php
    $count = 0;
    $zxc = [1, 4, 2, 5, 4, 1];
    for($i = 0; $i < count($zxc)-1; $i++) {
        for($j = 0; $j < count($zxc)-1; $j++) {
            if($zxc[$i] == $zxc[$j]) {
                $count += 1;
            }
        }
    }
    Echo "$count";
    ?>
</body>
</html>
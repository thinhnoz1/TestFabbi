<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test</title>
</head>

<body>
<?php
$n="";
$arr = array();
if (isset($_REQUEST["n"])==true) {
    $n = $_REQUEST["n"];
    if ($n > 0) {
        // Tao mang
        for ($i=0; $i < $n; $i++) { 
            array_push($arr,rand(0,99));
            echo "$i => $arr[$i] <br>";
        }
        echo "<br>";
        $n = (integer) $n;
        sort($arr);
        foreach ($arr as $i) {
            echo "$i";
            echo "<br>";
        }
        $countArr = count($arr) - 1;
        $tong = $arr[$countArr] + $arr[$countArr - 1];
        echo "Tong 2 so lon nhat la : $tong";
    }
    else {
        echo "Nhap gia tri khac 0 !!";
    }
};
?>
<form name="f1" id="f1" method="get" action="">
Nhập n: <input type="number" name="n" value="<?=$n?>"><br><br>
<input type="submit">
</form>

</body>
</html>
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
$finalArr = array();
if (isset($_REQUEST["n"])==true) {
    $n = $_REQUEST["n"];
    if ($n > 0) {
        // Tao mang
        for ($i=0; $i < ($n*3); $i++) { 
            array_push($arr,rand(0,99));
            echo "$i => $arr[$i] <br>";
        }
        echo "<br>";
        $n = (integer) $n;

        // Xu ly bai toan
        for ($i=0; $i < $n; $i++) { 
                array_push($finalArr, $arr[$i], $arr[$i + $n], $arr[$i+($n + $n)]);
        };
        foreach ($finalArr as $i) {
            echo "$i";
            echo "<br>";
        }
    }
    else {
        echo "Nhap gia tri khac 0 !!"
;    }
};
?>
<form name="f1" id="f1" method="get" action="">
Nhập n: <input type="number" name="n" value="<?=$n?>"><br><br>
<input type="submit">
</form>

</body>
</html>
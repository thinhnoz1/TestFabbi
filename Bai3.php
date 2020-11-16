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
        for ($i=0; $i < $n; $i++) { 
            array_push($arr,rand(0,99));
            echo "$i => $arr[$i] <br>";
        }
        echo "<br>";
        $n = (integer) $n;

        // Xu ly bai toan
        sort($arr);
        $khoangcach = 9999;
        for ($i=count($arr) - 1; $i > 0; $i--) { 
            // echo "$i => $arr[$i] <br>";
            if (($arr[$i] - $arr[$i - 1]) < $khoangcach){
                $khoangcach = $arr[$i] - $arr[$i - 1];
            }
        };
        echo "Khoang cach nho nhat la : $khoangcach <br>";
        for ($i=count($arr) - 1; $i > 0; $i--) { 
            // echo "$i => $arr[$i] <br>";
            if (($arr[$i] - $arr[$i - 1]) == $khoangcach){
                echo "[".$arr[$i].", ".$arr[$i - 1]."]<br>";
            }
        };
       
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
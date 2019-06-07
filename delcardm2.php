<HTML>
<HEAD>

<META HTTP-EQUIV="refresh" CONTENT="5;URL=delcardpm2.php">


<?php
//connect data
require_once("config2.php");
//input

//$money = $_GET['money']; //  เงิน
$card = $_GET['card'];  //   rf card
// seclec data
$sql = "SELECT card, money FROM money WHERE card = $card";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
$moneyin = $row["money"];
//echo "<h1>" ."   card id   =  " ;
//echo   $card   ;
//echo "<h1>". "จำนวนเงิน เติม = ";
//echo  $money ;
}
// money +
if($moneyin > 1 ) {
$moneysum =	($moneyin-$moneyin);
$sql = "UPDATE money SET money = $moneysum  WHERE card =
$card";
$sql = $conn->query($sql);
//log
$sql = "INSERT INTO del  (card, money)
VALUES ( $card , $moneyin)";
$sql = $conn->query($sql);
$sql = "INSERT INTO dellog  (card, money)
VALUES ( $card , $moneyin)";
$sql = $conn->query($sql);
echo "<h1>". "   ยอดเงินคีน  =  " ;
echo $moneyin ;
} else {
    echo "<h1>"." error ";
}
?>
<title>ตืนเงิน</title>
</HEAD>
<BODY>
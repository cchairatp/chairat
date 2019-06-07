<HTML>
<HEAD>

<META HTTP-EQUIV="refresh" CONTENT="500;URL= menu2.html">

<?php
//connect data
require_once("config2.php");
//input

$money = 50; //  เงิน
$card = $_GET['card'];  //   rf card
// seclec data
$sql = "SELECT card, money , pro FROM money WHERE card = $card";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
$moneyin = $row["money"];
$cardin = $row["card"];
$pro  = $row["pro"];
}
// money +
if($money > 1 and  $money < 101 and $cardin == $card and $pro == 0   ) {
$moneysum =	($moneyin+$money);
$sql = "UPDATE money SET money = $moneysum  WHERE card = $card";
$sql = $conn->query($sql);
//log
$sql = "INSERT INTO ins  (card, money ,pro)
VALUES ( $card , $money ,$pro )";
$sql = $conn->query($sql);
	
echo "<h1>" ."   card id   =  " ;
echo   $card   ;
echo "<h1>". "จำนวนเงิน เติม = ";
echo  $money ;
echo "<h1>". "   ยอดคงเหลือ  =  " ;
echo  $moneysum ; 
}else{
$sql = "INSERT INTO money (card, money ,pro)
 VALUES ( $card , $money ,1 )";
$sql = $conn->query($sql);
echo "<h1>"." 222222 ";
}
?>
</HEAD>
<BODY>
  
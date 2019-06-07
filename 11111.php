<meta http-equiv="refresh" content="3;URL=">
<?php

require_once('../config2.php');

// seclec data
$sql = "SELECT SUM(money) FROM postall ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้าทังหมด === ". $row['SUM(money)'];
	echo "<br />";

}
// seclec data
$sql = "SELECT SUM(money) FROM ins  ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."รวมเติมเงินปกติ====== ". $row['SUM(money)'];
	echo "<br />";

}

// seclec data
$sql = "SELECT SUM(money) FROM  del ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."รวมคืนเงิน====== ". $row['SUM(money)'];
	echo "<br />";

}
?>
<div align="center">กลับสู่หน้าหลัก</div>

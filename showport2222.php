<meta http-equiv="refresh" content="3;URL=">
<?php
require_once('../config2.php');
// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 1 "; 
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
echo "<h1>" ."เงินรวมร้านค้า 1 === ". $row['SUM(money)'];
echo "<br />";
}
// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 2 "; 
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
echo "<h1>" ."เงินรวมร้านค้า 2 === ". $row['SUM(money)'];
echo "<br />";
}
// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 3 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 3 === ". $row['SUM(money)'];
	echo "<br />";
}
// seclec data
$sql = "SELECT SUM(money) FROM postall ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้าทังหมด === ". $row['SUM(money)'];
	echo "<br />";

}
// seclec data
$sql = "SELECT SUM(money) FROM ins where pro = 0 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."รวมเติมเงินปกติ====== ". $row['SUM(money)'];
	echo "<br />";

}
// seclec data
$sql = "SELECT SUM(money) FROM ins where pro = 1";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	$a = $row["SUM(money)"];
	echo "<h1>" ."รวมเติมเงินโปร 1 ======  " .$a."รวมเติมเงินโปร 1 ======  ".$a/1.05;	
	echo "<br />";

}
// seclec data
$sql = "SELECT SUM(money) FROM ins where pro = 2";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	$a = $row["SUM(money)"];
	echo "<h1>" ."รวมเติมเงินโปร 2 ======  " .$a."รวมเติมเงินโปร 2 ======  ".$a/1.1;
		echo "<br />";
		
}
// seclec data
$sql = "SELECT SUM(money) FROM ins where pro = 3";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	$a = $row["SUM(money)"];
	echo "<h1>" ."รวมเติมเงินโปร 3 ======  " .$a."รวมเติมเงินโปร 3 ======  ".$a/1.2;
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
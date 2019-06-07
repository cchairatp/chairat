<a>จ่ายเงินร้าน1...
</a>

จ่ายเงินร้าน.....จ่ายเงินร้าน....จ่ายเงินร้าน1....<a href="p5.php">จ่ายเงินร้าน1</a>
<?php
require_once('config2.php');
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
$sql = "SELECT SUM(money) FROM postall where post = 4 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 4 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 5 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 5 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 6 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 6 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 7 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 7 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 8 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 8 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 9 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 9 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 10 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 10 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 11 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 11 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 12 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 12 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 13 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 13 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 14 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 14 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 15 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 15 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 16 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 16 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 17 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 17 === ". $row['SUM(money)'];
	echo "<br />";
}// seclec data
$sql = "SELECT SUM(money) FROM postall where post = 18 ";
$result = $conn->query($sql);
// Print out result
while($row = $result->fetch_assoc()){
	echo "<h1>" ."เงินรวมร้านค้า 18 === ". $row['SUM(money)'];
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




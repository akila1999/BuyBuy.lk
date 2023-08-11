<?php
//linking the configuration file
session_start();

$con = mysqli_connect('localhost','root','','buybuylk');

mysqli_select_db($con, 'buybuylk');

$sName = $_POST['sName'];
$sEmail = $_POST['sEmail'];
$sPassword = $_POST['sPassword'];

$s = "select * from seller where sellerName = '$sName'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "UserName Already Taken";
}else {
	$reg = "insert into seller(sellerName, sellerEmail, sellerPassword) values('$sName', '$sEmail', '$sPassword')";
	mysqli_query($con, $reg);
	echo "Seller registration Successful";
}
?>


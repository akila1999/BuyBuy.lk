<?php
//linking the configuration file
session_start();

$con = mysqli_connect('localhost','root','','buybuylk');

mysqli_select_db($con, 'buybuylk');

$bName = $_POST['bName'];
$bEmail = $_POST['bEmail'];
$bPassword = $_POST['bPassword'];

$s = "select * from buyer where buyerName = '$bName'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "UserName Already Taken";
	
}else {
	$reg = "insert into buyer(buyerName, buyerEmail, buyerPassword) values('$bName', '$bEmail', '$bPassword')";
	mysqli_query($con, $reg);
	echo "Seller registration Successful";
}
?>


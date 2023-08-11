<?php
//linking the configuration file
session_start();

$con = mysqli_connect('localhost','root','','buybuylk');


mysqli_select_db($con, 'buybuylk');


$sEmail = $_POST['sEmail'];
$sPassword = $_POST['sPassword'];

$s = "select * from seller where sellerEmail = '$sEmail' and sellerPassword = '$sPassword' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	
	header('location:Home.html');
}else{
	header('location:loginPage.html');
}
?>


<?php
//linking the configuration file
session_start();

$con = mysqli_connect('localhost','root','','buybuylk');


mysqli_select_db($con, 'buybuylk');


$bEmail = $_POST['bEmail'];
$bPassword = $_POST['bPassword'];

$s = "select * from buyer where buyerEmail = '$bEmail' and buyerPassword = '$bPassword' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	
	header('location:Home.html');
}else{
	header('location:loginPage.html');
}
?>


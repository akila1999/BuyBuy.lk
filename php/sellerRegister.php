<?php

$sever="localhost";
$username="root";
$passworde="";
$databasa="buybuylk";

$con=new mysqli($sever,$username,$passworde,$databasa);

if($con->connect_error)
{
	die("connection faile".$con->connect_error);
}


?>
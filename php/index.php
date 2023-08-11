<?php

$sever="localhost";
$username="root";
$passworde="";
$databasa="buybuylk";

$connection=new mysqli($sever,$username,$passworde,$databasa);

if($connection->connect_error)
{
	die("connection faile".$connection->connect_error);
}


?>
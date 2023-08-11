<?php

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$zip=$_POST['zip'];

$host="localhost";
$db="buybuylk";
$user="root";
$pass="";
$con = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$insert="INSERT INTO billing (fullname,email,address,city,country,zip) VALUES (?,?,?,?,?,?)";

$pre=$con->prepare($insert);
$pre->execute([$fullname,$email,$address,$city,$country,$zip]);

header("Location:dialog.html");
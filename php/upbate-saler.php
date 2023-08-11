<?php
include"sellerRegister.php";

$id=$_GET['upbate1'];
  $catogary="select * from seller where sellerID='$id'";
  
  $result=$con->query($catogary);
  
  
  $row=$result->fetch_assoc();
 

  
$con->close();



?>

<html>
<head>
<link rel="stylesheet" href="forme.css"></link>
<link rel="stylesheet" href="style/styleHome.css"></link>
</head>
<body>
<center>
<div class="forme-desing">
<form method="post"  >
<h3 class="text-desing">ID NUMBER</h3>
  <br><input type="text" name="id" value="<?php echo $row["sellerID"]; ?>"  class="input-field"><br>
  <h3 class="text-desing"> NAME</h3>
  <br><input type="text" name="sName"  value="<?php echo $row["sellerName"];; ?>"  class="input-field"><br>
 <h3 class="text-desing"> email</h3>
  <br><input type="text" name="sEmail"  value="<?php echo $row["sellerEmail"];; ?>"  class="input-field"><br>
   <h3 class="text-desing">password</h3>
     <br><input type="text" name="sellerPassword"  value="<?php echo $row["sellerPassword"];; ?>" class="input-field"><br>
 <br>
 <button type="submit" class="submit-btn" name="submit-btn" class="vbutton">update</button>  
 </div>
 </center>
</body>

</html>


<?php

include"sellerRegister.php";
 
  
  if(isset($_POST["submit-btn"]))
  {
	  $ID =$_POST["id"];
 $sellerName= $_POST["sName"];
  $sellerEmail=$_POST["sEmail"];
  $sellerPassword=$_POST["sellerPassword"];
  
  $sql1="update seller set sellerID='$ID', sellerName='$sellerName', sellerEmail='$sellerEmail', sellerPassword='$sellerPassword'  where sellerID='$id'";
  
  if($con->query($sql1))
  {
     echo "<script>alert('upbate succesfully');</script>";
	 header('location: adming.php');
  
  }
  }
  $con->close();
  ?>
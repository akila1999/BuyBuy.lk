<?php
include"feedback.php";

$id=$_GET['upbateid'];
  $catogary="select * from feedback where fID='$id'";
  
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
<h3 class="text-desing">feedback ID</h3>
  <br><input type="text" name="id" value="<?php echo $row["fID"]; ?>"  class="input-field"><br>
  <h3 class="text-desing">  sender NAME </h3>
  <br><input type="text" name="sName"  value="<?php echo $row["fName"];; ?>"  class="input-field"><br>
 <h3 class="text-desing"> email</h3>
  <br><input type="text" name="sEmail"  value="<?php echo $row["fEmail"];; ?>"  class="input-field"><br>
   <h3 class="text-desing">feedback Description</h3>
     <br><input type="text" name="sellerPassword"  value="<?php echo $row["fDescription"];; ?>" class="input-field"><br>
 <br>
 <button type="submit" class="submit-btn" name="submit-btn" class="vbutton">update</button>  
 </div>
 </center>
</body>

</html>


<?php

include"feedback.php";
 
  
  if(isset($_POST["submit-btn"]))
  {
	  $ID =$_POST["id"];
 $sellerName= $_POST["sName"];
  $sellerEmail=$_POST["sEmail"];
  $sellerPassword=$_POST["sellerPassword"];
  
  $sql1="update feedback set fID='$ID', fName='$sellerName', fEmail='$sellerEmail', fDescription='$sellerPassword'  where fID='$id' ";
  
  if($con->query($sql1))
  {
     echo "<script>alert('upbate succesfully');</script>";
	 header('location: adming.php');
  
  }
  }
  $con->close();
  ?>
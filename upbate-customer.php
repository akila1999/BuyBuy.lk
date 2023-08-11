

<html>
<head>
<link rel="stylesheet" href="forme.css"></link>
 <link rel="stylesheet" href="style/styleHome.css"></link>
</head>
<body>
              <center>
<div class="forme-desing">
<form method="post" action="upbate-customer.php" >
<h3 class="text-desing">ID NUMBER</h3>
  <br><input type="text" name="buyerID" value="$ID"  class="input-field"><br>
  <h3 class="text-desing"> NAME</h3>
  <br><input type="text" name="bName"  value="$image"  class="input-field"><br>
 <h3 class="text-desing"> email</h3>
  <br><input type="text" name="bEmail"  value="$image"  class="input-field"><br>
   <h3 class="text-desing">passworde</h3>
     <br><input type="text" name="bPassword"  value="$prices" class="input-field"><br>
 <br>
 <button type="submit" class="submit-btn" name="submit-btn" class="vbutton">upbate</button>  
 </div>
 </center>
</body>
</html>
<?php

include"register.php";
	
	
  
  $ID = $_GET["update"];
  
  if(isset($_POST["submit-btn"]))
  {
	  $ID =$_POST["buyerID"];
 $description=$_POST["bName"];
  $image=$_POST["bEmail"];
  $prices=$_POST["bPassword"];
  
  $sql1="update buyer set buyerID='$ID', buyerName='$description', buyerEmail='$image', buyerPassword='$prices'  where buyerID='$id' ";
  
  if($con->query($sql1))
  {
     echo "<script>alert('update succesfully');</script>";
  
  }
  }
  $con->close();
  ?>
<?php
 include"register.php";
 $id=$_GET["updateid"];
 $catogary="select * from buyer  where buyerID='$id'";
  
  $result=$con->query($catogary);
  
  
  $row=$result->fetch_assoc();
  
  if(isset($_POST["submit-btn"]))
  {
	  $ID =$_POST["id"];
 $description=$_POST["bName"];
  $image=$_POST["bEmail"];
  $prices=$_POST["bPassword"];
  
  $sql1="update buyer set buyerID=$ID, buyerName='$description' ,buyerEmail='$image', buyerPassword='$prices'  where buyerID='$id' ";
  
  if($con->query($sql1))
  {
     echo "<script>alert('upbate succesfully');</script>";

	header('location: adming.php');
	
  
  }
  }
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
  <br><input type="text" name="id" value="<?php echo $row['buyerID']; ?>"  class="input-field"><br>
  <h3 class="text-desing"> NAME</h3>
  <br><input type="text" name="bName"  value="<?php echo $row['buyerName']; ?>"  class="input-field"><br>
 <h3 class="text-desing"> email</h3>
  <br><input type="text" name="bEmail"  value="<?php echo $row['buyerEmail']; ?>"  class="input-field"><br>
   <h3 class="text-desing">passworde</h3>
     <br><input type="text" name="bPassword"  value="<?php echo $row['buyerPassword']; ?>" class="input-field"><br>
 <br>
 <button type="submit" class="submit-btn" name="submit-btn" class="vbutton">update</button>  
 </div>
 </center>
</body>
</html>

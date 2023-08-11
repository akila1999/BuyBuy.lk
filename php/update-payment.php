<?php
 include"register.php";
 $id=$_GET["updateid"];
 $catogary="select * from billing  where id='$id'";
  
  $result=$con->query($catogary);
  
  
  $row=$result->fetch_assoc();
  
  if(isset($_POST["submit-btn"]))
  {
	  $ID =$_POST["id"];
 $fullname=$_POST["Name"];
  $email=$_POST["Email"];
  $address=$_POST["address"];
  $city=$_POST["city"];
  $country=$_POST["country"];
  $zip=$_POST["zip"];
  
  $sql1="update billing set id=$ID, fullname='$fullname' ,	email='$email', address='$address' ,city='$city',country='$country',zip='$zip' where id='$id' ";
  
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
<h3 class="text-desing">ID </h3>
  <br><input type="text" name="id" value="<?php echo $row['id']; ?>"  class="input-field"><br>
  <h3 class="text-desing"> NAME</h3>
  <br><input type="text" name="Name"  value="<?php echo $row['fullname']; ?>"  class="input-field"><br>
 <h3 class="text-desing"> email</h3>
  <br><input type="text" name="Email"  value="<?php echo $row['email']; ?>"  class="input-field"><br>
   <h3 class="text-desing">address</h3>
     <br><input type="text" name="address"  value="<?php echo $row['address']; ?>" class="input-field"><br>
	 <h3 class="text-desing">city</h3>
     <br><input type="text" name="city"  value="<?php echo $row['city']; ?>" class="input-field"><br>
	 <h3 class="text-desing">country</h3>
     <br><input type="text" name="country"  value="<?php echo $row['country']; ?>" class="input-field"><br>
	 <h3 class="text-desing">zip</h3>
     <br><input type="text" name="zip"  value="<?php echo $row['zip']; ?>" class="input-field"><br>
	 
 <br>
 <button type="submit" class="submit-btn" name="submit-btn" class="vbutton">update</button>  
 </div>
 </center>
</body>
</html>
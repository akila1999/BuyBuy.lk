<?php

include"index.php";
$id=$_GET['upbate3'];
  $catogary="select * from product where id='$id'";
  
  $result=$connection->query($catogary);
  
  $row=$result->fetch_assoc();
  

  
  
  if(isset($_POST["submit-btn"]))
  {
	  $ID =$_POST["id"];
 $description= $_POST["description"];
  $image=$_POST["image"];
  $prices=$_POST["price"];
  
  $sql1="update product set id='$ID', description='$description' ,image='$image' ,price='$prices'  where id='$id' ";
  
  if($connection->query($sql1))
  {
     echo "<script>alert('upbate succesfully');</script>";
	 header('location: adming.php');
  
  }
  }
 
$connection->close();
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
  <br><input type="text" name="id" value="<?php echo $row["id"];?>"   class="input-field"><br>
  <h3 class="text-desing">description</h3>
 <br><textarea rows="10" cols="40" name="description" value="<?php echo $row["description"];?>" class="input-field"></textarea><br>
 <h3 class="text-desing"> image</h3>
  <br><input type="text" name="image"  value="<?php echo $row["image"];?>"  class="input-field"><br>
   <h3 class="text-desing">price</h3>
     <br><input type="text" name="price"  value="<?php echo $row["price"];?>" class="input-field"><br>
 <br>
 <button type="submit" class="submit-btn" name="submit-btn" class="vbutton">update</button>  
 </div>
 </center>
</body>
</html>


  
  
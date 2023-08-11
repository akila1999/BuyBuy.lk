<!DOCTYPE html>
<html>
<head>
<style>

.tablemod{
	border-collapse:collapse;
	margin:50px,0;
	fornt-size:10px;
	min-width:400px;
	font-family: 'Poppins', sans-serif;
	border-radius:10px 10px 0 0;
	overflow:hidden;
	box-shadox:0 0 20px rgba(0,0,0,0,20);
	width:100%;
	
}
#border
{
background-color:#1ddefd ;
text-align:left;
}

.tablemod th,
.tablemod td{
	
	padding:12px,15px;
}

 .tablemod tbody tr{
	border-bottom:1px solid black;
	text-align:left;
}
.diveplace {
    max-width: 1000px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
#buttoncolor-Delete{
	background-color:red;
}
#buttoncolor-upbate
{
		background-color:blue;
}
.text-color{
	color:#ffffff;
}
button{
	border-radius:10px 10px 0 0;
	overflow:hidden;
	box-shadox:0 0 20px rgba(0,0,0,0,20);
}
#dropupdown
{
	max-width: 200px;
    padding-left: 25px;
    padding-right: 25px;
	width:300px;
	position:fixed;
	left:0;
	top:0;
	height:100%;
	background-color:red;
}
ul#droup-list{
	list-style-type: none;
  margin: 0;
  padding: 0;
  width:199px;
  overflow: hidden;
  background-color: black;
}
li a{
	display: block;
  color: white;
  text-align: center;
  padding: 30px 30px;
  text-decoration: none;
	
}
a:hover{
	background-color:#ffffff;
	color:black;
	border-radius:10px 0 0 10px;
}
#rigthside{
	float:right;
	max-width: 200px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
	height:100%;
	width:300px;
	position:fixed;
	right:0;
	top:0;
	background-color:red;
	
	
}


</style>

</head>

<body>
<div id="dropupdown">
<ul id="droup-list">
    <li><a href="#">NEW Registertion</a></li> 
    <li><a href="#">Delete ccustomer</a></li> 
	<li><a href="#">Upbale ccustomer</a></li> 
    <li><a href="#">Home</a></li>
    <li><a href="#">Products</a></li>
    <li><a href="#">Abount</a></li>
    <li><a href="#">Contact</a></li>
   
                </ul>
</div>
<center>
<div class="diveplace">
<h4>Register Customer Details</h4>
<table  class="tablemod">
<tr id="border">
<th>ID</th>
<th>Name</th>
<th>AGE</th>
<th>CONTACT</th>
<th>good</th>
</tr>


  <?php

 include"register.php";
 
  $catogary2="select * from buyer ";
  
  $result1=$con->query($catogary2);
  
  if($result1->num_rows>0)
  {
	 while($row1=$result1->fetch_assoc())
	 {
		 $ID=$row1["buyerID"];
		echo "<tr>";
	 echo"<td>".$ID."</td>";
	 echo"<td>".$row1["buyerName"]."</td>";
	 echo"<td>".$row1["buyerEmail"]."</td>";
	 echo"<td>".$row1["buyerPassword"]."</td>";
	 echo "<td><button id='buttoncolor-Delete'><a href='delete-customer.php? deleteid1=".$ID."' class='text-color'>Delete</a></button>
<button id='buttoncolor-upbate'><a href='upbate-customer.php? update=".$ID."' class='text-color'>Update</a></button></td>";
	 echo"</tr>";
	 }
  }


 $con->close();

?>
  
 

<div>
<br>
<br>
<br>
<br>
<br>
<br>
</div>


</table>

</div>
</center>

<center>
<div class="diveplace">
<h4>Register saller Details</h4>
<table  class="tablemod">
<tr id="border">
<th>ID</th>
<th>Name</th>
<th>AGE</th>
<th>CONTACT</th>
<th>good</th>
</tr>


  <?php

 include"sellerRegister.php";
 
  $catogary1="select * from seller";
  
  $result=$con->query($catogary1);
  
  if($result->num_rows>0)
  {
	 while($row=$result->fetch_assoc())
	 {
		 $ID=$row["sellerID"];
		echo "<tr>";
	 echo"<td>".$ID."</td>";
	 echo"<td>".$row["sellerName"]."</td>";
	 echo"<td>".$row["sellerEmail"]."</td>";
	 echo"<td>".$row["sellerPassword"]."</td>";
	 echo "<td><button id='buttoncolor-Delete'><a href='delete-saler.php? deleteid2=".$ID."' class='text-color'>Delete</a></button>
<button id='buttoncolor-upbate'><a href='upbate-saler.php? upbate1=".$ID."' class='text-color'>Update</a></button></td>";
	 echo"</tr>";
	 }
  }


 $con->close();

?>
  
 




</table>

</div>
</center>

<div>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<center>
<div class="diveplace">
<h4>product details</h4>
<table  class="tablemod">
<tr id="border">
<th></th>
<th>ID</th>
<th>description</th>
<th>image</th>
<th>price</th>
<th>chanage</th>
</tr>
<?php

 include"index.php";
 
  $catogary="select * from product";
  
  $result=$connection->query($catogary);
  
  if($result->num_rows>0)
  {
	 while($row=$result->fetch_assoc())
	 {
		 $ID=$row["id"];
		echo "<tr>";
	 echo"<td>".$ID."</td>";
	 echo"<td>".$row["description"]."</td>";
	 echo"<td>".$row["image"]."</td>";
	 echo"<td>".$row["price"]."</td>";
	 echo "<td><button id='buttoncolor-Delete'><a href='delete.php? deleteid=".$ID."' class='text-color'>Delete</a></button>
<button id='buttoncolor-upbate'><a href='upbate-product.php? upbate3=".$ID."' class='text-color'>Update</a></button></td>";
	 echo"</tr>";
	 }
  }


 $connection->close();

?>

  
 





</table>
</div>
</center>
<div>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

<div class="diveplace">
<h4>product details</h4>
<table  class="tablemod">
<tr id="border">
<th></th>
<th>ID</th>
<th>description</th>
<th>image</th>
<th>price</th>
<th>good</th>
</tr>
<?php

 include"index.php";
 
  $catogary="select * from feedback";
  
  $result=$con->query($catogary);
  
  if($result->num_rows>0)
  {
	 while($row=$result->fetch_assoc())
	 {
		 $ID=$row["id"];
		echo "<tr>";
	 echo"<td>".$ID."</td>";
	 echo"<td>".$row["description"]."</td>";
	 echo"<td>".$row["image"]."</td>";
	 echo"<td>".$row["price"]."</td>";
	 echo"</tr>";
	 }
  }


 $connection->close();

?>

  
  




</table>
</div>
<div id="rigthside">
<form method="post" action="commemet.php">
ID NUMBER<input type="text" name="sender"><br>
 Titale<input type="text" name="reciver"><br>
 description<textarea rows="10" cols="40" name="description"></textarea><br>
 <br>
 <input type="submit" name="send">

</form>
</div >
</body>
</html>
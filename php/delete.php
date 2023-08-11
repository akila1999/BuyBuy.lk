<?php

include"index.php";

if(isset($_GET['deleteid']))
{
	
	$id=$_GET['deleteid'];
 $delete="delete from product where id='$id'";
 
 $results= $connection->query($delete);
 
 if( $results)
	 
	 {
		 header('location: adming.php');
	 }

}
else{
	
	echo "<script>alert('NOT DELETE ')</script>";
}


$connection->close();




?>
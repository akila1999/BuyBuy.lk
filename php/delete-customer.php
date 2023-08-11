<?php

include"register.php";

if(isset($_GET['deleteid1']))
{
	
	$id=$_GET['deleteid1'];
 $delete1="delete from buyer where buyerID='$id'";
 
 $results1= $con->query($delete1);
 
 if( $results1)
	 
	 {
		 header('location: adming.php');
	 }

}
else{
	
	echo "<script>alert('NOT DELETE ')</script>";
}


$con->close();

?>
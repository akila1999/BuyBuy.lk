<?php

include"payment.php";

if(isset($_GET['delete']))
{
	
	$id=$_GET['delete'];
 $delete1="delete from billing where id='$id'";
 
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
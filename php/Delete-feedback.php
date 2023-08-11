<?php
include"feedback.php";

if(isset($_GET['delete']))
{
	
	$id=$_GET['delete'];
 $delete2="delete from feedback where fID='$id'";
 
 $results2= $con->query($delete2);
 
 if( $results2)
	 
	 {
		 header('location: adming.php');
	 }
	 else{
	
	echo "<script>alert('NOT DELETE ');</script>";
}

}
$con->close();



?>
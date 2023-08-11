<?Php
include"sellerRegister.php";

if(isset($_GET['deleteid2']))
{
	
	$id=$_GET['deleteid2'];
 $delete2="delete from seller where sellerID='$id'";
 
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
<?php
//Linking the configuration file
require 'config.php';
?>
<?php
#if(isset($_POST["Submit"])){
$name = $_POST["fName"];
$email= $_POST["fEmail"];
$description= $_POST["fDescription"];
$sql= "INSERT INTO feedback(fName,fEmail,fDescription)VALUES('$name','$email','$description')";
if($con->query($sql)){
echo "<script>alert('Inserted successfully')</script>;";

}
else{
echo "Error:". $con->error;
}
$con->close();
?>
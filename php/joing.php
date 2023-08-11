 <?php
 
 include"adming.php";
   
	
		$sender=$_POST["sender"];
		$reciver=$_POST['reciver'];
		$description=$_POST['description'];
	
	$comment=fopen("com.txt","w");
	
	fwrite($comment,$_POST["sender"]);
	fwrite($comment,$_POST["reciver"]);
	fwrite($comment,$description);
	
	fclose($comment);
   
 ?>
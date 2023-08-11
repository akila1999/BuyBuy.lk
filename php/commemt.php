 <?php
    if(isset($_POST['send']))
	{
		$sender=$_POST["sender"];
		$reciver=$_POST['reciver'];
		$description=$_POST['description'];
	}
	$comment=fopen("comment.txt","w");
	
	fwrite('$comment,$sender');
	fwrite('$comment,$reciver');
	fwrite('$comment,$description');
	
	fclose($comment);
   
 ?>
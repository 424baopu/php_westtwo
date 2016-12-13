<?php
    session_start();
	$usen=$_SESSION['username'];

	$word=$_GET['word1'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("chat",$con);
	
	$result=mysql_query("delete from talk where username='$usen' and words='$word'");
	
	if($result){
		Header("Location: speak.php");
		//echo "success";
	}else{
		echo "error";
	}

?>
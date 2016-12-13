<html>
<head>
简单的php+mysql聊天室--显示留言页
</head>
<br>
<a href="speak.php">发言</a>
</br>
</html>

<?php
	session_start();
	$usen=$_SESSION['username'];
	$word=$_POST["words"];
	if($word){
		$con=mysql_connect("localhost","root","");
		mysql_select_db("chat",$con);
		$sql="INSERT INTO talk(username,words)
			  VALUES('$usen','$word')";
		//mysql_query($sql); //发送留言到数据库
		$res_insert = mysql_query($sql);
			  if($res_insert){
				  //echo "注册成功";
				  //Header("Location: show.php");
			  }else{
				  echo "请再试一次";
			  }
		
	}
	else{
		echo "输入内容不可为空";
	}
	
?>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("chat", $con);

$result = mysql_query("SELECT * FROM talk");

echo "<table border='1'>
<tr>
<th>username</th>
<th>words</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['words'] . "</td>";
  echo "<td>" . "<a href='delete.php?word1={$row['words']}'>删除</a>" . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
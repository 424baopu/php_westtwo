<?php 
	session_start();
	$_SESSION['username']=$_POST["username"];
	//echo $_SESSION['username'];
	if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")
	{
		$usen = $_POST["username"];
		$pass = $_POST["password"];
		if($usen == "" || $pass == "")
		{
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
		}
		else
		{
			$con=mysql_connect("localhost","root","");
			mysql_select_db("chat",$con);
			
			//mysql_query("set names 'gbk'");
			//从表中获取username为$_POST[username]和password为md5($_POST[password])
			$sql = "select * from user where username = '$_POST[username]' and password = md5('$_POST[password]')";
			$query = mysql_query($sql);
			//表中跟$query的行的个数
			$num = mysql_num_rows($query);
			
			if($num)
			{
				//$row = mysql_fetch_array($query);	//将数据以索引方式储存在数组中
				//echo $row[0];
				Header("Location: speak.php");
			}
			else
			{
				echo "用户名或密码不正确！";
				//echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";
	}

?>
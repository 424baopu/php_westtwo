<?php
    header("Content-Type: text/html;charset=utf-8"); 
  //isset($_POST["submit"])—>判断数据是否提交成功
  if(isset($_POST["Submit"])&&$_POST["Submit"]=="注册"){
	  $usen=$_POST["username"];
	  $pass=md5($_POST["password"]);
	  if($usen==""||$pass==""){
		  echo "用户名或者密码未填写";
	  }
	  else{
		  $con=mysql_connect("localhost","root","");
		  mysql_select_db("chat",$con);//连接数据库
		  
		  //看用户名是否已经存在
		  
		  //取出username='$usen'的一行
		  $sql="select * from user where username='$usen'"; 
		  $query=mysql_query($sql,$con);
		  
		  //法1
		  $rows=mysql_num_rows($query);
		  if($rows){
			  echo "该用户名已经存在，请重新输入";
			  eixt;
		  }else{
			  $sql="INSERT INTO user(username,password)
			  VALUES('$usen','$pass')";
			  $res_insert = mysql_query($sql);
			  if($res_insert){
				  //echo "注册成功";
				  Header("Location: login.php");
			  }else{
				  echo "请再试一次";
			  }
			  
		  }
		  
		  /*
		  //法2，从结果集中取得一行作为关联数组，或数字数组，或二者兼有，即[username]=>$usen
		  $rows=mysql_fetch_array($query);
		  mysql_free_result($query);//释放结果内存
		
		  if($rows['username']==$usen){
			  echo "该用户名已经存在，请重新输入";
			  eixt;
		  }else{
			  
			  $sql="INSERT INTO user(username,password)
			  VALUES('$usen','$pass')";
			  $res_insert = mysql_query($sql);
			  if($res_insert){
				  echo "注册成功";
			  }else{
				  echo "请再试一次";
			  }
		  } 
          */	  
	  }
  }else{
	  echo "注册未成功";
  }
 
?>




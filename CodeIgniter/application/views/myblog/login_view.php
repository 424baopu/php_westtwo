<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
	div{
	   margin:0 auto;
	   text-align:center;
	   back-color:#ccc;
	}
	.div1{
		width:500px;
		height:220px;
		border-color:#000;
		border-style:groove;
		border-width:2px;
		margin-top:100px;
	}
	.div2{
		width:500px;
		height:30px;
		border-bottom-color:#000;
		border-bottom-style:groove;
		line-height:30px;
		font-weight:bold;
		background-color:#999;
	}
	.div3{
		font-size:18px;
		font-weight:bold;
	}
	</style>
</head>

<body bgcolor="#cccccc">
<div class="div1">
	<div class="div2">登陆</div>
	<div class="div3">
		<form action="<?php echo site_url('login/login');?>" method="post">
			<br /><br />
			用户：<input type="text" name="name" id="name" />
			<br /><br />
			密码：<input type="password" name="password" id="password" />
			<br /><br />
			<input type="submit" name="submit" value="登陆" />
			<input type="reset" name="submit" value="重置" />
			<br /><br />
			<a href="reg">前往注册</a>
		</form>
	</div>
</div>
</body>

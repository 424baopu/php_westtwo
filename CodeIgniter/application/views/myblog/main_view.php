<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->library('session');
			$name = $this->session->name;?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="//localhost/CodeIgniter/index.php/add">写博客</a>
		  <a class="blog-nav-item" href="//localhost/CodeIgniter/index.php/myarticle">我的博客</a>
          <a class="blog-nav-item" href="//localhost/CodeIgniter/index.php/reg">注册</a>
		  <a class="blog-nav-item" href="//localhost/CodeIgniter/index.php/login">登陆</a>
		  
		  <form action="search" method="post">
		  <input type="text" name="key">
		  <input type="submit" name="submit" value="搜索"/>
		  </form> 
  
</form>  
		  
        </nav>
		
      </div>
    </div>
	
    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
        <br>
          <?php foreach ($blogs as $blogs_item): ?>
        <h1 class="blog-post-title"><?php echo $blogs_item['title']; ?></h1>
        <p class="blog-post-meta">
          类型：<?php echo $blogs_item['type']; ?> <?php echo"&emsp;";//显示空格?>
		  作者：<?php echo $blogs_item['name']; ?>
        </p>
        
        <div class="main">
		  <?php 
			echo $blogs_item['content'];
			echo "____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________";
		?>
        </div>
      
        <?php endforeach; ?>
        <!--翻页链接-->
        <br><?php echo $links;?>
            
          </div><!-- /.blog-post -->
    
        </div><!-- /.blog-main -->

    </div><!-- /.container -->
</body>

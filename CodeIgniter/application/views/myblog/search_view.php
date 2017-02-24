<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="//localhost/CodeIgniter/index.php/main/text">返回主页</a>
		  
		  <form action="http://localhost/CodeIgniter/index.php/main/search" method="post">
		  <input type="text" name="key">
          <input type="submit" name="submit" value="搜索" />		  
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
			echo "</br>";
		?>
        </div>
      
        <?php endforeach; ?>
        <!--翻页链接-->
        <br><?php echo $links;?>
            
          </div><!-- /.blog-post -->
    
        </div><!-- /.blog-main -->

    </div><!-- /.container -->
</body>

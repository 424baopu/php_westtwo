<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="//localhost/CodeIgniter/index.php/add">写博客</a>
          <a class="blog-nav-item" href="//localhost/CodeIgniter/index.php/main/text">返回主页</a>
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
          类型：<?php echo $blogs_item['type']; ?> 
        </p>
        
        <div class="main">
		  <?php 
		    echo $blogs_item['content'];
		  ?>
		  <?php 
		    $id=$blogs_item['id'];
			$title=$blogs_item['title'];
			$type=$blogs_item['type'];
			$content=$blogs_item['content'];
			//传递参数
		  ?>
		  
		  <a href="<?php echo "myarticle/torevise?id=".$id."&title=".$title."&type=".$type ?>">修改</a>
		  
		  <?php 
			echo "___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________";
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

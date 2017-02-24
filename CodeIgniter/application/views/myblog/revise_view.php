<!-- ckeditor编辑器源码文件 -->
<script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
<body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="//localhost/CodeIgniter/index.php/main/text">返回主页</a>
        </nav>
      </div>
    </div>

			
				
    <div class="container">
      <div class="row">

        <div class="col-sm-8 blog-main">
	  
			<div class="blog-post">
			
			<form action="revise" method="post">
				
				<label for="title">Title</label><br/>
				<input type="input" name="title" value="<?php echo $_GET['title'];?>"/><br/>
				
				<label for="type">Type</label><br/>
				<input type="input" name="type" value="<?php echo $_GET['type'];?>"/><br/>

				<label for="text">Contents</label><br/>
				<textarea rows="10" cols="80" name="text"><?php echo $content;?></textarea><br/>
				
				<script type="text/javascript">CKEDITOR.replace('text');</script>

				<input type="submit" name="submit" value="修改" />
				
			</form>
            </div><!-- /.blog-post -->
      
        </div><!-- /.blog-main -->     

    </div><!-- /.container -->
</body>
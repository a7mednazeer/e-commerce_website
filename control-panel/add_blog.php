<?php
include "style/heder.php";
include "style/slider.php";
include "style/nav.php";
?>

<main class="content">
	<div class="container-fluid p-0">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Blog</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">ADD Blog</h1>
			</div>
			<form method="POST" action="function/add_blog.php" enctype="multipart/form-data">
				<label>Image</label>
				<input type="file" name="image" class="form-control">
				<label>Type</label>
				<input type="text" name="type" placeholder="type" class="form-control">
                <label>Title</label>
				<input type="text" name="title" placeholder="title" class="form-control">
                <label>Blog</label>
				<input type="text" name="blog" placeholder="blog" class="form-control">
				<input type="submit" name="submit" value="ADD New Blog" class="btn btn-info">
			</form>
		</div>
	</div>
</main>		

<script src="js/app.js"></script>
<?php include "style/footer.php"; ?>

</body>

</html>
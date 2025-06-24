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
				<li class="active">Category</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">ADD Category</h1>
			</div>
			<form method="POST" action="function/add_cat.php">
				<label>Name:</label>
				<input type="text" name="name" placeholder="Name" class="form-control"><br>
				<input type="submit" name="submit" value="ADD New Category" class="btn btn-info">
			</form>
		</div>
	</div>
</main>

<script src="js/app.js"></script>
<?php include "style/footer.php"; ?>

</body>

</html>
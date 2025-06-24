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
				<li class="active">Admin</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">ADD Admin</h1>
			</div>
			<form method="POST" action="function/add_admin.php" enctype="multipart/form-data">
				<label>UserName:</label>
				<input type="text" name="username" placeholder="Username" class="form-control">
				<label>Password:</label>
				<input type="password" name="password" placeholder="Password" class="form-control">
				<input type="file" name="image" class="form-control">
				<input type="submit" name="submit" value="ADD New Admin" class="btn btn-info">
			</form>
		</div>
	</div>
</main>
		
<script src="js/app.js"></script>
<?php include "style/footer.php"; ?>

</body>

</html>
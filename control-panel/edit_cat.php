<?php
 $id = $_GET['id'];


 include "style/heder.php";
 include "style/slider.php";
 include "style/nav.php"; 
 include 'function/connection.php';

 $select_one_category = "SELECT * FROM categories WHERE id = $id";
 $result_one_category = $connection->query($select_one_category);
 $row_one_category = $result_one_category->fetch_assoc();
 $name_one_category = $row_one_category['cat_name'];

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
				<h1 class="page-header">Edit Category</h1>
			</div>

			<form method="POST" action="function/edit_cat.php">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" value="<?php echo $name_one_category; ?>"><br>
				<input type="submit" name="submit" value="Edit Category" class="btn btn-info">
			</form>	
		</div>
	</div>
</main>
		

<script src="js/app.js"></script>
<?php include "style/footer.php"; ?>

</body>

</html>
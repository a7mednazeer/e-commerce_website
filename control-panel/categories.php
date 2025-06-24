<?php
include "style/heder.php";
include "style/slider.php";
include "style/nav.php";
?>


<main class="content">
	<div class="container-fluid p-0">
		<div class="mb-3">
			<h1 class="h3 d-inline align-middle">Categories</h1>
			<a class="badge bg-dark text-white ms-2" href="upgrade.php">Get more categories examples</a>
			<br><br>
                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

			        <a href="add_cat.php" class="btn btn-info">ADD New Category</a>
				    <table class="table table-hover">
				    <thead>
				        <tr>
				          <th scope="col">#</th>
				          <th scope="col">Name</th>
				          <th scope="col">Action</th>
				        </tr>
				    </thead>
				<tbody>

<?php
	$count = 1;

	include 'function/connection.php';
	$select_all_cat = "SELECT * FROM categories";
	$result_all_cat = $connection->query($select_all_cat);
	foreach ($result_all_cat as $key_cat) {
		$name = $key_cat['cat_name'];

?>			  
				
		<tr>
		  <th scope="row"><?php echo $count++; ?></th>
		  <td><?php echo $name; ?></td>
		  <td>
		  	<a class="btn btn-warning" href="edit_cat.php?id=<?php echo $key_cat['id']; ?>">Edit</a>
			<a href="function/delete_cat.php?id=<?php echo $key_cat['id']; ?>" class="btn btn-danger" >Delete</a>
		  </td>
		</tr>

<?php } ?>			    

			</tbody>
		</table>
	</div>

<script src="js/app.js"></script>
<?php include "style/footer.php"; ?>

</body>

</html>
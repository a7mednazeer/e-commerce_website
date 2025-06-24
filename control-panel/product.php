<?php
include "style/heder.php";
include "style/slider.php";
include "style/nav.php";
?>


<main class="content">
	<div class="container-fluid p-0">
		<div class="mb-3">
			<h1 class="h3 d-inline align-middle">Product</h1>
			<a class="badge bg-dark text-white ms-2" href="upgrade.php">Get more product examples</a>
			<br><br>
			    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			        <a href="add_product.php" class="btn btn-info">Add New Product</a>
			        <table class="table table-hover">
			          <thead>
			            <tr>
			              <th scope="col">#</th>
			              <th scope="col">Name</th>
			              <th scope="col">Image</th>
			              <th scope="col">Action</th>
			            </tr>
			          </thead>
			        <tbody>

<?php

$count = 1;
include 'function/connection.php';
$select_all_products = "SELECT p_name , image , id  FROM products";
$result_all_products = $connection->query($select_all_products);
foreach ($result_all_products as $key_products)
{
	$name = $key_products['p_name'];
	$image = $key_products['image'];

?>			  	
			    <tr>
			      <th scope="row"><?php echo $count++; ?></th>
			      <td><?php echo $name; ?></td>
			      <td><img style="width: 100px;height: 100px;" src="img/<?php echo $image; ?>"></td>
			      <td>
			      	<a href="view_product.php?id= <?php echo $key_products['id']; ?>" name="view" class="btn btn-primary">View Details</a>
			      	<a class="btn btn-warning" href="edit_product.php?id=<?php echo $key_products['id']; ?>">Edit</a>
					<a href="function/delete_product.php?id= <?php echo $key_products['id']; ?>" class="btn btn-danger" >Delete</a>
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
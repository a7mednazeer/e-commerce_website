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
				<li class="active">Products</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Product</h1>
			</div>

			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Image</th>
			      <th scope="col">price</th>
			      <th scope="col">discount</th>
				  <th scope="col">Description</th>
			      <th scope="col">stock</th>
			      <th scope="col">categoty</th>
			    </tr>
			  </thead>
             <tbody>


<?php

    include 'function/connection.php';

	$id = $_GET['id'];

	$select_product = "SELECT * FROM `products` WHERE id = $id";
	$result_product = $connection->query($select_product);
	$row_one_product = $result_product->fetch_assoc();

		$name = $row_one_product['p_name'];
		$image = $row_one_product['image'];
		$description = $row_one_product['description'];
		$price = $row_one_product['price'];
		$discount = $row_one_product['discount'];
		$stock = $row_one_product['stock'];
		$category = $row_one_product['id_category'];


	$select_category = "SELECT cat_name FROM categories WHERE id = $category";
	$result_category = $connection->query($select_category);
	$row_one_category = $result_category->fetch_assoc();
	
		$category_name = $row_one_category['cat_name'];

?>

	<tr>	
		<th scope="row"><?php echo $id;?></th>
		<td><?php echo $name; ?></td>
		<td><img style="width: 100px;height: 100px;" src="img/<?php echo $image; ?>"></td>
		<td><?php echo $price; ?></td>
		<td><?php echo $discount; ?></td>
		<td><?php echo $description; ?></td>
		<td><?php echo $stock; ?></td>
		<td><?php echo $category_name; ?></td>
	</tr>

                </tbody>
            </table>
        </div>



<script src="js/app.js"></script>
<?php include "style/footer.php"; ?>

</body>

</html>
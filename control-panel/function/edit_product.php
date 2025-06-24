<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	$discription = $_POST['discription'];
	$stock = $_POST['stock'];
	$category = $_POST['category'];
	

	$file = $_FILES['image']['name'];
	$file_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($file_temp, "../img/$file");
	if(!empty($file)){
		$update_product = "UPDATE `products` SET `p_name`='$name',`description`='$discription',`price`='$price',`image`='$file',`discount`='$discount',`stock`='$stock' WHERE id = $id";
		$connection->query($update_product);

	}else
	{
		 $update_product = "UPDATE products SET p_name = '$name' , description = '$discription' , price = '$price' , discount = '$discount' , stock = $stock   WHERE id = $id";
	     $connection->query($update_product);
	}


header("location:../product.php");
}
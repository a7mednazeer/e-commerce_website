<?php

    include 'control-panel/function/connection.php';

    $count = 1;
	
	$id = $_GET['id'];

	$select_product = "SELECT * FROM `products` WHERE id = $id";
	$result_product = $connection->query($select_product);
	$row_one_product = $result_product->fetch_assoc();
		$name = $row_one_product['p_name'];
		$image = $row_one_product['image'];
		$discount = $row_one_product['discount'];
		// $count = $row_one_product['count'];


	$insert_cart = "INSERT INTO `cart`(`name`, `price`, `image`, `count`) VALUES ('$name','$discount','$image','$count')";
	$connection->query($insert_cart);
	

    header("location:shopping-cart.php");

?>
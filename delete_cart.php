<?php
    include 'control-panel/function/connection.php';

	$id = $_GET['id'];

    $delete_product = "DELETE FROM `cart` WHERE id = $id";
    $connection->query($delete_product);
    
    header("location:shopping-cart.php");

?>

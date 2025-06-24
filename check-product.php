<?php
	$id = $_GET['id'];
    $num = 1;

if(isset($_POST['submit'])){
	include 'control-panel/function/connection.php';
	$idd = $_POST['id'];
    // $name = $_POST['name'];


	$select_product = "SELECT * FROM `cart` WHERE id = 27 ";

	$result_product = $connection->query($select_product);
	$count = $result_product->num_rows;

	if($count > 0){
        $num++;
            $update_product = "UPDATE `cart` SET `count`='$num' WHERE id = 27";
            $connection->query($update_product);
    
            header("location:shopping-cart.php");
        }
	    else
	    {
		    header("location:cart.php");
	    }
    }

?>
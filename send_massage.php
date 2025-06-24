<?php 
if(isset($_POST['submit'])){
	include 'control-panel/function/connection.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
    $massage = $_POST['massage'];


	$send_massage = "INSERT INTO `massages`(`name`, `email`, `massage`) VALUES ('$name','$email','$massage')";
	$connection->query($send_massage);
    
	header("location:contact.php");

}

?>
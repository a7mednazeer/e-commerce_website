<?php

if(isset($_POST['submit'])){

	include 'control-panel/function/connection.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$select_user = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

	$result_user = $connection->query($select_user);
	$count = $result_user->num_rows;

	if($count > 0){
		
		$_SESSION['username'] = $username;


        header("location:index.php");

	}else
	{
		header("location:login.php");
	}

}

?>
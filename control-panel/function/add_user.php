<?php 
if(isset($_POST['submit'])){
	include 'connection.php';

	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $date = $_POST['user_date'];
	$password = $_POST['password'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];


	$insert_user = "INSERT INTO users (`firstname` , `lastname` , `email` , `user_date` , `password` , `phone` , `username`) VALUES ('$firstname' , '$lastname' , '$email' , '$date' , '$password' , '$phone' , '$username')";
	$connection->query($insert_user);

	header("location:../add_user.php");

}
?>
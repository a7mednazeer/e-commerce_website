<?php 
if(isset($_POST['submit']))
{
	include 'connection.php';
	$type = $_POST['type'];
    $title = $_POST['title'];
    $blog = $_POST['blog'];

    $file = $_FILES['image']['name'];
	$file_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($file_temp, "../img/$file");



	$insert_blog = " INSERT INTO `blogs`(`image`,`type`,`title`,`blog`) VALUES ('$file','$type','$title','$blog') ";
	$connection-> query ($insert_blog);

	header("location:../blogs.php");
}
?>

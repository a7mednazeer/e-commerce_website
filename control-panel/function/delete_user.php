<?php
include 'connection.php'; 
$id = $_GET['id'];

$delete_user = "DELETE FROM users WHERE id = $id";
$connection->query($delete_user);

header("location:../users.php");
?>
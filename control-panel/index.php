<?php
include "style/heder.php";
include "style/slider.php";
include "style/nav.php";
?>


<main class="content">
	<div class="container-fluid p-0">
		<h1 class="h3 mb-3"><strong>Admin</strong> Dashboard</h1>

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			
			<a href="add_admin.php" class="btn btn-info">Add New Admin</a>

			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Image</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>

<?php

    $count = 1;

    include 'function/connection.php';
	$select_all_admin = "SELECT name , image , id  FROM admin ORDER BY id DESC LIMIT 5";
	$result_all_admin = $connection->query($select_all_admin);
	foreach ($result_all_admin as $key_admin) {
		$name = $key_admin['name'];
		$image = $key_admin['image'];	

?>			  	
			    <tr>
			      <th scope="row"><?php echo $count++; ?></th>
			      <td><?php echo $name; ?></td>
			      <td><img style="width: 100px;height: 100px;" src="img/<?php echo $image; ?>"></td>
			      <td>
			      	<a class="btn btn-warning" href="edit_admin.php?id=<?php echo $key_admin['id']; ?>">Edit</a>
			      	<a href="function/delete_admin.php?id=<?php echo $key_admin['id']; ?>" class="btn btn-danger" >Delete</a>
			      </td>
			    </tr>
                
<?php } ?>	
				
				</tbody>
	        </table>
		</div>

		
<script src="js/app.js"></script>
<?php include "style/footer.php"; ?>

</body>

</html>
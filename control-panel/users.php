<?php
include "style/heder.php";
include "style/slider.php";
include "style/nav.php";
?>



			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Users</h1>
						<a class="badge bg-dark text-white ms-2" href="upgrade.php">Get more users examples</a>
						<br>
						<br>


		
	                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">FirstName</th>
				  <th scope="col">LastName</th>
				  <th scope="col">Email</th>
				  <th scope="col">Phone</th>
				  <th scope="col">Date</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>


<?php
    $count = 1;

    include 'function/connection.php';
	$select_all_users = "SELECT id , firstname , lastname , email , phone , user_date FROM users";
	$result_all_users = $connection->query($select_all_users);
	foreach ($result_all_users as $key_users) {
		$f_name = $key_users['firstname'];
		$l_name = $key_users['lastname'];
		$email = $key_users['email'];
		$phone = $key_users['phone'];
		$user_date = $key_users['user_date'];

?>			  	
			    <tr>	
			      <th scope="row"><?php echo $count++; ?></th>
			      <td><?php echo $f_name; ?></td>
				  <td><?php echo $l_name; ?></td>
				  <td><?php echo $email; ?></td>
				  <td><?php echo $phone; ?></td>
				  <td><?php echo $user_date; ?></td>
			      <td>
					<a href="function/delete_user.php?id= <?php echo $key_users['id']; ?>" class="btn btn-danger" >Delete</a>
				  </td>
			    </tr>

<?php } ?>			    

			</table>
		</div>

<script src="js/app.js"></script>
<?php include "style/footer.php"; ?>

</body>

</html>
<?php
include "style/heder.php";
include "style/slider.php";
include "style/nav.php";
?>



<main class="content">
	<div class="container-fluid p-0">
		<div class="mb-3">
			<h1 class="h3 d-inline align-middle">Massages</h1>
			<a class="badge bg-dark text-white ms-2" href="upgrade.php">Get more massages examples</a>
			<br><br>
			    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

                    <table class="table table-hover">
		            	  <thead>
		            	    <tr>
		            	      <th scope="col">#</th>
		            	      <th scope="col">Name</th><th></th>
		            	      <th scope="col">Email</th><th></th>
		            	      <th scope="col">Massage</th>
		            		  <th scope="col">Action</th>
		            	    </tr>
		            	  </thead> 
		            	  <tbody>


<?php
    $count = 1;

    include 'function/connection.php';
	$select_all_massages = "SELECT * FROM `massages` ORDER BY id DESC";
	$result_all_massages = $connection->query($select_all_massages);
	foreach ($result_all_massages as $key_massage) {
		$name = $key_massage['name'];
		$email = $key_massage['email'];
        $massage = $key_massage['massage'];

?>			  	
			    <tr>
			      <th scope="row"><?php echo $count++; ?></th>
			      <td><?php echo $name; ?></td><td></td>
			      <td><?php echo $email; ?></td><td></td>
                  <td><?php echo $massage; ?></td>
			      <td><a class="btn btn-info" href="massages.php">Open</a>
			    </tr>

<?php } ?>

            </tbody>
        </table>
    </div>

<script src="js/app.js"></script>
<?php include "style/footer.php"; ?>

</body>

</html>
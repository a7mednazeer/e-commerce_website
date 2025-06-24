<?php
include "style/heder.php";
include "style/slider.php";
include "style/nav.php";
?>



<main class="content">
	<div class="container-fluid p-0">
		<div class="mb-3">
			<h1 class="h3 d-inline align-middle">Blogs</h1>
			<a class="badge bg-dark text-white ms-2" href="upgrade.php">Get more blogs examples</a>
			<br><br>
			    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                    <a href="add_blog.php" class="btn btn-info">Add New Blog</a>

                    <table class="table table-hover">
			        <thead>
			            <tr>
			              <th scope="col">#</th>
				          <th scope="col">Image</th>
			              <th scope="col">Type</th>
				          <th scope="col">Title</th>
			              <th scope="col">blog</th>
			            </tr>
			        </thead> 
			    <tbody>

<?php
    $count = 1;
    include 'function/connection.php';
    
	$select_all_blogs = "SELECT * FROM `blogs` ORDER BY id DESC";
	$result_all_blogs = $connection->query($select_all_blogs);
	foreach ($result_all_blogs as $key_blog) {
		$image = $key_blog['image'];
		$type = $key_blog['type'];
        $title = $key_blog['title'];
        $blog = $key_blog['blog'];

?>			  	
			    <tr>
			      <th scope="row"><?php echo $count++; ?></th>
				  <td><img style="width: 100px;height: 100px;" src="img/<?php echo $image; ?>"></td>
			      <td><?php echo $type; ?></td>
				  <td><?php echo $title; ?></td>
                  <td><?php echo $blog; ?></td>
			    </tr>

<?php } ?>

              </tbody>
            </table>
         </div>

<script src="js/app.js"></script>
<?php include "style/footer.php"; ?>
</body>

</html>
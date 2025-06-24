<?php
include 'project_des/header.php';
include 'project_des/nav.php'; 

	$id = $_GET['id'];

	$select_blog = "SELECT * FROM `blogs` WHERE id = $id";
	$result_blog = $connection->query($select_blog);
	$row_one_blog = $result_blog->fetch_assoc();

        $image = $row_one_blog['image'];
		$type = $row_one_blog['type'];
		$title = $row_one_blog['title'];
		$blog = $row_one_blog['blog'];

?>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./blog.php">Blog</a>
                        <span>Blog Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $type; ?> <span></span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="control-panel/img/<?php echo $image; ?>" style="width: 600px; height: 600px" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p>
                                <?php echo $blog; ?>
                            </p>
                        </div>
                        <div class="blog-quote">
                            <p>“ <?php echo $title; ?>” <span>- <?php echo $type; ?></span></p>
                        </div>

                        <p><?php echo $blog; ?></p>
                        
                        
                        
                            <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li>Music</li>
                                    <li>Sport</li>
                                    <li>News</li>
                                    <li>Animal</li>
                                    <li>Movies</li>
                                    <li>The Islamic Religion</li>
                                    <li>Cars</li>
                                    <li>Building</li>
                                    <li>Theater</li>
                                </ul>
                            </div>


                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/ahmad.nazeer.54966"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/a7med_nazeer"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/in/ahmed-nazeer-150a95234/"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="posted-by">
                            <div class="pb-pic">
                                <!-- <img src="img/blog/post-by.png" alt=""> -->
                            </div>
                            <div class="pb-text">
                                <a>
                                    <h5>Ahmed Nazeer</h5>
                                </a>
                                <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    amodo</p>
                            </div>
                        </div>


                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messages"></textarea>
                                        <button type="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->


<?php include 'project_des/footer.php';
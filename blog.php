<?php
include 'project_des/header.php';
include 'project_des/nav.php'; 
?>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search . . .  ">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4></h4>
                            <ul>

                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Recent Post</h4>
                            <div class="recent-blog">
                                <a class="rb-item">
                                    <div class="rb-pic">
                                        <img src="control-panel/img//Metal_Soccer_Ball-wallpaper-3655114.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>Sport <span></span></p>
                                    </div>
                                </a>
                                <a class="rb-item">
                                    <div class="rb-pic">
                                        <img src="control-panel/img//IMG-20200605-WA0139.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>News <span></span></p>
                                    </div>
                                </a>
                                <a class="rb-item">
                                    <div class="rb-pic">
                                        <img src="control-panel/img/fifa_brasil-wallpaper-10293060.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>Sport <span></span></p>
                                    </div>
                                </a>
                                <a class="rb-item">
                                    <div class="rb-pic">
                                        <img src="control-panel/img/Christmas_Kitten-wallpaper-9421682.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>Animal <span></span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog-tags">
                            <h4>Categories</h4>
                            <div class="tag-item">
                                <a href="blog.php">Music</a>
                                <a href="blog.php">Sport</a>
                                <a href="blog.php">News</a>
                                <a href="blog.php">Animal</a>
                                <a href="blog.php">Movies</a>
                                <a href="blog.php">The Islamic Religion</a>
                                <a href="blog.php">Cars</a>
                                <a href="blog.php">Building</a>
                                <a href="blog.php">Theater</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div >

<?php
    
    $select_all_blog = "SELECT * FROM `blogs`";
    $result_all_blog = $connection->query($select_all_blog);
    foreach($result_all_blog as $key_blog){
        $image = $key_blog['image'];
        $type = $key_blog['type'];
        $title = $key_blog['title'];
        $blog = $key_blog['blog'];
        
?>

                
                <div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="control-panel/img/<?php echo $image; ?>" style="width: 300px; height: 300px" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="./blog-details.php?id= <?php echo $id = $key_blog['id']; ?>">
                                        <h4><?php echo $title; ?></h4>
                                    </a>
                                    <p><?php echo $type; ?> <span></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php } ?>
                 <div class="col-lg-12">
                     <div class="loading-more">
                         <i class="icon_loading"></i>
                         <a href="blog.php">
                              Loading More
                          </a>
                      </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </section>
    <!-- Blog Section End -->


<?php include 'project_des/footer.php';
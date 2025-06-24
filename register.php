<?php
include 'project_des/header.php';
?>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form method="POST" action="control-panel/function/add_user.php" enctype="multipart/form-data">
                            <div class="group-input">
                                <label class="form-label">First Name</label>
                                <input type="text" name="firstname" placeholder="Enter your firstname">
                            </div>
                            <div class="group-input">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lastname" placeholder="Enter your lastname">
                            </div>
                            <div class="group-input">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" placeholder="Enter your email">
                            </div>
                            <div class="group-input">
                                <label class="form-label">Date</label>
                                <input type="date" name="user_date" placeholder="Enter your date">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password</label>
                                <input type="text" name="password" placeholder="Enter a password">
                            </div>
                            <div class="group-input">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" placeholder="Enter your phone">
                            </div>
                            <div class="group-input">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" placeholder="Enter your uniqe username">
                            </div>
                            <input type="submit" name="submit" value="Sign up" class="site-btn register-btn">
                        </form>
                        <div class="switch-login">
                            <a href="./login.php" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
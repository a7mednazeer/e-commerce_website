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
                        <span>Login</span>
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
                    <div class="login-form">
                        <h2>Login</h2>
                        <form role="form" method="POST" action="check_login.php">
                            <div class="group-input">
                                <label for="username">Username *</label>
                                <input type="text" name="username" placeholder="Enter your username">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" name="password" placeholder="Enter your password">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                <label class="form-check">
                               <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                               <span class="form-check-label">
                               </span>
                             </label>
                            </div>
                            </div>
                            <button type="submit" name="submit" value="Login" class="site-btn login-btn">Sign in</button>
                        </form>
                        <div class="switch-login">
                            <a href="./register.php" class="or-login">Or Create An Account</a>
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
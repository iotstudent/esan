<?php session_start();?>
<?php include"includes/header.php";?>
<?php include"includes/alerts.php";?>
    <div class="container-fluid signin-body1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-auto login-cont2-col">
                    <div class="login-cont2">
                        <h2>Member Login</h2>
                        <form action="process/processmemberlogin.php" method="post">
                        <div class="row">
                                <div class="col-md-12  mb-1">
                                    <div class="flash"><?php error_alert();success_alert()?></div>
                                </div>
                            </div>
                            <div class="username-cont">
                                <h6>Username/Email Address</h6>
                                <input type="text" name="data" placeholder="Enter your username or email address">
                            </div>
                            <div class="password-cont">
                                <h6>Password</h6>
                                <input type="password" name="password" placeholder="Enter your password">
                            </div>
                            <div class="login-btn-cont">
                                <input type="submit" value="Login" class="btn btn-primary btn-lg btn-block">
                            </div>
                            <p><a href="forgot.php">Forgot Password?</a></p>
                        </form>
                        <div class="not-mem">
                            <p>Not yet a member</p>
                            <a href="signup.php">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include"includes/footer.php";?>
<?php session_start();?>
<?php include"includes/header.php";?>
<?php include"includes/alerts.php";?>
    <div class="container-fluid signin-body1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-auto login-cont2-col">
                    <div class="login-cont2">
                        <h2>Forgot Password</h2>
                        <form action="process/processforgot.php" method="post">
                        <div class="row">
                                <div class="col-md-10 offset-md-1 mb-1">
                                    <div class="flash"><?php error_alert();success_alert()?></div>
                                </div>
                            </div>
                            <div class="username-cont">
                                <h6>Email Address</h6>
                                <input type="email" name="email" placeholder="Enter your email ">
                            </div>
                            
                            <div class="login-btn-cont">
                                <input type="submit" value="send" class="btn btn-primary btn-lg btn-block">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include"includes/footer.php";?>
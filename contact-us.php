<?php session_start();?>
<?php include"includes/alerts.php";?>
<?php include"includes/header.php";?>
    <div class="container-fluid cont-pg-hd">
        <h1>Contact Us</h1>
    </div>
    <div class="container-fluid contact-us-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cont-col-1">
                        <div class="cont-add">
                            <h3>Address</h3>
                            <p>
                                C/O Planet Capital Ltd, 4th Floor, <br>
                                St. Peter’s House, 3, Ajele Street, <br>
                                Off Broad Street, Lagos-Island, <br>
                                Lagos</p>
                        </div>
                        <div class="cont-phonenum">
                            <h3>Phone</h3>
                            <p>Tel: 08023025771, 08050761156, 08023938773</p>
                        </div>
                        <div class="cont-email-add">
                            <h3>Email Address</h3>
                            <p>info@esanprofessionals.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="send-msg-cont">
                        <div class="send-form-cont">
                            <h3 class="pb-3">Send Us a Message</h3>
                            <form action="process/processcontact.php" method="post">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1 mb-1">
                                        <div class="flash"><?php error_alert();success_alert();?></div>
                                    </div>
                                </div>
                                <div class="enter-name-cont">
                                    <h6>Full Name</h6>
                                    <input type="text" name="sendername" placeholder="Full Name">
                                </div>
                                <div class="enter-email-cont">
                                    <h6>Email</h6>
                                    <input type="email" name="senderemail" placeholder="your email address">
                                </div>
                                <div class="enter-phone-no">
                                    <h6>Phone</h6>
                                    <input type="text" name="senderphone" placeholder="your phone number (optional)">
                                </div>
                                <div class="enter-phone-no">
                                    <h6>Subject</h6>
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="enter-message-cont">
                                    <h6>Message</h6>
                                    <input type="text" name="sendermessage" placeholder="Your Message">
                                </div>
                                <div class="snd-msg-btn-cont">
                                   <input type="submit" value="Send" class="btn btn-primary btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include"includes/footer.php";?>
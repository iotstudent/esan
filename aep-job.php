<?php session_start();?>
<?php include"includes/header.php";?>
<?php include"includes/alerts.php";?>
<?php include "includes/dbconnection.php";?>
    <div class="container-fluid job-banner">
        <div class="container">
            <center>
                <h1>AEP Careers</h1>
            </center>
        </div>
    </div>
    <div class="container-fluid job-body1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="job-bg-cont">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="job-intro-text">
                        <h4>ABOUT AEP CAREERS</h4>
                        <p>As an association, we try our best to help the people of Esanland in securing jobs opportunites by making awareness of it when available. <br>
                        We also intend to put more effort to help the fresh graduates secure jobs with regards to their qualification. <br>
                        The main goal of this program is make sure the youths of Esanland are left out in our comtribution to the Esanland as a whole. <br>
                        This program, gives opportunity to persons from Esanland who have a job opportunity to share to their Esan brothers and sisters to share them, and also allows fresh graduates and others drop their C.V for future oppotunities.
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid job-body2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="recent-cont">
                        <h3>Recently Added</h3>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <?php
                
                $sql= " SELECT * FROM jobs ";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                        
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){      
                                $job_title = $row['job_title'];
                                $job_dsc = $row['job_dsc'];
                                $deadline = $row['deadline'];
                                ?>
                                
                                <div class="col-md-8 offset-md-2">
                                    <a class="job-link" href="#">
                                        <div class="jobs">
                                            <h2 style="text-transform:capitalize;"><?php echo $job_title?></h2>
                                            <br>
                                            <i class="fas fa-building pr-1"></i>  <?php echo $job_dsc?> <i class="fas fa-map-marker-alt px-2"></i> <i class="fas fa-clock pr-2"></i>  <?php echo $deadline?>
                                        </div>
                                    </a>
                                </div>
                                
                            <?php  
                         
                        }
                        }   
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    } 

            
                  ?>
                          


            </div>
        </div>
    </div>
    <div class="container-fluid job-body3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="apply-cont1">
                        <h3>Submit C.V</h3>
                        <p>
                            You can submit your C.V by filling the form below upload your professional resume with your cover letter to our careers
                            mail above and we will inform you about job opportunity(-ies) that regard to your application.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="apply-cont2">
                        <div class="apply-form-cont">
                            <form action="process/processapply.php" method="post" enctype="multipart/form-data">
                                
                                <div class="row">
                                    <div class="col-md-10 offset-md-1 mb-1">
                                        <div class="flash"><?php error_alert();success_alert();?></div>
                                    </div>
                                </div>
                                
                                <div class="app-full-name">
                                    <p>Full Name</p>
                                    <input type="text" name="name" placeholder="Enter your full name">
                                </div>
                                <div class="app-email">
                                    <p>Email</p>
                                    <input type="email" name="applyemail" placeholder="Enter your email address">
                                </div>
                                <div class="app-phone">
                                    <p>Phone Number</p>
                                    <input type="tel" name="applyphone" placeholder="Enter your phone number">
                                </div>
                                <div class="app-phone">
                                    <p>Subject</p>
                                    <input type="text" name="subject" placeholder="Let Subject be the name of role applied for ">
                                </div>
                                <div class="file-input">
                                    <p>Attach C.V</p>
                                    <input type="file" name="attachment">
                                </div>
                                <div class="app-submit">
                                    <input type="submit" value="Apply" class="btn btn-primary btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include"includes/footer.php";?>
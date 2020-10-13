<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESAN</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/427654d872.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>
<body>
    <div class="container-fluid px-0">
        <div id="desktop-navbar" class="desktop-nav">
      
            <div class="desk-navbrand-cont">
                <a href="#"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="desk-nav-menu">
                <div class="row mx-0">
                    <div style="background-color: #00A1D2;" class="col-lg-9 px-0">
                        <div class="desk-col1">
                            <ul>
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">HOME</a>
                                </li>
                                <li class="nav-item desk-dropdown">
                                    <a class="desk-dropbtn nav-link" href="#">ABOUT US <i class="fas fa-angle-down"></i></a>
                                    <div class="desk-dropdown-content">
                                        <a href="about-us.php">ABOUT AEP</a>
                                        <a href="our-excos.php">OUR EXECUTIVE COUNCIL</a>
                                        <a href="history.php">OUR HISTORY</a>
                                        <a href="achievements.php">OUR ACHIEVEMENTS</a>
                                    </div>
                                </li>
                                <li class="nav-item desk-dropdown">
                                    <a class="desk-dropbtn nav-link" href="#">GALLERY & EVENTS <i
                                            class="fas fa-angle-down"></i></a>
                                    <div class="desk-dropdown-content">
                                        <a href="aep-events.php">AEP EVENTS</a>
                                        <a href="#">AEP ARTS & CULTURE</a>
                                    </div>
                                </li>
                                <li class="nav-item desk-dropdown">
                                    <a class="desk-dropbtn nav-link" href="#">JOIN US <i class="fas fa-angle-down"></i></a>
                                    <div class="desk-dropdown-content">
                                        <a href="signup.php">BECOME A MEMBER</a>
                                    </div>
                                </li>
                                <li class="nav-item desk-dropdown">
                                    <a class="desk-dropbtn nav-link" href="#">AEP PROGRAMMES <i
                                            class="fas fa-angle-down"></i></a>
                                    <div class="desk-dropdown-content">
                                        <a href="aep-edu.php">AEP EDUCATION FOUNDATION</a>
                                        <a href="aep-work.php">ESAN ECONOMIC EMPOWERMENT WORKSHOP</a>
                                        <a href="aep-job.php">AEP CAREERS</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact-us.php">CONTACT US</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div style="background-color: #2C3292;" class="col-lg-3">
                        <div class="desk-col2">
                            <a href="login.php">MEMBER LOGIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav id="mobile-navbar" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        ABOUT US
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="about-us.php">ABOUT AEP</a>
                        <a class="dropdown-item" href="our-excos.php">OUR EXECUTIVE COUNCIL</a>
                        <a class="dropdown-item" href="history.php">OUR HISTORY</a>
                        <a class="dropdown-item" href="achievements.php">OUR ACHIEVEMENTS</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        GALLERY & EVENTS
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="aep-events.php">AEP EVENTS</a>
                        <a class="dropdown-item" href="#">AEP ARTS & CULTURE</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        JOIN US
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="signup.php">BECOME A MEMBER</a>
                        <a class="dropdown-item" href="mem-ren.php">MEMBERSHIP RENEWAL</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        AEP PROGRAMMES
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="aep-edu.php">AEP EDUCATION FOUNDATION</a>
                        <a class="dropdown-item" href="aep-work.php">ESAN ECONOMIC EMPOWERMENT <br> WORKSHOP</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">CONTACT US</a>
                </li>
            </ul>
            <div class="sign-btn">
                <a href="login.php"><button type="button" class="btn login-btn bg-primary text-white">MEMBER
                        LOGIN</button></a>
            </div>
        </div>
    </nav>
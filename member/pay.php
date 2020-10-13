<?php session_start();
if(!isset($_SESSION['logged'])){
    header("Location:../login.php");
}
$id = $_SESSION['logged'];
if($_SESSION['userstatus']== 'active'){
    $_SESSION['error']="Your current membership dues has notexpired";
    header("Location:dues.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esan</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/427654d872.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="container-fluid become-banner">
        <center><h1>Membership Dues</h1></center>
    </div>
    <div class="container-fluid become-body1">
        <div class="container">
            <div class="mem-form-cont">
                <div class="mem-input-cont">
                    <form id="paymentForm">
                        <div class="mem-full-name">
                            <p>Full Name</p>
                            <input type="text" name="fullname" id="fullname"
                            value="<?php if(isset($_SESSION['userfullname'])){ echo $_SESSION['userfullname'];} ?>"
                            >
                        </div>
                        <div class="mem-email">
                            <p>Email</p>
                            <input type="email" name="email" id="email"
                            value="<?php if(isset($_SESSION['useremail'])){ echo $_SESSION['useremail'];} ?>"
                            >
                        </div>
                        <div class="mem-amount">
                            <p>Amount (NGN)</p>
                            <input type="number" name="amount" id="amount" value="50000" readonly>
                        </div>
                        <div class="paystack-cont">
                            <img src="../images/paystack.png" alt="">
                        </div>
                        <div class="pay-reset-cont">
                            <div class="paynow-cont">
                                <button type="submit" onclick=" payWithPaystack() " class="btn btn-primary btn-block">
                                    Pay Now
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
    <script src="../js/pay.js"></script> 
</body>
</html>
<?php session_start();?>
<?php include "../includes/formfunctions.php";?>
<?php include "../includes/dbconnection.php";?>
<?php

//collect data from form on register.php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["fname"])) {
  $_SESSION['error'] = "Full Name is required";
  header("Location:../signup.php");
  die();
} else {
  $fname = test_input($_POST["fname"]);
}
if(empty($_POST["uname"])) {
    $_SESSION['error'] = "Username Name is required";
    header("Location:../signup.php");
    die();
  } else {
    $uname = test_input($_POST["uname"]);
  }

if(empty($_POST["email"])) {
  $_SESSION['error'] = "Email is required";
  header("Location:../signup.php");
  die();
} else {
  $email = test_input($_POST["email"]);
}

if(empty($_POST["agree"])) {
    $_SESSION['error'] = "Pls kindly accept the terms and conditions";
    header("Location:../signup.php");
    die();
  } else {
    $agree = test_input($_POST["agree"]);
  }
  
if(empty($_POST["password"])) {
  $_SESSION['error'] = "Password is required";
  header("Location:../signup.php");
  die();
} else {
  $password = test_input($_POST["password"]);
}

if(empty($_POST["rpassword"])) {
  $_SESSION['error'] = "Password needs to be confirmed";
  header("Location:../signup.php");
  die();
} else {
  $rpassword = test_input($_POST["rpassword"]);
} 

}
//generate token for user verifcation
$token = bin2hex(random_bytes(50));

//compare password and confirm password
if($_POST["rpassword"] == $_POST["password"]){
$password = $rpassword;
} else {
$_SESSION['error'] = " Password doesnt match ";
header("Location:../signup.php");
die();
} 



input_length($fname);
input_length($uname);
check_for_number_in_string($fname);
check_for_number_in_string($uname);
validity_of_mail();

//password encryption
$password = password_hash($password,PASSWORD_DEFAULT);

// check if user exist
$sql= " SELECT * FROM users WHERE user_email = '$email' ";
if($result = mysqli_query($conn,$sql)){
if (mysqli_num_rows($result)>0){
    $_SESSION['error'] = " This Email has been used before ";
    header("Location:../signup.php");
    die();
  }       
}

// insert into db
$insert = " INSERT INTO users(user_email,user_fullname,username,user_password,reg_date)VALUES ('$email','$fname','$uname','$password',CURDATE()) ";
$result = mysqli_query($conn,$insert);
if($result){
$_SESSION['message'] = " Registration Successful";
header("Location:../login.php");
}else{
echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
}
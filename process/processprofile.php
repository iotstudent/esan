<?php session_start();?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/formfunctions.php";?>
<?php

$id = $_SESSION['logged'];

//collect data from form on profile.php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
      $fname = test_input($_POST["fname"]);
      $uname = test_input($_POST["uname"]);
      $email = test_input($_POST["email"]);
      $phone = test_input($_POST["phone"]);
      $state = test_input($_POST["state"]);
      $lga = test_input($_POST["lga"]);
      $street = test_input($_POST["street"]);
      $bday = test_input($_POST["bday"]);
      $gender = test_input($_POST["gender"]);
  
  
  }
  
  
  
  
  $sql = " UPDATE users SET user_fullname = '$fname',username = '$uname',user_email = '$email',user_phone = '$phone',user_state = '$state',user_lga = '$lga',user_streetaddress = '$street',user_birthday = '$bday',user_gender = '$gender' WHERE user_id = '$id' ";
      if($result = mysqli_query($conn,$sql)){
        // reset data  session        
            $_SESSION['username'] = $uname;
            $_SESSION['userfullname'] = $fname;
            $_SESSION['useremail'] = $email;
            $_SESSION['userphone'] = $phone;
            $_SESSION['usergender'] = $gender;
            $_SESSION['userstate'] = $state;
            $_SESSION['userlga'] = $lga;
            $_SESSION['userstreet'] = $street;
            $_SESSION['userbday'] = $bday;
            $_SESSION['message'] = " Profile successfully updated";
            header("Location:../member/index.php");
            die();

        }else{
                
            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
        
        }


       
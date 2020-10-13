<?php session_start();?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/formfunctions.php";?>
<?php include "../includes/sendmail.php";?>
<?php

//check for errors in the email from form on forgot.php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["applyemail"])) {
      $_SESSION['error'] = " Email is required";
      header("Location:../aep-job.php");
      die();
    } else {
      $applyemail =  test_input($_POST["applyemail"]);
    }
    if(empty($_POST["name"])) {
        $_SESSION['error'] = " your name is required";
        header("Location:../aep-job.php");
        die();
      } else {
        $name =  test_input($_POST["name"]);
      }
     
      if(empty($_FILES["attachment"])) {
        $_SESSION['error'] = " CV is required";
        header("Location:../aep-job.php");
        die();
      } else {
        $attachment = $_FILES["attachment"];
      }

      if(empty($_POST["subject"])) {
        $_SESSION['error'] = " Subject is required";
        header("Location:../aep-job.php");
        die();
      } else {
        $subject =  test_input($_POST["subject"]);
      }
      $applyphone =  test_input($_POST["applyphone"]);
  }

 //send mail
sendApplyEmail($applyemail,$name,$applyphone,$attachment,$subject);


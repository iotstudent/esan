<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php


    //create member from member page
    if(isset($_POST['create'])){

        $fname =  test_input($_POST["fname"]);
        $uname =  test_input($_POST["uname"]);
        $email =  test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        //password encryption
        $password = password_hash($password,PASSWORD_DEFAULT);
        $sql= "INSERT INTO users(user_fullname,username,user_email,user_password)VALUES('$fname','$uname','$email','$password')";
        $insert = mysqli_query($conn,$sql);
        if($insert){
        $_SESSION['message']=" Member created ";
        header('Location:../admin/membersuc.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    }   



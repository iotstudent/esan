<?php session_start();?>
<?php include "../includes/dbconnection.php";?>
<?php
$id=$_SESSION['logged'];
$renewal_date=date('Y-m-d');
$renewal_ref=$_GET['pref'];
$renewal_date;

 

$insert = " INSERT INTO membership_renewal(user_id,renewal_date,renewal_end,renewal_ref)VALUES ('$id','$renewal_date',DATE_ADD('$renewal_date', INTERVAL 1 YEAR),'$renewal_ref') ";
$result = mysqli_query($conn,$insert);
if($result){
$_SESSION['message'] = " Payment was successful ";
header("Location:../member/dues.php");
}
?>
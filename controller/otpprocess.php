<?php 
include '../config.php';
$admin=new Admin();
echo $otp=$_SESSION['otp'];
echo $enteredotp=$_POST['otp'];
if($otp==$enteredotp){
    echo "<script>alert('Otp matched')</script>";
    header('location:../createpassword.php');
}else{
    echo "<script>alert('Code did not match');window.location='../otpenter.php';</script>";
}

?>

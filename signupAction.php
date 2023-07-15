<!-- written by ramya dandamudi -->
<?php
include ("connection.php");
session_start();
$user = $_POST['user'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];

// $qr = "select * from categorytable where categoryname='$categoryname'";
$qr = "SELECT * FROM `signup` WHERE user='$user'";
$rs = mysqli_query($connection,$qr);
if(mysqli_num_rows($rs)>0){
    header("Location:signup.php?err=0");
}else{
    $insert  = "INSERT INTO `signup`(`user`, `phone`, `pass`) VALUES ('$user','$phone','$pass')";
    $res =mysqli_query($connection,$insert);
    if($res){
        $_SESSION['ADMINEMAIL'] = $user;
         header("Location:about.php");
    }else{
         header("Location:signup.php?err=1");
    }
}

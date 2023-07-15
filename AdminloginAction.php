<!-- work on this page is done by Smarth Sharma -->
<?php
// starting a session
session_start();
// building a connection.
include ("connection.php");
// getting values
$user = $_POST['user'];
$pass = $_POST['pass'];
// selecting table
$qr = "SELECT * FROM `admin` WHERE email='$user' and pass='$pass'";
$result = mysqli_query($connection,$qr);

if(mysqli_num_rows($result)>0){
    $_SESSION['ADMIN-EMAIL'] = $user;
    header("Location:admin.php");
}else{
    
    header("Location:adminlogin.php?err=0");
}

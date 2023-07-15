<?php
// work on this page is done by Daksh Sharma
// starting a session
session_start();
// building a connection
include ("connection.php");
// getting a value
$user = $_POST['user'];
$pass = $_POST['pass'];
// Selecting a query
$qr = "SELECT * FROM `signup` WHERE user='$user' and pass='$pass'";
$result = mysqli_query($connection,$qr);// runnong tje query
// checking for user.
if(mysqli_num_rows($result)>0){
    $_SESSION['ADMINEMAIL'] = $user;
    header("Location:about.php");
}else{
    header("Location:login.php?err=0");
}

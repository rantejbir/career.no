<!-- work on this page is done by Rantejbir Singh -->
<?php
// starting a session to secure the page.
session_start();
//including the connection file to connect to the database.
include ("connection.php");
//getting the values of the email and msg by post method.
$user = $_POST['email'];
$msg = $_POST['msg'];
//creating insert in the the table
$qr = "INSERT INTO `question`(`email`, `query`) VALUES ('$user','$msg')";
$result = mysqli_query($connection,$qr);
    if($result){        
         header("Location:about.php?err=1");
    }else{
         header("Location:about.php?err=0");
    }

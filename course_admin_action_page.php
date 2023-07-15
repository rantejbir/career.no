<!-- Work on this apge is done by Rantejbir Singh -->
<?php
//connecting to the database
include ("connection.php");
// starting the session 
session_start();
// getting the values.
$firstname = $_POST['firstname'];
$Description = $_POST['Description'];
$sk1 = $_POST['sk1'];
$sk2 = $_POST['sk2'];
$sk3 = $_POST['sk3'];
$edu1 = $_POST['edu1'];
$edu2 = $_POST['edu2'];
$edu3 = $_POST['edu3'];
// inserting in the table 
$qr = "INSERT INTO `career_tb`( `name`, `descr`, `skill1`, `skill2`, `skill3`, `edu1`, `edu2`, `edu3`) VALUES ('$firstname','$Description','$sk1','$sk2','$sk3','$edu1','$edu2','$edu3')";
$rs = mysqli_query($connection,$qr);


    if($rs){
        
         header("Location:admin.php?err=2");
    }else{
         header("Location:admin.php?err=1");
    }


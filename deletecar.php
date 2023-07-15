<!-- work on this page is done by Rantejbir Singh -->
<?php
// building connection
include("connection.php");
// getting is to delete particular card
$id = $_GET['id'];
// selecting the row
$select = "SELECT * FROM `career_tb` WHERE id='$id'";
$res1 = mysqli_query($connection,$select);
    // deleting the row
    $delete = "DELETE FROM `career_tb` WHERE id='$id'";
    $res = mysqli_query($connection,$delete);
    if($res){
        header("Location:admin.php");
    }

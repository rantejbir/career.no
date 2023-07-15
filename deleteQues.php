<!-- work on this apge is done by Rantebir Singh -->
<?php
// connection page
include("connection.php");
$id = $_GET['id'];
// selecting the row
$select = "SELECT * FROM `question` WHERE id='$id'";
$res1 = mysqli_query($connection,$select);
// deleting the row
    $delete = "DELETE FROM `question` WHERE id='$id'";
    $res = mysqli_query($connection,$delete);
    if($res){
        header("Location:admin.php");
    }

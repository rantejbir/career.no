<!-- Work on this page is done by Ramya Dandamudi -->
<?php
//connecting to the database
$connection = mysqli_connect("localhost:8111","root","","career_db") or die("unavble to connect");

if(!$connection){
    mysqli_error("Couldn't Connect to Database");
}

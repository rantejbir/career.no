<!-- written by ramya dandamudi -->
<?php
session_start();

session_destroy();
header("Location:index.php");
?>
<!-- work on this page is done by Rantejbir Singh -->
<?php
session_start();
// starting session
if (!isset($_SESSION['ADMINEMAIL'])) {
    header("Location:login.php");
}
// if search box is used
if(isset($_GET['err']))
{
$search=$_POST['search'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>
<body>
<?php 
    //adding header 
    include_once('courseHeader.php');
    // building connection
    include_once('connection.php');
    // for search box
    if(isset($_GET['err']))
    {
        $qrProd = "SELECT * FROM `career_tb` where name like '%$search%'";
    }
    // for sorting
    elseif(isset($_GET['sort'])){
        $qrProd = "SELECT * FROM `career_tb` order by name asc";
    }
    // for  filter
    elseif(isset($_GET['filter'])){
        $filter=$_GET['filter'];
        $qrProd = "SELECT * FROM `career_tb` where skill1 like '%$filter%' or skill2 like '%$filter%' or skill3 like '%$filter%' ";
    }
    // for normal display for cards
    else{
        $qrProd = "SELECT * FROM `career_tb` ";
    }
        $resProd = mysqli_query($connection,$qrProd);
?>

    <!-- sort and reset buttons -->
    <div class="sort-filter">
        <button class="learn-more"><a href="courses.php">reset</a></button>
        <button class="learn-more"><a href="courses.php?sort=0">sort</a></button>
        <button class="learn-more"><a href="courses.php?filter=science">science</a></button>
        <button class="learn-more"><a href="courses.php?filter=mathematics">Mathematics</a></button>
        
    </div>
    
    <div class="wrapper-c">
        <!-- printing cources in flex cards for responsiveness. -->
        <div class="cards_wrap-c">
            <!-- using a while loop to print cards -->
            <?php
                while($rowProd = mysqli_fetch_array($resProd)){
                ?>
                <!-- creating multiple cards -->
                <div class="card_item-c">
                    <div class="card_inner-c">
                        <div class="desc-c"><h1><?php echo $rowProd['name'];  ?></h1></div>
                        <div class="desc1-c"><p><?php echo $rowProd['descr'];  ?></p></div>

                        <div class="skills-ed">
                            <!-- printing skills -->
                        <div class="descr-c">
                            <h4>SKILLS</h4>

                            <ul>
                                <li><?php echo $rowProd['skill1'];  ?></li>
                                <li><?php echo $rowProd['skill2'];  ?></li>
                                <li><?php echo $rowProd['skill3'];  ?></li>
                            </ul>
                        </div>
                        <!-- printing education -->
                        <div class="descr-c">
                            <h4>EDUCATION</h4>

                            <ul>
                                <li><?php echo $rowProd['edu1'];  ?></li>
                                <li><?php echo $rowProd['edu2'];  ?></li>
                                <li><?php echo $rowProd['edu3'];  ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
            
        </div>
    </div>
    
<?php  include_once('footer.php');?>
</body>
</html>

<!-- work on this page is done by Rantejbir Singh -->
<?php
session_start();
// startinf admin session to secure the page.
if (!isset($_SESSION['ADMIN-EMAIL'])) {
    header("Location:adminLogin.php");
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- this link tag is use the icons from font awesome website. -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!-- HEADER FOR the admin -->
    <header class="header-nav">
	    <h1 class="logo-header1"><a href="index.php"><i class="fa-brands fa-ioxhost"></i> Career.now</a></h1>
        <ul class="main-nav">
          <li><a href="admin.php">Home</a></li>
          <li><a href="logout.php">log out</a></li>
        </ul>
	</header>

    <div class="admin-head">
        <h1>Hi Admin</h1>
    </div>
    <!-- flex to create cards for add course form and to show table for queries. -->
    <div class="wrapper-c">
        <div class="cards_wrap-c">
            <div class="card_item-c">
                    <div class="admin-header">
                        <h1 class="text-success">Add  Course!</h1>
                        <form action="course_admin_action_page.php" method="post">
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="fname" name="firstname" placeholder="name..">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="Description">Description</label>
                                </div>
                                <div class="col-75">
                                    <textarea id="Description" name="Description" placeholder="Write something.." style="height:100px"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Skill 1</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="sk1" name="sk1" placeholder="">
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Skill 2</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="sk2" name="sk2" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Skill 3</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="sk3" name="sk3" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Education 1</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="edu1" name="edu1" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Education 2</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="edu2" name="edu2" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Eduaction 3</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="edu3" name="edu3" placeholder="">
                                </div>
                            </div>
                        
                            <div class="row-btn">
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                        <!-- Printing msg to user that course is added successfully. -->
                        <div id="center-login">
                            <?php
                                if(isset($_GET['err'])){
                                if($_GET['err']==1){
                                    echo "<alert class='alert alert-success'>Error occured</alert>";
                                }elseif($_GET['err']==2){
                                    echo "<alert class='alert alert-danger'>Course Added Successfully</alert>";
                                }
                            }
                            ?>
                    </div>
                    </div>
                </div>
                <div class="card_item-c">
                    <table class="table table-bordered">
                        <tr>
                            <th>Srno</th>
                            <th>E-mail</th>
                            <th>Question</th>
                            <th colspan="2">Action</th>
                        </tr>
                        <!-- printing queries in the table. -->
                        <?php
                            include ("connection.php");
                            // selecting from the tabel question.
                            $select = "SELECT * FROM `question`";
                            $res = mysqli_query($connection,$select);
                            $num = 1;
                            while($row = mysqli_fetch_array($res)){
                                echo "<tr>";
                                echo "<th>".$num."</th>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['query']."</td>";
                                echo "<td><a href = 'mailto:".$row['email']."' ><i class='fa-solid fa-envelope'></i></a></td>";
                                echo "<td><a href='deleteQues.php?id=".$row['id']."'><i class='fa fa-trash-alt text-danger'></i></a></td>";
                                echo "</tr>";
                                $num++;
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div class="table2">
                <h1 >Courses</h1>
                <table class="table table-bordered">
                    <tr>

                        <th>Srno</th>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <!-- printing courses in table. -->
                    <?php
                        include ("connection.php");
                        $select = "SELECT * FROM `career_tb`";
                        $res = mysqli_query($connection,$select);
                        $num = 1;
                        while($row = mysqli_fetch_array($res)){
                            echo "<tr>";
                            echo "<th>".$num."</th>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['descr']."</td>";
                            echo "<td><a href='deletecar.php?id=".$row['id']."'><i class='fa fa-trash-alt text-danger'></i></a></td>";
                            echo "</tr>";
                            $num++;
                        }
                    ?>
                </table>
            </div>
        </div>      
    </div>  
<?php include("footer.php"); ?>
</body>
</html>
<!-- work on this page is done by Daksh Sharma -->
<?php
session_start();

if (!isset($_SESSION['ADMINEMAIL'])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>About Us</title>
</head>
<body>
<header class="header-nav">
    <!-- printing logo -->
		<h1 class="logo-header1"><a href="index.php"><i class="fa-brands fa-ioxhost"></i> Career.now</a></h1>
      <ul class="main-nav">
        <!-- nav-links -->
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="courses.php">courses</a></li>
          <li><a href="logout.php">log out</a></li>
      </ul>
	</header> 
    <div class="wrapper">
    
        <div class="cards_wrap">
            <div class="card_item">
                <div class="card_inner">
                    <h1>ABOUT &nbsp;   US</h1><br>
                        <p>Established in 2022, our team is dedicated to finding you the right career. Whether you are looking for a temporary, contract, or permanent position. Career now will help you find the right job nationwide. We work with the nation’s top employers by seeking the skilled resources available in the shortest turnaround time. We have won many loyal clients within a wide range of industries – Finance, IT, Construction, manufacturing, management, education, logistics, and many more clients join us every day. We are passionate about staffing and have experience working with private, public, and government sectors. </p>                    
                </div>
            </div>
            <div class="card_item1">
                <div class="card_inner">
                    <form action="action_page.php" method="post">
                        
                        <h1 class="contact-us">Conatct Us</h1>
                        <div class="container-form">
                          <!-- <label for="email"><b>Email</b></label> -->
                          <input type="email" placeholder="Email" name="email" required>
                    
                          <!-- <label for="msg"><b>Query</b></label> -->
                          <input type="textarea" placeholder="Write your Query..." name="msg"  required>
                      
                          <button type="submit">Submit</button>
                          <div id="center-login">
                            <?php
                                if(isset($_GET['err'])){
                                if($_GET['err']==1){
                                    echo "<alert class='alert alert-success'>We will answer you soon</alert>";
                                }elseif($_GET['err']==0){
                                    echo "<alert class='alert alert-danger'>Error Try Agian!</alert>";
                                }
                            }
                            ?>
			            </div>
                    </div>
                      
                        
                    </form>  
                </div>
            </div>
        </div>
    </div>
    
    <section>
        <div class="wrapper-flex">
            <div class="container">
                <div class='banner-img'></div>
                <img src='images/ramya.jpg' alt='profile image' class="profile-img">
                <p class="name">Ramya Dandamudi</p>
                <!-- <p class="description1">Public Relations</p> -->
                <p class="description"><i class="fa-solid fa-phone"></i> +1(613) 986-5363 </p>
                <p class="description1"> Creative and skilled communicator with a niche in public relations and developing content that influences and promotes digital and social media solutions.</p>
    
    
            </div>
        
            <div class="container">
              <div class='banner-img'></div>
              <img src='images/daksh.png' alt='profile image' class="profile-img">
              <p class="name">Daksh Sharma</p>
              <p class="description"><i class="fa-solid fa-phone"></i> +1(613) 878-1412 </p>
              <p class="description1"> Creative and skilled communicator with a niche in public relations and developing content that influences and promotes digital and social media solutions.</p>
    
            </div>
        
            <div class="container">
              <div class='banner-img'></div>
              <img src='images/sam.jpg' alt='profile image' class="profile-img">
              <p class="name">Sam Sharma</p>
              <p class="description"><i class="fa-solid fa-phone"></i> +1(343) 558-3943 </p>
              <p class="description1">Extensive experience overseeing the infrastructure of technical operations, managing the IT team, and tracking technology to achieve our business goals. </p>
    
            </div>
            <div class="container">
                <div class='banner-img'></div>
                <img src='images/rantej.jpeg' alt='profile image' class="profile-img">
                <p class="name">Rantejbir Singh</p>
                <p class="description"><i class="fa-solid fa-phone"></i> +1(873) 355-7040 </p>
                <p class="description1">Knowledge in operational planning, performing staff evaluations, and supervising all daily activities. Responsible for business productivity, efficiency, and organization of daily tasks. </p>
    
            </div>
        </div>
    </section>
    <?php include('footer.php')?>
</body>
</html>
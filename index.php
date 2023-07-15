<!-- this is our home page -->
<!-- work on this page is done by daksh Sharma -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>home</title>
</head>
<body>
    <?php include('header.php')?>
    <!-- printing info about website -->
    <section>
        <div class="container-index">
            <img src="images/back.jpg" alt="Norway" style="width:100%;">
            <div class="text-block">
              <h1>Canada's <i class="fa-brands fa-canadian-maple-leaf"></i> Top Career Guides</h1>
              <!-- <h4>Instantly choose your Career.</h4> -->
              <ul>
                <li>Learn From proffesionals.</li>
                <li>Make Informal desicions</li>
                <li>Discover Yourself</li>
              </ul>
              <button class="learn-more"><a href="login.php">Learn more</a></button>
            </div>
          </div>
    </section>
    <!-- adding a footer -->
     <?php 
    include('footer.php')?>
</body>
</html>
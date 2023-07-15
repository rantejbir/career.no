<!-- work on this page is done by daksh Sharma -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Log In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	
	<link rel="stylesheet" href="../career.now/style1.css">
	<link rel="stylesheet" href="../career.now/style.css">
	<!-- using font awesome to print icons -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	
</head>

<body class="body-1">
	<!-- printing logo -->
	<div class="container-login">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Career <span>.now</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<!-- form gor log in asking for values of email and password  -->
			<form name="login-form" class="form" action="loginAction.php"method="post"  id="form" >
			
				<div class="input-control-1">
					<label for="username-login">Email</label>
					<br/>
					<input type="text" id="username-login" name="user" >
					<br/>
					
				</div>
				<div class="input-control-2">
					<label for="password">Password</label>
					<br/>
					<input type="password" id="password" name="pass">
					<br/>
					<div class="error"></div>
				</div>
				<button type="submit">Log In</button>
				<br/>
			</form>
			<!-- printing error if user is not found -->
			<div id="center-login">
				<?php
					if(isset($_GET['err'])){
					if($_GET['err']==0){
						echo "<alert class='alert alert-danger'>Invalid Login</alert>";
					}
				}
				?>
			</div>
			<a href="signup.php"><p class="small">New? sign Up</p></a>
		</div>
	</div>
	<!-- validating a form -->
	<script  src="java_login.js" defer></script>

	
</body>



</html>
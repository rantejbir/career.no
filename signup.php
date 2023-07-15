<!-- done by daksh and smarth sharma -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sign Up</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style1.css">
	<!-- font awesome to use icons in page -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body class="body-1">
	<div class="container-login">
		<!-- printing logo -->
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Career <span>.now</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Sign Up</h2>
			</div>
			<!-- signup form -->
			<form class="form" method="post" action="signupAction.php" id="form">
				<div class="input-control-1">
				<label for="username-login">Email</label>
					<br/>
					<input type="text" id="username-login" name="user" >
					<br/>
				</div>
				<div class="input-control-2">
					<label for="Telephone">TelePhone</label>
				<br/>
					<input type="tel" id="Telephone" name="phone">
				<br/>
				</div>
				<div class="input-control-3">
					<label for="password">Password</label>
				<br/>
					<input type="password" id="password" name="pass">
				<br/>
				</div>
				<div class="input-control-4">
					<label for="password2">Confirm Password</label>
				<br/>
					<input type="password" id="password2">
				<br/>
				</div>
				<button type="submit">Sign Up</button>
			</form>
			<div id="center-login">
				<!-- printing error if user is invalid -->
				<?php
					if(isset($_GET['err'])){
					if($_GET['err']==1){
						echo "<alert class='alert alert-success'>Error occured</alert>";
					}elseif($_GET['err']==0){
						echo "<alert class='alert alert-danger'>User Already Exists</alert>";
					}
				}
				?>
			</div>
			<br/>
			<a href="login.php"><p class="small">Already have a account? log in</p></a>
			<!-- using validation to validate the form -->
		<script src="sign.js" defer></script>
		</div>
	</div>
</body>



</html>
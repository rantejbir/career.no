<!-- this page is completed by smarth Sharma -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Log In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../career.now/style1.css">
	<link rel="stylesheet" href="../career.now/style.css">
	<!-- this is font awesome link to use icons in page -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	
</head>

<body class="body-1">
	<!-- printing heading   -->
	<div class="container-login">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Career<span>.now</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<form name="login-form" class="form" action="AdminLoginAction.php"method="post"  id="form" >
			
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
				<button type="submit">Sign In</button>
				<br/>
			</form>
			<!-- IF login is not in the system it will give an error. -->
			<div id="center-login">
				<?php
					if(isset($_GET['err'])){
					if($_GET['err']==0){
						echo "<alert class='alert alert-danger'>Invalid Login</alert>";
					}
				}
				?>
			
			</div>
		</div>
	</div>
	<!-- using javascript validation -->
	<script  src="java_login.js" defer></script>

	
</body>



</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="css/login.css">
</head>

<body>
	<!-- partial:index.partial.html -->
	<nav class="navbar"></nav>
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>Hello Seller.</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Curabitur et est sed felis aliquet sollicitudin</p>
				<span>
					<p>login with social media</p>
					<a href="https://www.facebook.com/login/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/login/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</span>
			</div>
		</div>


		<div class="right">
			<p>Don't have an account? <a href="regis.php" class="aahan">Register</a> it takes less than a minute</p>
			<div class="wrapper">
				<header>Login Form</header>
				<form action="Seller_dashboard.php">
					<div class="field email">
						<div class="input-area">
							<input type="text" placeholder="Email Address" id="email">
							<i class="icon fas fa-envelope"></i>
							<i class="error error-icon fas fa-exclamation-circle"></i>
						</div>
						<div class="error error-txt">Email can't be blank</div>
					</div>
					<div class="field password">
						<div class="input-area">
							<input type="password" placeholder="Password" id="pwd1">
							<i class="icon fas fa-lock"></i>
							<i class="error error-icon fas fa-exclamation-circle"></i>
						</div>
						<div class="error error-txt">Password can't be blank</div>
					</div>
					<div class="pass-txt"><a href="#">Forgot password?</a></div>
					<input type="submit" value="Login" onclick="login()">
				</form>
				<div class="sign-txt">Not yet member? <a href="regis.php">Signup now</a></div>
			</div>

			<script src="validation/vali.js"></script>


</body>

</html>
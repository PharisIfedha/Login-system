<?php include('function.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pharis' website login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">


	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="" required>
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="" required>
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" required>
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2" required>
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
<style>
	body{
        background-image: url(./images/Desert.jpg);
		font-size: 120%;
		</style>
</html>
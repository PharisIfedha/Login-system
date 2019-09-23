<?php include('function.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pharis' website login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
    </div>
    
	<form method="post" action="login.php">

        <?php echo display_error(); ?>
        <h2>Login to Pharis' Website.</h1><br>
        <a class="btn btn-lg btn-linkedin display-block" data-disable-with="<i class=&quot;fa fa-spinner fa-spin&quot; />" 
    rel="nofollow" data-method="post" href="https://www.facebook.com/"><i class="fa fa-WhatsApp-square fa-inverse"></i> login with facebook</a>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
<style>
    body{
        background-image: url(./images/ifedha.jpg);
		font-size: 120%;
    </style>
</html>
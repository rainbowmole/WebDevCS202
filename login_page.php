<!doctype html> 
<html lang="en">
<head>
	<title>Camacho's Website</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div id="container">
		<?php include('header.php'); ?>
		<?php include('nav_login.php'); ?>
		<?php include('info-col.php'); ?>
		
		<div id='login'>
			<h2>Login</h2>
			<div id="pop_login">
				<form action="login.php" method="post">

					<p id="log_email"><label class="label" for="email">Email Address: </label>
					<input type="text" id="login_email" name="email" size="30" maxlength="50"
					value="<?php  if(isset($_POST['email'])) echo $_POST['email'];?>">
					</p>

					<p id="login_psword"><label class="label" for="psword1">Password: </label>
					<input type="password" id="login_psword1" name="psword1" size="20" maxlength="40"
					value="<?php  if(isset($_POST['psword1'])) echo $_POST['psword1'];?>">
					</p>

					<p><input type="submit" id="submit_login" name="login" value="login"></p>
				</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>

</html>
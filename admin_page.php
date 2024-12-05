<?php
	session_start(); 
	//checking for session id or admin
	if(!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)){
		header("location: login_page.php");
		exit();
	}
?>
<!doctype html> 
<html lang="en">
<head>
	<title>Admin Dashboard</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div id="container">
		<?php include('header.php'); ?>
		<?php include('nav_admin.php'); ?>
		<?php include('info-col.php'); ?>
		
		<div id='admin_content'>
			<h2>Admin Dashboard</h2>
			<image id=admin_dashboard src="dashboard.png"></image>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>

</html>
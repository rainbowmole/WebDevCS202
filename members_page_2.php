<?php
	session_start(); 
	//checking for session id or admin
	if(!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)){
		header("location: login_page.php");
		exit();
	}
?>
<!doctype html> 
<html lang="en">
<head>
	<title>Member's Page</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div id="container">
		<?php include('header.php'); ?>
		<?php include('nav_members_page.php'); ?>
		<?php include('info-col.php'); ?>
		
		<div id='member_page'>
			<h2>Member's Page</h2>
			<div id='cat_content'>
				<h3>CAT PICS FOR YOU o((>ω< ))o</h3>
				<div id='cat_pics'>
					<image id=cats src="cat_shark.png"></image>
					<image id=cats src="cat_glass.png"></image>
					<image id=cats src="cat_kiwi.png"></image>
					<image id=cats src="cat_ice_cream.png"></image>
				</div>
				
			</div>

			</div>
			<p>
			
			</p>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>

</html>
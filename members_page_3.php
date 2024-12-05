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
			<div id='hanni_content'>
				<h3>HANNI MY LOVE (づ￣ 3￣)づ</h3>
				<p>AINT SHE CUTE GUYS, THAT'S MY GF BTW ( *︾▽︾)</p>
				<div id="hanni_pics">
					<image id=hanni_my_love src="hanni.png"></image>
					<image id=hanni_my_love src="hanni_kiss.png"></image>
					<image id=hanni_my_love src="hanni_sun.png"></image>
					<image id=hanni_my_love src="hanni_photo.png"></image>
				</div>
			</div>
			<div id='minji_content'>
				<h3>MINJIIIII (ﾉ◕ヮ◕)ﾉ*:･ﾟ✧</h3>
				<p>JUST LOOK AT HER</p>
				<div id="minji_pics">
					<image id=minji src="minji_1.png"></image>
					<image id=minji src="minji_2.png"></image>
					<image id=minji src="minji_3.png"></image>
					<image id=minji src="minji_4.png"></image>
				</div>
			</div>

			<p>
			
			</p>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>

</html>
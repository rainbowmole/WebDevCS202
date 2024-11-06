<!doctype html> 
<html lang="en">
<head>
	<title>Deleting User</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div id="container">
		<?php include('header.php'); ?>
		<?php include('nav.php'); ?>
		<?php include('info-col.php'); ?>
		
		<div id='delete_user'>
			<h2>Deleting Record</h2>
			<?php
				//checking lang kung valid id 
				if((isset($_GET['id'])) && (is_numeric($_GET['id']))){
					$id = $_GET['id'];
				}elseif((isset($_POST['id'])) && (is_numeric($_POST['id']))){
					$id = $_POST['id'];
				}else{//oh no.. id not found
					echo '<p class="error">This page has been accessed by mistake.</p>';
					echo '<a href="register-view-users.php">Go back</a>';
					exit();
				}
				require('mysqli_connect.php');
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					if($_POST['sure'] == 'Yes'){
						//aww delete na 
						$q = "delete from users where user_id = $id"; //query to delete the user
						$result = @mysqli_query($dbcon, $q);
						if(mysqli_affected_rows($dbcon) == 1){
							//no problem in deleting
							echo '<h3>The Record has been deleted</h3>';
							echo '<a href="register-view-users.php">Go back</a>';
						}else{
							//may problem in deleting
							echo '<h3>User does not exist ERROR: 19 </h3>';
						}
					}else{
						echo '<h3>No record deleted</h3>';
						echo '<a href="register-view-users.php">Go back</a>';
					}
				}else{
					//display user information
					$q = "Select concat(fname, ' ', lname) from users where user_id=$id";
					$result = @mysqli_query($dbcon, $q);
					if(mysqli_affected_rows($dbcon) == 1){
						//user is found
						$row = mysqli_fetch_array($result, MYSQLI_NUM);
						echo "<h3>Are you sure you want to permanently delete $row[0]?</h3>";
						echo '
						<form action="delete_user.php" method="post">
						<input id="submit-yes" type="submit" name="sure" value="Yes">
						<input id="submit-no" type="submit" name="sure" value="No">
						<input type="hidden" name="id" value="'.$id.'">
						</form>
						';
					}else{
						//no user information
						echo 'No user found';
					}
				}
				mysqli_close($dbcon);
			?>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>

</html>
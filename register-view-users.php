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
	<title>Registered Users Page</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div id="container">
		<?php include('header.php'); ?>
		<?php include('nav_admin.php'); ?>
		<?php include('info-col.php'); ?>
		
		<div id='view_users'>
			<h2>Registered Users</h2>
			<p>
			<?php
				require('mysqli_connect.php');
				//fetch data sa query
				$q = "SELECT user_id, fname, lname, email, DATE_FORMAT(registration_date, '%M %d, %Y') as regdate from users ORDER BY registration_date ASC";
				$result = @mysqli_query($dbcon, $q);
				if ($result) { //successful fetching
					echo '<table>
							<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Registration date</th>
							<th>Actions</th>
							</tr>';
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
						echo '<tr>
						<td>' .$row['lname'].', '.$row['fname']. '</td>
						<td>' .$row['email'] .'</td>
						<td>' .$row['regdate'] . '</td>
						<td><a href="edit_user.php?id='.$row['user_id'].'">Edit<a/></td>
						<td><a href="delete_user.php?id='.$row['user_id'].'">Delete<a/></td>
						</tr>';
					}
					echo '</table>';
					mysqli_free_result($result);
				}else{ //unsuccessful fetching
					echo '<p class="error">The current users could not be retrieved due to a system error. Please report this incident to the SysAdmin. Error Code: 17</p>';
				}
				mysqli_close($dbcon);
			?>
			</p>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>

</html>
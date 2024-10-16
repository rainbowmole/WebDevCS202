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
		<?php include('nav.php'); ?>
		<?php include('info-col.php'); ?>
		
		<div id='view_users'>
			<h2>Registered Users</h2>
			<p>
			<?php
				require('mysqli_connect.php');
				//fetch data sa query
				$q = "SELECT fname, lname, email, DATE_FORMAT(registration_date, '%M %d, %Y') as regdate from users ORDER BY registration_date ASC";
				$result = @mysqli_query($dbcon, $q);
				if ($result) { //successful fetching
					echo '<table>
							<tr>
							<td>Name</td>
							<td>Email</td>
							<td>Registration date</td>
							</tr>';
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
						echo '<tr>
						<td>' .$row['lname'].', '.$row['fname']. '</td>
						<td>' .$row['email'] .'</td>
						<td>' .$row['regdate'] . '</td>
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
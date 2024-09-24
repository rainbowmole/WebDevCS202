<?php
$dbcon = @mysqli_connect('localhost', 'nathancamacho', 'nathancamacho', 'members_camacho')
Or die('Could not connect to MYSQL. Error in '.mysql_connect_error());
mysqli_set_charset($dbcon, 'ytf8');
?>
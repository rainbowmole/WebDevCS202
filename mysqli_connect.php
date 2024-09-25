<?php
$dbcon = @mysqli_connect('localhost', 'nathancamacho', 'nathancamacho', 'members_camacho')
OR die('Could not connect to MYSQL. Error in '.mysqli_connect_error());
mysqli_set_charset($dbcon, 'utf8');

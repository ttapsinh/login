<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>

<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "test";
$connection= new mysqli($hostName,$userName,$password,$dbName);

if ($connection) {
	echo "connected";
}
else {
	echo "not connected";
}

?>











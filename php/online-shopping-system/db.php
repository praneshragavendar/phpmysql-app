<?php

$servername = "db.fluxcd.svc.cluster.local";
$username = "msois";
$password = "Msois@123";
$db = "myecommerce";

// Create connection
$con = mysqli_connect($servername,$username,$password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

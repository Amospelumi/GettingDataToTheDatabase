<?php 

$dbhost = "business116";
$name = "phanqtgr_wp140";
$dbpass = "@+m()sph3r3";
$dbname = "phanqtgr_presentation";

$dbconnect = mysqli_connect($dbhost, $name, $dbpass, $dbname);

if($dbconnect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
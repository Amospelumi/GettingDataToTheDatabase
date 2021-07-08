<?php 

$dbhost = "";
$name = "";
$dbpass = "";
$dbname = "";

$dbconnect = mysqli_connect($dbhost, $name, $dbpass, $dbname);

if($dbconnect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>

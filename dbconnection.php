<?php 

$dbhost = "business116";
$name = "phanqtgr_gabby";
$dbpass = "@+m()sph3r3";
$dbname = "phanqtgr_BuildYourBrand";

$dbconnect = mysqli_connect($dbhost, $name, $dbpass, $dbname);

if($dbconnect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
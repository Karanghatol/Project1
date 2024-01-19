<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "project1";

$con = new mysqli($host, $username, $password, $database);

if ($con->connect_error) {
    echo "Connetion failed" . die(" / died") . mysqli_connect_error();
}
?>
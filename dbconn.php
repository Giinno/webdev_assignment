<?php
// Connection name
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "assignment";

$connection = mysqli_connect($servername, $username, $password, $database_name);

if($connection->connect_error) {
    echo("Connection failed");
}
?>

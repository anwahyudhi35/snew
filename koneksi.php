<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bayi";

$dbh = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbh->connect_error) {
    die("Connection failed: " . $dbh->connect_error);
}

?>
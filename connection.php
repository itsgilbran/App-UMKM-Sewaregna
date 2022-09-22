<?php
$dbname = "webgis";
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    echo "Connection failed";
} else {
    echo "Connection success";
}

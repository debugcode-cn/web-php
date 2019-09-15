<?php
$mysqli = new mysqli('10.0.0.6', 'user-KHGhAGxR7s' , 'e%F!)~necyfxeRb8dA`$', 'db-FJWCPbrTbg');
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
echo 'Success... ' . $mysqli->host_info . "\n";

$mysqli->close();
<?php
$mysqli = new mysqli("localhost", "root", "", "oems");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>
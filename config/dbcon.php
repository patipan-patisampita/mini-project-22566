<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "blog-app";

//1.Create database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

//2.Check database connection
if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
} else {
    print "Connected successfully";
}

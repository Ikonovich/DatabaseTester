<?php
print("Hello world");

$server = "localhost";
$username = "user";
$password = "password";

// Create a connection
$conn = new mysqli($server, $username, $password);

// Verify connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

print "We done databased son";


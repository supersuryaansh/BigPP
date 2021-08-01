<?php

//set this file accordingly
$servername = "localhost";
$username = "supersu";
$password = "abc@123";
$dbname = "bigpp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

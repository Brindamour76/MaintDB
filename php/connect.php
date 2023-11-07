<?php

//Contains connection to DB details
//Create method to access settings file (JSON??) with database details
$server_name = "";
$user_name = "";
$password = "";
$db_name = "";

// Connect to the database
$mysqli = new mysqli($server_name, $user_name,$password,$db_name);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
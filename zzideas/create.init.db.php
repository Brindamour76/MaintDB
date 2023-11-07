<?php

//Create an intial database that will later be destroyed
//Create a single table:
//Create a single root user for this database to allow login

//Create query to create database
$query_create_db = "CREATE DATABASE IF NOT EXISTS init_db";

//Create query to create table
$query_create_table = "CREATE TABLE `init_db`.`init_user` ( `usernumber` INT NOT NULL DEFAULT '1' AUTO_INCREMENT , `username` VARCHAR(15) NOT NULL DEFAULT 'turbo' , `password` VARCHAR(15) NOT NULL DEFAULT 'turbo' , PRIMARY KEY (`usernumber`)) ENGINE = InnoDB";

//Connect to MySQL localhost server with default credentials
$mysqli = new mysqli("localhost","root","");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

//Create DB
$result_create_db = $mysqli -> query($query_create_db);

//Create Table with default user
$result_create_table = $mysqli -> query($query_create_table);

 
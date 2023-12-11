<?php
$host="localhost";
$username="root";
$password="";

//create connection
$conn= new mysqli($host, $username, $password);

//check connection
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}

//create database
$sql= "CREATE DATABASE chumaenwode";
if ($conn->query($sql) ===TRUE) {
    echo "Database created successfully";
}else{
    echo "Error creating database:" . $conn->error;
}

$conn->close();
?>
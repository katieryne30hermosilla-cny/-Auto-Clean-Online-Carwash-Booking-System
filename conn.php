<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "greenCycle";

$conn = mysqli_connect($host, $username, $password, $dbname);//this sets the  connection to your database

if ($conn){
    echo"Connected successfully";  
}else{
    echo"Not Connected properly";
}

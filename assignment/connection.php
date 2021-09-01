<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="registration";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection_failed:".mysqli_connect_error());
    
}
?>
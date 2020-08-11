<?php
$host= "localhost";
$dbuser= "musitoni_roshan";
$dbpass= "RoshanBala123";
$dbname="musitoni";

$conn=mysqli_connect($host,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Connection Failed:".mysqli_connect_error()); 
}

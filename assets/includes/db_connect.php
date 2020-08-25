<?php
$host= "localhost";
/*$dbuser= "musitoni_roshan";
$dbpass= "RoshanBala123";
$dbname="musitonic_users";*/
$dbuser= "root";
$dbpass= "";
$dbname="musitonic";

$conn=mysqli_connect($host,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Connection Failed:".mysqli_connect_error()); 
}

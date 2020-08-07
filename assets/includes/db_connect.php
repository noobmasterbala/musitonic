<?php
$host= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname="musitonic";

$conn=mysqli_connect($host,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Connection Failed:".mysqli_connect_error()); 
}

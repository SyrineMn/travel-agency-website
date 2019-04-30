<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="travel_agency";
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
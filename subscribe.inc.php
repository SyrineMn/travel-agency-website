<?php
include('C:\xampp\htdocs\new folder\includes\database.inc.php');
$cin=$_POST['cin'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$adress=$_POST['adress'];
$telephone=$_POST['telephone'];
$sexe=$_POST['sexe'];
$password=$_POST['password'];
$sql="insert into client (cin,firstname,lastname,adress,telephone,psw,sexe)
 values ('$cin','$firstname','$lastname','$adress','$telephone','$password','$sexe');";
mysqli_query($conn,$sql);
header("location:../index.php");


?>
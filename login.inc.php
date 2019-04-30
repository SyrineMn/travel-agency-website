<?php
include('C:\xampp\htdocs\new folder\includes\database.inc.php');
$error='';
if (isset($_POST['login'])){

$cin=$_POST['cin'];
$password=$_POST['password'];
$sql="select cin,psw
 from client
where cin='$cin' and psw='$password';";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
 if ($resultcheck==1){
$row=mysqli_fetch_assoc($result); 
session_start();
$_SESSION['cin']=$row['cin'];
$GLOBALS['cinclient']=intval($_SESSION['cin']);
header("location:../mes reservation.php?cin=$cin");
}else if ($resultcheck<1){
	$error="your CIN or password is not correct !";
	header("location:../index.php");

}
}
<?php
header("location:../reservation.php");
if(isset($_POST['res'])){
session_start();
$SESSION['idc']=intval($_POST['cir1']);
$idc=$SESSION['idc'];
}




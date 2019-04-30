<?php
include('C:\xampp\htdocs\new folder\includes\database.inc.php');
if (isset($_POST['book'])){
session_start();	//client
	
$SESSION['idc']=$_POST['idc'];
$SESSION['cin']=$_POST['cin'];
$SESSION['hourofdeparture']=$_POST['hourofdeparture'];
$SESSION['nbrp']=$_POST['nbrp'];

$cin=$SESSION['cin'];
$hourofdeparture=$SESSION['hourofdeparture'];
$nbrp=$SESSION['nbrp'];
$idc=$_POST['idc'];
$sql1="insert into reservation (cin,datededepart,nbrpersonne,idc) values('$cin','$hourofdeparture','$nbrp','$idc');";
mysqli_query($conn,$sql1);
//personnes
$idres="select id
 from reservation
where cin=$cin and idc=$idc and datededepart=$hourofdeparture;";
$result=mysqli_query($conn,$idres);
$row=mysqli_fetch_assoc($result);
$a= $row['id'];

for ($i=1;$i<=$nbrp;$i++){
$SESSION['firstname']=$_POST['firstname'.$i];
$SESSION['lastname']=$_POST['lastname'.$i];
$SESSION['age']=intval($_POST['age'.$i]);

$firstname=$SESSION['firstname'];
$lastname=$SESSION['lastname'];
$age=$SESSION['age'];


$sql2="insert into personne (nom,prenom,idr,age) values('$firstname','$lastname','$a','$age');";
mysqli_query($conn,$sql2);
}
session_destroy();
}
?>
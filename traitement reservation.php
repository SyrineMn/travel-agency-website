<?php
include('C:\xampp\htdocs\new folder\includes\database.inc.php');

$cin=$_GET['c'];
//suppresion d'une reservation
if(isset($_POST['delete'])){
 $idc=$_POST['idc'];
	 $id=$_POST['id'];
	 echo "idc: $idc et idreservation: $id";
	 
	 $sql="delete 
from personne
where idr='$id' ;";
mysqli_query($conn,$sql);
$sql="delete 
from reservation
where id='$id';";
mysqli_query($conn,$sql);
	

}


echo "<html><head>
 <link rel='stylesheet' href='bootstrap.css'>
  <link rel='stylesheet' href='traitement_reservation_style.css'>
   <link rel='stylesheet' href='../style header.css'>
    <link rel='stylesheet' href='../style footer.css'>
</head>
<body>";
include("../header.php");
// consultation d'une reservation
if (isset($_POST['consult'])){

	$id=$_POST['id'] ;
	$idc=$_POST['idc'] ;
	 
	 echo "
<div class='container'>";
// affichage des informations de la reservation
	$sql="select * from reservation 
	where id='$id' ;";
	$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
 if ($resultcheck=1){
    $row=mysqli_fetch_assoc($result);
	$idc=$row['idc'];
	$cin=$row['cin'];
	$nbrp=$row['nbrpersonne'];
	$depart=$row['datededepart'];
	echo "<div class='client'>" ;
	echo "<p> CIN: ".$cin."</p><br>
	
	<p> Heure de depart: ".$depart."h</p><br>
	<p> Nombre de personne: ".$nbrp." </p><br>
	
	</div>";
	//affichage des informations des personnes participantes à la reservation 
	$sql="select * from personne 
	where idr='$id' ;";
	$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
 if ($resultcheck>0){
	 for($i=0;$i<$resultcheck;$i++){
    $row=mysqli_fetch_assoc($result);
	$nom=$row['nom'];
	$prenom=$row['prenom'];
	$age=$row['age'];
	
	echo "<div class='row col-lg-5'>
	<p> personne".($i+1).":</p>
	 <p> Nom: ".$nom."</p>
	<p> Prénom: ".$prenom." </p>
	<p> Age: ".$age."</p>
	
	</div>";
	 }
	
	
 }	
 }
	//affichage de circuit choisi
		$sql="select * from circuit 
	where idc='$idc' ;";
	$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
 if ($resultcheck=1){
    $row=mysqli_fetch_assoc($result);
	$photo=$row['photo'];
	$namec=$row['namec'];
	$theme=$row['theme'];
	$duree=$row['duree'];
	echo "<div class='circuit'>
	<img src='../".$photo."'>
	<h5> theme:".$row['namec']."</h5>
<h6> Name:".$row['theme']."</h6>
<p>Duration:".$row['duree']."</p>
<p>Means of transport:".$row['moyentransport']."</p>
	</div>";
	
	
echo "</div>";
		 
}
}




//modification d'une reservation
 // affichage du formulaire de la reservation
 //affichage du formulaire des personnes
if (isset($_POST['modify'])){
	
 $idc=$_POST['idc'];
	 $id=$_POST['id'];
	 // affichage du formulaire de la reservation
	 $sql="select * from reservation where id='$id';";
	 	$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
 if ($resultcheck==1){
	  $row=mysqli_fetch_assoc($result);
	 
	 $nbrp=$row['nbrpersonne'];
	 $heuredepart=$row['datededepart'];
	 $cin=$row['cin'];
	 
	echo" <div class='container'>
<form method='post' class='from_modification' action='modification.inc.php'>
<label for='cin'> CIN </label>
<input type='text' name='cin' value='".$cin."'/><br>
<label for='hour of departure'> Hour of departure </label>
<input type='number' name='hourofdeparture' value='".$heuredepart."'/><br>
<label for='number of people'> Number of people </label>
<input type='number' name='nbrp'  value='".$nbrp."'/><br>" ;
}
//affichage du formulaire des personnes
$sql="select * from personne where idr='$id';";
	 	$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
 if ($resultcheck>=1){
	  $row=mysqli_fetch_assoc($result);
	 
	 $nom=$row['nom'];
	 $prenom=$row['prenom'];
	 $age=$row['age'];
	 
	 echo "<label for='nom'> Nom </label> <input type='text' name='cin' value='".$nom."'/>
	   <label for='prenom'> Prénom </label><input type='text' name='cin'value='".$prenom."'/>
	    <label for='age'> Age </label><input type='text' name='age' value='".$age."'/>
		<input type='submit' id='btn' name='Delete' value='Delete'/><br>";
	  } 
	 echo " <input type='submit' id='btn' name='addperson' value='Add Person'/><br>
	 <input type='submit'id='btn' name='modify' value='Modify'/>
	  
	  </form></div>";
}
echo "</body>
</html>";
include("../footer.php");
?>
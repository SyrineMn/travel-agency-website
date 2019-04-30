<?php
include('includes/login.inc.php');
include("header.php");
$cin=$_GET['cin'];
echo "<html><head>
<meta name='viewport' content='width=device-width, initial-scale='1'>
 <link rel='stylesheet' href='bootstrap/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='mes reservation style.css'>
</head>
<body>
<div class='container'>";

	$sql="select id, cin,idc from reservation 
	where cin=$cin;";
	$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
 if ($resultcheck>0){


for($i=0;$i<$resultcheck;$i++){
	$row=mysqli_fetch_assoc($result);
	$idc=$row['idc'];
	$cin=$row['cin'];
	$id=$row['id'];
	echo"<div class='row'>";
	echo "<div class='col-lg-3' id='t'><p> Reservation ".($i+1)." </p></div>
	
		<div class='col-lg-7' id='trait'>
    <form method ='POST' action='includes/traitement reservation.php?c=$cin'>
	<input type='hidden' name='idc' value='".$idc."'/>
	<input type='hidden' name='id' value='".$id."'/>
     <input type='submit' class='btn btn-outline-info btn-lg' name='consult' value='Consult'/>
     <input type='submit' name='modify' class='btn btn-outline-info btn-lg' value='Modify'/>
     <input type='submit' name='delete' class='btn btn-outline-info btn-lg' value='Delete'/>
	 </form>
	 </div>
	 
	 </div>";
}
	
 }	
	
echo "</div>
</body>
</html>";
include("footer.php");
?>
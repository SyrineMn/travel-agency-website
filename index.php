<?php
include("header.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style index.css">
</head>
<body>
<div class="container-fluid" id="con2">
<div class="ind">
<h1> SAFE TRAVEL </h1><br>
<p> A signature of excellence. </p>

</div>

<div class="container-fluid " id="ind2" >

<?php

include('includes/login.inc.php');
	$sql="select *
	from circuit;";
	$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
 if ($resultcheck>0){
   $a=$resultcheck/3;
for($j=0;$j<$a;$j++){
	echo"<div class='row'>";
for($i=0;$i<3;$i++){
	$row=mysqli_fetch_assoc($result);
	$b=$row['idc'];
	echo "<div class='circuit'>
<form method='post' action='reservation.php?idc=$b' class='form-cir'>
<button type='submit' name='res'><img src='".$row['photo']."'></button>
</form>
<h5> theme:".$row['namec']."</h5>
<h6> Name:".$row['theme']."</h6>
<p>Duration:".$row['duree']."</p><br>
<p>Means of transport:".$row['moyentransport']."</p>
</div>";
}
	echo "</div>";
 }	
 }

 ?>
 </div>
</div>
</body>
</html>

<?php

include("footer.php");
?>
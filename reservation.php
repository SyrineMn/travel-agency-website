<?php
include("header.php");
$idc=$_GET['idc'];
	echo $idc;
?>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale="1">
 <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="reservation style.css"</head>
<body>

<div class="container " id="res">
<form class="form-re" method="post" action="includes/reservation1.inc.php">
<div class="part1">
<label for="cin"> CIN </label>
<input type="text" name="cin"/><br>
<label for="hour of departure"> Hour of departure </label>
<input type="number" name="hourofdeparture"/><br>
<label for="number of people"> Number of people </label>
<input type="number" name="nbrp"/><br>
</div>
<div class="part2">
<div class="p1">
<label for="firstname"> First name </label>
<input type="text" name="firstname1"/>
<label for="lastname"> Last name </label>
<input type="text" name="lastname1"/>
<label for="age"> Age </label>
<input type="number" name="age1"/>
</div>
<div class="p2">
<label for="firstname"> First name </label>
<input type="text" name="firstname2"/>
<label for="lastname"> Last name </label>
<input type="text" name="lastname2"/>
<label for="age"> Age </label>
<input type="number" name="age2"/>
</div>
<div class="p3">
<label for="firstname"> First name </label>
<input type="text" name="firstname3"/>
<label for="lastname"> Last name </label>
<input type="text" name="lastname3"/>
<label for="age"> Age </label>
<input type="number" name="age3"/>
</div>
<div class="p4">
<label for="firstname"> First name </label>
<input type="text" name="firstname4"/>
<label for="lastname"> Last name </label>
<input type="text" name="lastname4"/>
<label for="age"> Age </label>
<input type="number" name="age4"/>
</div>
<div class="p5">
<label for="firstname"> First name </label>
<input type="text" name="firstname5"/>
<label for="lastname"> Last name </label>
<input type="text" name="lastname5"/>
<label for="age"> Age </label>
<input type="number" name="age5"/>
</div>
</div>
<?php
echo "<input type='hidden' name='idc' value='".$idc."'/>";
?>
?>
<input type="submit" name="book" value="book" id="book"/>
</form>

</div>
<br><br>
</body>
</html>
<?php
include("footer.php");
?>
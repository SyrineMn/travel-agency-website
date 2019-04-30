
<html>
<?php
include("header.php");
?>
<head><meta name="viewport" content="width=device-width, initial-scale="1">
 <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="subscribe style.css">
 </head>
<body>

<div class="container-fluid abc" id="cont1">
<form class="form-sub" method="post" action="includes/subscribe.inc.php">
<div id="part1">
<label for="cin"> CIN </label>
<input type="text" name="cin"/><br>
<label for="first name"> First name </label>
<input type="text" name="firstname"/><br>
<label for="last name"> Last name </label>
<input type="text" name="lastname"/><br>
<label for="adress"> Adress </label>
<input type="text" name="adress"/><br>
<label for="telephone"> Telephone </label>
<input type="text" name="telephone"/><br>
</div>
<br>
<div id="part2">

<label for="man">Man</label>
<input type="radio" name="sexe" value="M"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label for="woman">Woman</label>
<input type="radio" name="sexe" value="W" /><br>
</div>
<div id="part3">
<label for="password"> Password </label>
<input type="password" name="password" ><br>
<input type="submit" name="Subscribe" value="Subscribe" id="subscribe"/><br>
</div>
</form>

</div>
<?php
include ("footer.php");
?>
</body>
</html>
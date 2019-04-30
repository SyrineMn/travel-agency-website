<?php
include('includes/login.inc.php');
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="style footer.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>

<footer class="footer-mx">
<div class="container-fluid" id="cont">
<div class="row">
  <div class="col-md-6" id="nav1">
    <ul>
	<li> Contact us: 71 398 408 </li>
	<li> Adress: Rue du lac lochness, Les Berges du Lac1, Tunis 1053 </li>
	</ul>
	<div class="middle">
<a href="#"><i class="fab fa-facebook-f"></i>
</a>
<a href="#"><i class="fab fa-twitter"></i>
</a>
<a href="#"><i class="fab fa-instagram"></i>
</a>
<a href="#"><i class="fab fa-linkedin"></i>
</a>
</div>
 </div>
 <div class="col-md-6" id="nav2">
    <form class="form" action="includes/login.inc.php" method="POST">
    <label for= "name" >CIN</label>
    <input type="text" name="cin" placeholder="CIN"/></br>
    <label for= "name">Password</label>
    <input type="password" name="password" placeholder="Password"/></br>
    <input type="submit" value="login" id="login" name="login"/>
    </form>
<div class="error">

<?php 
echo ('<h5>'.$error.'</h5>') ;
?>
</div>
</div>
</div>
</footer>

<div class="copyright">
© 2019 SafeTravel
</div>

</body>
</html>
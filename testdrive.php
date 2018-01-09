<!DOCTYPE html>
<?php
include("connect.php");
?>
<html>
<head>
		<link rel="stylesheet" type="text.css" href="style-register.css"/>
		<link rel="shortcut icon" href="allpicture/logo.gif">
		<title>Test Drive</title>
<style>

body
{
	background: url(allpicture/pp.jpg) center;
}
#map
{
   float:right;
   margin-right:550px;

}
</style>
</head>
<body>
		<a href="Homepage(Final).php" target="_self"> <img src="allpicture/proton.png" width="50px" height="50px"/></a>
		
		
		<div id="right">
		<h1>Book For Test Drive </h1>
		
		</div>
		<div id="right-corner">
		<form id = "registerTD" method = "post">
				<fieldset>
				<p><input type="text" name="carname" size ="30" maxlength="30" placeholder="Car Model" required></p>
				<p><input type="text" name="custfullname" size ="30" maxlength="30" placeholder="Your Full Name"></p>
				<p><input type="text" name="email" size ="30" maxlength="30" placeholder="Your Email"></p>
			
				<p><input type="submit" name="btnsubmit" value="Submit"/>&nbsp;
				<input type="reset" name="btnreset" value="Clear"/></p>
				</fieldset>
		</form>
		<?php
			if(isset($_POST["btnsubmit"]))
			{
				$carname=$_POST["carname"];
				$name=$_POST["custfullname"];
				$email=$_POST["email"];
			
				mysql_query("INSERT INTO testdrive (CarName,CustEmail) VALUES ('$carname','$name','$email')");
			}
		?>
		
<div id="map">
<iframe  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="400" height="240" src="https://maps.google.com/maps?hl=en&q=proton company&ie=UTF8&t=roadmap&z=6&iwloc=B&output=embed"><div>
<small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div>
<div><small><a href="http://premiumlinkgenerator.com">Premiumlinkgenerator.com</a></small></div></iframe>
</div>
</body>
</html>
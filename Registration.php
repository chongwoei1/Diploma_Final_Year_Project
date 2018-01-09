<!DOCTYPE html>
<html>
<?php 
		include("connect.php");
?>
<head>
		<link rel="stylesheet" type="text.css" href="style-register.css"/>
		<link rel="shortcut icon" href="allpicture/logo.gif">
		<title> Registration</title>
<style>

body
{
	background: url(allpicture/pp.jpg) center;
}

</style>
</head>

<body>
		<a href="Homepage(Final).html" target="_self"> <img src="allpicture/proton.png" width="50px" height="50px"/></a>
		<div id="right">
		<h1>Sign Up</h1>
		<p>It is free and take less than 30 seconds</p>
		</div>
		<div id="right-corner">
		<form id="register" method="post">
				<fieldset>
				<p><input type="text" name="custfirstname" size ="30" maxlength="30" placeholder="Your First Name"></p>
				<p><input type="text" name="custlastname" size ="30" maxlength="30" placeholder="Your Last Name"></p>
				<p><input type="text" name="custadd1" size ="60" maxlength="30" placeholder="Address1"></p>
				<p><input type="text" name="custadd2" size ="60" maxlength="30" placeholder="Address2"></p>
				<p><input type="tel" name="custnumber" size="30" maxlength="30" placeholder="Enter Your Mobile Number"></p>
				<p><input type="text" name="custusername" size="30" maxlength="30" placeholder="Your Username"></p>
				<p><input type="text" name="custemail" size ="30" maxlength="30" placeholder="Your Email"></p>
				<p><input type="password" name="custpass" size ="30" maxlength="30" placeholder="Password"></p>
				<p><input type="submit" name="btnsubmit" value="Submit"/>&nbsp;
				<input type="reset" name="btnreset" value="Clear"/></p>
				 
				</fieldset>
		</form>
<?php

if(isset($_POST["btnsubmit"]))
		{
			$firstname=$_POST["custfirstname"];
			$lastname=$_POST["custlastname"];
			$add1=$_POST["custadd1"];
			$add2=$_POST["custadd2"];
			$phonenum=$_POST["custnumber"];
			$username=$_POST["custusername"];
			$email=$_POST["custemail"];
			$password=$_POST["custpass"];
		mysql_query("INSERT INTO user (FirstName,LastName,Add1,Add2,PhoneNum,Username,Email,Password) VALUES ('$firstname','$lastname','$add1','$add2','$phonenum','$username','$email','$password')");
		}
?>


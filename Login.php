<!DOCTYPE html>
<html>
<?php
	include ("connect.php");
?>
<head>
		<link rel="stylesheet" type="text.css" href="style-login.css"/>
		<link rel="shortcut icon" href="allpicture/logo.gif">
		<title>Login</title>
	
<style>
body
{
	background: fixed url(allpicture/pp.jpg) center;
	
}
fieldset
{
	margin-left:1000px;
	margin-right:100px;
	background-color:gray;
}
#car img
{	
	
	height:510px;
	float:left;
	clear:both;
	border:pink 3px;
	border-radius:10px;
}
</style>
</head>
<body>
<a href="Homepage(Final).html" target="_self"> <img src="allpicture/proton.png" width="50px" height="50px"/></a>
		
<div id="car">
<img src="allpicture/loginp.jpg" width="900px" height="500px"/>
</div>
		<div id="left">
		<h1>Been here before?</h1>
		</div>
		<form id = "login" method ="post"">
		<fieldset>
		<div id="right">
			<p><input type="text" name="custusername" size ="30" maxlength="30" placeholder="Your Username" required ></p>
			<p><input type="password" name="custpass" size ="30" maxlength="30" placeholder="Password"></p>
			</div>
		
		<div id="btn">
			<p><input type="submit" name="btnlogin" value="Login As Member"/></a>
			   <input type="submit" name="btnloginadmin" value="Login As Admin"/></a>
			</p>
		</div>	
		</fieldset>
		</form>
		<form>
		<fieldset width="50px">
		
		   <h2> Not a Proton Owners Member?</h2>
		    <p>Once you register, you'll have access to:</p>
			<ul>
			 <li>Service History</li>
			 <li>How-to-Videos</li>
			 <li>Owner's Manuals</li>
			 <li>Service Offers And Much More</li>
			 </ul>
			 
		<div id="right_down">		
			<p><span style="color:white;"/><a href="Registration.php" target="_self"/> Register </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>	
         </fieldset>		
		</form>	
<?php
	if(isset($_POST['btnlogin']))
	{
		$custname=$_POST['custusername'];
		$custpass=$_POST['custpass'];
		
		$result=mysql_query("Select * From user where Username='$custname' And Password ='$custpass'");
		
		$row=mysql_fetch_assoc($result);
		
		if($row['CustomerID']==NULL)
		{
			echo "Access denied, Please try again!";
		}
		else
		{
			$_SESSION['CustomerID']=$row['CustomerID'];
			header("Location: User.php");
		}
	}
	if(isset($_POST['btnloginadmin']))
	{
		$custname=$_POST['custusername'];
		$custpass=$_POST['custpass'];
		
		$result=mysql_query("Select * From admin where AdminUser='$custname' And AdminPass ='$custpass'");
		
		$row=mysql_fetch_assoc($result);
		
		if($row['AdminID']==NULL)
		{
			echo "Access denied, Please try again!";
		}
		else
		{
			$_SESSION['AdminID']=$row['AdminID'];
			header("Location: admin.php");
		}
	}
	
?>
		
</body>
</html>

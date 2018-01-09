<!DOCTYPE html>
<?php
	include("connect.php")
?>
<html>
<head>
	<title> Feedback</title>
	<link rel="shortcut icon" href="allpicture/logo.gif">
	<style>
	
	  body
   {
	background-color:HoneyDew;
	background:url(allpicture/pp.jpg);
   }
	label
 {width:150px; font-family:arial;font-weight:bold; color:red;text-align:right;font-size:0.75em;float:left;margin-right:10px;
   }
   
  input{border: 1px silver solid;} 
  input:focus, textarea:focus
  {
    background-color:gray;
	color:white;
  }
  
  input[type="submit"]
  {border-radius:10px; width:100px;
   cursor:pointer;
  }
  input[type="submit"]:hover{background-color:blue;color:white}
  h2
  {
  color:blue;
  text-decoration:underline;
  cursor:pointer;
  }
  body
  {
	border:2px dotted blue;
  }

	</style>
</head>
<body>
<a href="Homepage(Final).php" target="_self"> <img src="allpicture/proton.png" width="50px" height="50px"/></a>
</div>
<h2>Customer Feedback Page</h2>
<form name="commentfrm" method="post">
<p>
<label>Name</label>
<input type="text" name="cust_name" size="60" />
</p>
<p>
<label>Email Address</label>
<input type="email" name="cust_email" size="60" />
</p>
<p>
<label>Comments</label>
<textarea name="cust_comment" rows="4" cols="61"></textarea>
</p>
<p style="text-align:center;"  ><input type="submit" name="btnsubmit"
value="Send" /></p>
</form>
<?php
if(isset($_POST["btnsubmit"]))
{
	$name=$_POST["cust_name"];
	$email=$_POST["cust_email"];
	$feedback = $_POST["cust_comment"];
	mysql_query("INSERT INTO feedback (CustName,CustEmail,CustFeedBack) VALUES ('$name', '$email', '$feedback')");
}
	?>
</div>

</body>
</html>
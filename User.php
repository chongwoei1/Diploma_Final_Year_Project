<!DOCTYPE html>
<?php
	include("connect.php");
?>
<html>
<head>
<link rel="shortcut icon" href="allpicture/logo.gif">
<title>Car Show</title>
<style>
  h2
  { 
   color:Indigo;
   letter-spacing:3px;
   font-family:Cooper Black;
   }
   #tfnewsearch{
		float:right;
		padding:20px;
	}
	.tftextinput
	{
		margin: 0;
		padding: 5px 10px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton {
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton::-moz-focus-inner {
	  border: 0;
	}

	.tfclear
	{
		clear:both;
	}
   .q
   {
     color:red;
	 text-decoration:underline;
   }
   .w
   {
     
	 font-weight:bold;
   }
   body
   {
	background-color:HoneyDew;
	background:url(pp.jpg);
   }
   m
   {
    colour:black;
	cursor:default;
   }
 
 </style>
<link rel="stylesheet" type="text/css" href="style-homepage.css"/>
</head>
<body>
<div id="page-wrapper">
<div id="top-navi">
<table>
	<tr>
		<td rowspan="2"><a href="Homepage(Final).html" target="_self"> <img src="allpicture/proton.png" width="50px" height="50px"/></a>
		</td>
		<td colspan="2" style="color:white" align="center">Welcome</td>
	<td colspan="1"><a href="Profile.html" style="background-color:black;padding:5px;"  target="_self"><input type="button" name="btnlogin" value="Profile"/></a></td>
		<td colspan="1"><a href="Homepage(Final).html" style="background-color:black;padding:5px;"  target="_self"><input type="button" name="btnlogin" value="Logout"/></a></td>
		
		
	</tr>
	<tr>
		<td><a href="Login.html" target="_self">Login </a></li></td>
		<td><a href="Feedback.html" target="_self">Feedback</a></li></td>
		<td><a href="satria neo.html" target="_self">SatriaNeo</a></li></td>
		<td><a href="Exora.html" target="_self">Exora</a></li></td>
		<td><a href="suprimax.html" target="_self">Suprima S</a></li></td>
		<td><a href="iriz.html" target="_self">Iriz</a></li></td>
		<td><a href="car details.html" target="_self">All Vehicles</a></li></td>
		<td><a href="About.html" target="_self">About us</a></li></td>
		<td>
		  <form id="tfnewsearch" method="get" action="http://www1.proton-edar.com.my/">
		   <input type="text" class="tftextinput" name="q" size="15" maxlength="120"><input type="submit" value="search" class="tfbutton">
		   </form>
		   </td>
		   <div class="tfclear"></div>
		 
	</tr>
</table>
</div>




<script type="text/javascript">
<!-->
var image1=new Image()
image1.src="allpicture/1.jpg"
var image2=new Image()
image2.src="allpicture/2.jpg"
var image3=new Image()
image3.src="allpicture/3.jpg"
var image4=new Image()
image4.src="allpicture/4.jpg"
//-->
</script>
<img src="allpicture/1.jpg" name="slide" width="1284" height="600">
<script type="text/javascript">
<!--
var step=1
function slideit()
{
  document.images.slide.src=eval("image"+step+".src")
  if(step<4)
  step++
  else
  step=1
  setTimeout("slideit()",2500)
}
slideit()
//-->

</script>
<div id="page-footer">
<p>All rights reserved.</p>
</div>
</div>
<iframe name="CHATBUTTON_CHATBOX" id="CHATBUTTON_CHATBOX" src="https://www.chatbutton.com/chatroom/18372426/" width="300" height="400" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no"><a href="https://www.chatbutton.com/chatroom/18372426/">Enter Chat Room</a></iframe>
<script type="text/javascript">
CHBT_channel="18372426";
CHBT_title="Customer+Service";
CHBT_titlecolor="FFFFFF";
CHBT_size="300x400";
CHBT_bgcolor="FFFFFF";
CHBT_textcolor="000033";
CHBT_textsize="12";
CHBT_nncolor="335599";
CHBT_cpcolor="FF0033";
CHBT_profanityfilter="1";
CHBT_position="bottom-right";
</script>
<script type="text/javascript" src="https://www.chatbutton.com/c.js">
</script>
</body>
</html>
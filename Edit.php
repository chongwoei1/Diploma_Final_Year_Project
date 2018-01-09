<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="allpicture/logo.gif">
	<title>Edit</title>
<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

/* css class for the edit profile generated errors */
.profilepress-edit-profile-status {
  width: 400px;
  text-align: center;
  background-color: #e74c3c;
  color: #ffffff;
  border: medium none;
  border-radius: 4px;
  font-size: 17px;
  font-weight: normal;
  line-height: 1.4;
  padding: 8px 5px;
  margin: auto;
}

.memo-edprofile-success {
  width: 400px;
  text-align: center;
  background-color: #2ecc71;
  color: #ffffff;
  border: medium none;
  border-radius: 4px;
  font-size: 17px;
  font-weight: normal;
  line-height: 1.4;
  padding: 8px 5px;
  margin: auto;
}

#sc-edprofile {
  background: #f0f0f0;
  width: 400px;
  margin: 0 auto;
  margin-top: 8px;
  margin-bottom: 2%;
  transition: opacity 1s;
  -webkit-transition: opacity 1s;
}

#sc-edprofile h1 {
  background: #4eb6b6;
  padding: 20px 0;
  font-size: 140%;
  font-weight: 300;
  text-align: center;
  color: #fff;
}

div#sc-edprofile .sc-container {
  background: #f0f0f0;
  padding: 6% 4%;
}

div#sc-edprofile input[type="email"],
div#sc-edprofile input[type="text"],
div#sc-edprofile input[type="password"], div#sc-edprofile select, div#sc-edprofile textarea {
  width: 92%;
  background: #fff;
  margin-bottom: 4%;
  border: 1px solid #ccc;
  padding: 4%;
  font-family: 'Open Sans', sans-serif;
  font-size: 95%;
  color: #555;
}

div#sc-edprofile select {
  width: 100%;
}

div#sc-edprofile textarea {
  height: 100px;
}

div#sc-edprofile input[type="submit"] {
  width: 100%;
  background: #4eb6b6;
  border: 0;
  padding: 4%;
  font-family: 'Open Sans', sans-serif;
  font-size: 100%;
  color: #fff;
  cursor: pointer;
  transition: background .3s;
  -webkit-transition: background .3s;
}
body
{
	background-color:HoneyDew;
	background:url(pp.jpg);
}
</style>
<body>
<a href="Homepage(Final).html" target="_self"> <img src="allpicture/proton.png" width="50px" height="50px"/></a>
<div id="sc-edprofile">
  <h1>Edit Profile</h1>
  <div class="sc-container">
  	<img class="avatar" src="allpicture/profilepicture.jpg" width="100px" height="100px"alt="Ash" />&nbsp;<input type="file" name="Profilepiture" accept=".png,.jpg"/>
    <input type="text" placeholder="First Name" />
    <input type="text" placeholder="Last Name" />
    <input type="text" placeholder="Email Address" />
    <input type="password" placeholder="Password" />
	<input type="text" placeholder="Address1" />
	<input type="text" placeholder="Address2" />
	<input type="text" placeholder="Phone.no" />
	<script>
	function display_alert()
	{
		alert("Edit Successful !!")
	}
	</script>
	<form>
	<input type="submit" onclick="display_alert()" name="btndisplay"/>
	</form>
  </div>
</div>
</body>
</html>
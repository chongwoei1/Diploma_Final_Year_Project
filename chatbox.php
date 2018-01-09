<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="styles.css" />
</head>
<body>
<frameset rows="65%,35%" framespacing="1" frameborder="yes" border="1" bordercolor="#FF0000">
    <frame src="messages.php" name="main_frame">
    <frame src="main.php" name="login_frame" scrolling="no" noresize target="middle">
</frameset>

<form class="login_form" method="post" action="main.php">
 <div>Username: <input type="text" name="username" /></div>
 <div>Password: <input type="password" name="password" /></div>
 <div><input type="submit" value="Login" name="Login" /></div>
</form>
<div>You can use username "User1" or "User2" or "User3" and password "qwerty" to login in system</div>
<link type="text/css" rel="stylesheet" href="styles.css" />

<div class="chat_main">
 <h3>Chat</h3>
 </div>
 <link type="text/css" rel="stylesheet" href="styles.css" />

<form class="submit_form" method="post" action="main.php">
 <div><input type="text" name="s_message" /><input type="submit" value="Say" name="s_say" /></div>
</form>
<div>You can type anything in chat</div>
<iframe name="CHATBUTTON_CHATBOX" id="CHATBUTTON_CHATBOX" src="https://www.chatbutton.com/chatroom/18372426/" width="300" height="400" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no"><a href="https://www.chatbutton.com/chatroom/18372426/">Enter Chat Room</a></iframe>
<script type="text/javascript">
CHBT_channel="18372426";
CHBT_profanityfilter="1";
CHBT_position="bottom-right";
</script>
<script type="text/javascript" src="https://www.chatbutton.com/c.js">
</script>

</body>
</html>
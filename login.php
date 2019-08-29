<html>
<head><style type="text/css">
</style>
<script type="text/javascript">
function check()
{
var user=document.forms.msg1.value;
var pass=document.forms.msg2.value;
if((user=="") || (pass==""))
{
alert("Username and Password cannot be empty");
return false;
}
}
function goback()
{
window.history.back()
}
</script>
</head>
<font face="script mt bold" color="orange" >
<h1><center><font face="monotype corsiva" color="black">PUBLIC HEALTH MANAGEMENT SYSTEM</center></h1>
<body background="s.jpg">
<center><img src="login.jpg" height=100 width=200></center><br><br>
<form name="forms" onsubmit="return check()" action="log.php" method="post">
<center><table><tr><td><font color="black"><br><br>
<fieldset>
<legend align="center">USER LOGIN</center></legend>
<font color="black">Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="msg1" size=30 maxlength="30" placeholder="Email Address"><br><br>
Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="password" name="msg2" size=30 maxlength="30" placeholder="Password">
<input type="submit" name="submit" value="Login">
<input type="reset" name="reset" value="Reset">
<input type="button" onclick="goback()" name="msg6" value="Back"><br><br>
</form>
<a href="register.html"><font face="monotype corsiva" color="black"><blink>Want to join us ??? Register Now !!!</blink></a><td><tr></table></center>
</body>
</html>
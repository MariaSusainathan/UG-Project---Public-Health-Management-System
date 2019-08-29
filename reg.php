
<html>
<head><style type="text/css">
</style>
<script type="text/javascript">
function scheck()
{
var user=document.forms.msg1.value;
var pass=document.forms.msg2.value;
if((user=="") && (pass==""))
{
alert("username and password cannot be empty");
return false;
}
if((user!="Mario") && (pass!="lycan")) 
{
alert("invalid username and password");
return false;
}}
function goback()
{
window.history.back()
}
</script>
</head>
<font face="script mt bold" color="orange" >
<center><table height=40 width=1370>
<tr align="center">
<td><font face="elephant" color="black" size=4><h1>PUBLIC HEALTH MANAGEMENT SYSTEM</h1></td></tr></table><BR><BR>
<body background="green(2).jpg">
<center><img src="admin.gif" height=150 width=600></center><br><br>
<form name="forms" action="admin portal.html" onsubmit="return scheck()">
<table><tr><td>
  <font face="elephant" color="black" size=4><u>ADMIN LOGIN</u><br><br>
<font color="black">Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="msg1" size=20><br><br>
Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="password" name="msg2" size=20>
<input type="submit" name="submit" value="Login">
<input type="reset" name="reset" value="Reset">
<input type="button" onclick="goback()" name="msg6" value="Back"><br><br>
</form>
</body>
</html>

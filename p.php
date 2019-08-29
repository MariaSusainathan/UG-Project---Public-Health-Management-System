<html>
<head><style type="text/css">
img
{
margin: 0 0 20px 100px;
}
</style>
<script type="text/javascript">
function check()
{
var user=document.forms.msg1.value;
var pass=document.forms.msg2.value;
if((user!="Mario") && (pass!="lycan"))
{
alert("Invalid user name and password");
}
return false;
}
</script>
</head>
<font face="script mt bold" color="orange" >
<h1><center>PUBLIC HEALTH MANAGEMENT SYSTEM</center></h1>
<body bgcolor="purple">
<img src="454018.jpg" height=150 width=750 border=2 ><br>
<form name="forms" action="sds.php" onsubmit="return check()">
Username
<input type="text" name="msg1" size=20><br>
Password
<input type="password" name="msg2" size=20>
<input type="submit" name="submit" value="click">
</form>
</body>
</html>
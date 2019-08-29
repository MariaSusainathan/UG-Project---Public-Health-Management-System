<html>
<head><style type="text/css"></style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<body background="devil.jpg">
<font face="monotype corosiva" color="blue" size=10>
<center>COMPLAINT FORM</center>
<script type="text/javascript">
function check()
{
var user=document.forms.msg1.value;
var pass=document.forms.msg2.value;
var aaa=document.forms.msg3.value;
var bbb=document.forms.msg4.value;
var ccc=document.forms.msg5.value;
var ddd=document.forms.kk.value;
if((user=="") || (pass=="") || (aaa="") || (bbb=="") || (ccc=="") || (ddd==""))
{
alert("Please fill in all the details");
return false;
}
}
</script>
</head>
<table  align="center" cellpadding=100 >
<tr>
<td>
<font face="monotype corosiva" color="blue" size=10>
<form name ="forms" onsubmit="return check()">
Enter Your Name
<input type="text" name="msg1" size=30><br>
Enter Your Mobile Number
<input type="text" name="msg2" size=30><br>
Enter the address
<textarea rows=3 cols=30 name="msg3"></textarea><br>
Enter Your Area
<input type="text" name="msg4" size=30><br>
Type of Complaint
<input type="text" name="msg5" size=30><br>
Message
<textarea rows=3 cols=25 name="kk"></textarea>
<input type="submit" name="b1" value="submit">
<input type="reset" name="b2" value="reset"></td></tr>
</form>
</body>
</html>



<html>
<head>
<style type="text/css">
a
{
text-decoration:none;
}</style>
<script language="javascript">
function x()
{
var r=confirm("Are you sure want to logout");
if(r==true)
{
window.location.href="logout.php";
}
else
{
window.location.href="user portal.php";
}}
</script>
<?php
session_start();
if(!isset($_SESSION['username']))
{
?>
<script type="text/javascript">
window.location.href="home.html";
</script>
<?php
}
else
{
session_start();
$a=$_SESSION['username'];
$con=mysql_connect('localhost','root','');
mysql_select_db("project");
$name=mysql_query("select name from register where username='$a'");
while($row=mysql_fetch_row($name))
{
$x=$row[0];
}
mysql_close($con);
?>
<body background="w.jpg">
<center><img src="flag.jpg" height=220 width=500 border=2>
<center><table height=40 width=1370>
<tr align="center">
<td bgcolor="black"><font face="monotype corsiva" color="white" size=8>PUBLIC HEALTH PAGE AND SERVICES</td></tr></table><BR><BR><table bordercolor="black" height=40 width=600><td bgcolor="white"><font face="monotype corsiva" size=4><font face="monotype corsiva" size=6>Logged in as&nbsp<?php  echo $x; ?> </td></table><br><br>
<center><table border=1 height=40 width=600>
<tr align="center">
<td bgcolor="orange"><font face="monotype corsiva" color="purple" size=6><a href="emp_details.php"><font color="black">PUBLIC HEALTH WORKER DETAILS</a></td></tr></table>
<center><table border=1 height=40 width=600>
<tr align="center">
<td bgcolor="white"><font face="monotype corsiva" color="black" size=6><a href="complaint.html"><font color="black">COMPLAINT FORM</a></td></tr></table>
<center><table border=1 height=40 width=600>
<tr align="center">
<td bgcolor="green"><font face="monotype corsiva" color="black" size=6><a href="t&d.html"><font color="black">TIPS & DISEASES</a></td></tr></table><br><br><br><br>
<input type="button" onclick="x()" name="submit" value="Logout">
</form>
<?php
}
?>
</body>
</html>



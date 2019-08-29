<html>
<head>
<script language="javascript">
function x()
{
window.location.href="admin portal.html";
}
</script>
<body background="j.jpg">
<font face="monotype corsiva" size=4>
<center><h1>LIST OF REGISTERED USERS</h1></center></head>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("project");
$res=mysql_query("select username from register");
while($row=mysql_fetch_row($res))
{
?>
<ul type="round">
<li><?php echo $row[0] ?></li>
</ul>
<?php
}
mysql_close();
?>
<center><input type="button" name="button" onclick="x()" value="Admin portal"></center>

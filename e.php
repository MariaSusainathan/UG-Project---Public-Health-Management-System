<html>
<head>
<script language="javascript">
function x()
{
window.location.href="admin portal.html";
}
</script>
<body background="s.jpg">
<font face="monotype corsiva">
<center><h1>EMPLOYEE DETAILS</h1></center>
<form name="com" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<input type="submit" name="submit" value="click">
</form>
<?php
if($_POST['submit'])
{
$a=$_POST['con'];
$con=mysql_connect('localhost','root','');
mysql_select_db("project");
$res=mysql_query("select username from complaint");
echo "<select>";
while($row=mysql_fetch_row($res))
{
echo 
echo "<option>".$row[0]."</option>";
}
$res1=mysql_query("select * from complaint where username='$con'");
while($row=mysql_fetch_row($res1))
{
?>
<center><font face="monotype corsiva" color="black" size=6>COMPLAINT DETAILS</center><br><br>
<center><table cellpadding=0 cellspacing=0 border=2 width=200 height=200>
<font face="monotype corsiva" color="black" size=6>
<tr>
<th>CID</th>
<td><?php echo $row[0]; ?></td></tr>
<tr>
<th>USERNAME</th>
<td><?php echo $row[1]; ?></td></tr>
<tr>
<th>TYPE OF COMPLAINT</th>
<td><?php echo $row[2]; ?></td></tr>
<tr>
<th>DESCRIPTION</th>
<td><?php echo $row[3]; ?></td>
<tr>
<th>QUERIES</th>
<td><?php echo $row[4]; ?></td></tr>
<tr>
<th>REQUEST</th>
<td><?php echo $row[5]; ?></td></tr>
</center></table>
<?php
}
mysql_close($con);
}
?>
<input type="button" name="button" onclick="x()" value="Admin portal">



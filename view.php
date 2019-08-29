<html>
<head>
<script language="javascript">
function x()
{
window.location.href="admin portal.html";
}
</script>
<body background="j.jpg">
<font face="monotype corsiva">
<center><h1>EMPLOYEE DETAILS</h1></center>
<form name="emp" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
Enter the employee name
<input type="text" name="text">
<input type="submit" name="submit" value="click">
<input type="button" name="button" onclick="x()" value="User portal">
</form>
<?php
if($_POST['submit'])
{
$a=$_POST['text'];
$con=mysql_connect('localhost','root','');
mysql_select_db("project");
$res=mysql_query("select * from empolyee where ename='$a'");
while($row=mysql_fetch_row($res))
{
?>
<center><font face="monotype corsiva" color="black" size=6>EMPLOYEE DETAILS</center><br><br>
<center><table cellpadding=0 cellspacing=0 border=2 width=200 height=200>
<font face="monotype corsiva" color="black" size=6>
<tr>
<th>EID</th>
<td><?php echo $row[0]; ?></td></tr>
<tr>
<th>EMAIL</th>
<td><?php echo $row[1]; ?></td></tr>
<tr>
<th>NAME</th>
<td><?php echo $row[2]; ?></td></tr>
<tr>
<th>DESIGNATION</th>
<td><?php echo $row[3]; ?></td>
<tr>
<th>MOBILE NO</th>
<td><?php echo $row[4]; ?></td></tr>
<tr>
<th>PLACE OF WORK</th>
<td><?php echo $row[5]; ?></td></tr>
</center></table>
<?php
}
mysql_close($con);
}
?>








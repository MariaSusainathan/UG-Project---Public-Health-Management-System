<html>
<script type="text/javascript">
function x()
{
window.location.href="admin portal.html";
}
function goback()
{
window.history.back()
}
</script>
<font face="script mt bold" color="orange" >
<h1><center><font face="elephant" color="black">PUBLIC HEALTH MANAGEMENT SYSTEM</center></h1>
<body background="green(2).jpg">
<center><img src="devil.jpg" height=220 width=1300 border=2></center><br><br>
<?php
if($_POST['sub'])
{
session_start();
$n=$_SESSION['ename'];
$a=$_POST['id'];
$b=$_POST['email'];
$c=$_POST['name'];
$d=$_POST['des'];
$e=$_POST['mobile'];
$f=$_POST['area'];
$con=mysql_connect('localhost','root','');
mysql_select_db("project");
mysql_query("update empolyee set EID='$a' where ename='$n'");
mysql_query("update empolyee set email='$b' where ename='$n'");
mysql_query("update empolyee set ename='$c' where ename='$n'");
mysql_query("update empolyee set des='$d' where ename='$n'");
mysql_query("update empolyee set mobile='$e' where ename='$n'");
mysql_query("update empolyee set area='$f' where ename='$n'");
$res=mysql_query("select * from empolyee where ename='$n'");
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
<input type="button" name="button" onclick="x()" value="admin portal">



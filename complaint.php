<html>
<head>
<script type="text/javascript">
function x()
{
var r=confirm("Are you Sure want to proceed to user portal");
if(r==true)
{
window.location.href="user portal.php";
}
else
{
window.location.href="complaint.php";
}}
</script></head><body background="s.jpg">>
<?php
session_start();
if(isset($_SESSION['username']))
{
$u=$_SESSION['username'];
$cid=rand(10,100);
$a=$_POST['msg1'];
$b=$_POST['msg2'];
$c=$_POST['msg3'];
$d=$_POST['msg4'];
$con=mysql_connect('localhost','root','');
mysql_select_db("project") or mysql_errorno();
mysql_query("insert into complaint
values('$cid','$u','$a','$b','$c','$d')");
$q=mysql_query("select * from complaint where username='$u'");
while($row=mysql_fetch_row($q))
{
?>
<center><font face="monotype corsiva" color="black" size=6>COMPLAINT DETAILS</center>
<center><table cellpadding=0 cellspacing=0 border=2 width=200 height=200>
<font face="monotype corsiva" color="black" size=6>
<tr>
<th>CID</th>
<td><?php echo $row[0]; ?></td></tr>
<tr>
<th>Username</th>
<td><?php echo $row[1]; ?></td></tr>
<tr>
<th>Type of Complaint</th>
<td><?php echo $row[2]; ?></td></tr>
<tr>
<th>Description</th>
<td><?php echo $row[3]; ?></td>
<tr>
<th>Queries</th>
<td><?php echo $row[4]; ?></td></tr>
<tr>
<th>Request</th>
<td><?php echo $row[5]; ?></td></tr>
</center></table>
<?php
}
mysql_close($con);
}
?>
<font face="monotype corsiva" color="black" size=6> 
You Have Successfully Registered.Our Employees will contact you soon.<br>Thanks For using our service.Avail our service online 24x7.<br>Be safe and enjoy life.
<form><input type="button" name="button" onclick="x()" value="User portal"></form>
</body>
</html>
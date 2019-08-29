<html>
<head>
<body background="J.jpg">
<script language="javascript">
function x()
{
window.location.href="admin portal.html";
}
function check()
{
var r=confirm("Are u sure want to delete");
if(r==true)
{
window.location.href="de.php";
}
else
{
window.location.href="comp_details.php";
}}
</script>
<font face="monotype corsiva">
<form name="com" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
Enter the username
<input type="text" name="name">
<input type="submit" name="submit" value="click">
<input type="button" name="sub" onclick="check()" value="Delete Complaint">
<input type="button" name="button" onclick="x()" value="Admin portal">
</form>
<?php
if($_POST['submit'])
{
$a=$_POST['name'];
session_start();
$_SESSION['n']=$a;
$con=mysql_connect('localhost','root','');
mysql_select_db("project");
$res1=mysql_query("select * from complaint where username='$a'");
$res=mysql_query("select username,name,dob,area,mobile_no,gender,address from register where username='$a'");
while($row=mysql_fetch_row($res1))
{
?>
<center><font face="monotype corsiva" color="black" size=6><center><h1>COMPLAINT DETAILS</h1></center>
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
</center></table><br>
<?php 
while($row=mysql_fetch_array($res))
{
?>
<center><font face="monotype corsiva" color="black" size=6></center><center><h2>PERSONAL DETAILS</h2></center>
<center><table cellpadding=0 cellspacing=0 border=2 width=200 height=200>
<font face="monotype corsiva" color="black" size=6>
<tr>
<th>USERNAME</th>
<td><?php echo $row[0]; ?></td></tr>
<tr>
<th>NAME</th>
<td><?php echo $row[1]; ?></td></tr>
<tr>
<th>DOB</th>
<td><?php echo $row[2]; ?></td></tr>
<tr>
<th>AREA</th>
<td><?php echo $row[3]; ?></td>
<tr>
<th>MOBILE NO</th>
<td><?php echo $row[4]; ?></td></tr>
<tr>
<th>GENDER</th>
<td><?php echo $row[5]; ?></td></tr>
<th>ADDRESS</th>
<td><?php echo $row[6]; ?></td></tr>
</center></table>
<?php
}
}
mysql_close($con);
}
?>




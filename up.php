<html>
<head>
<font face="script mt bold" color="orange" >
<h1><center><font face="elephant" color="black">PUBLIC HEALTH MANAGEMENT SYSTEM</center></h1>
<body background="green(2).jpg">
<center><img src="devil.jpg" height=220 width=1300 border=2></center><br><br>
<script language="text/javascript">
function check()
{
alert("successfully updated");
}
function goback()
{
window.history.back();
}
</script>
<form name="forms" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter the Employee name
<input type="text" name="txt">
<input type="submit" name="submit" value="click"><br><br>
</form>
<?php
if($_POST['submit'])
{
$a=$_POST['txt'];
session_start();
$_SESSION['ename']=$a;
$con=mysql_connect('localhost','root','');
mysql_select_db("project");
$res=mysql_query("select * from empolyee where ename='$a'");
while($row=mysql_fetch_row($res))
{
?>
<font face="elephant" color="black" >
<center><table bordercolor="black" width=700 height=300>
<tr>
<td>
<form name="form" onsubmit="return check()" action="update.php" method="post">
<font color="black"><center><u>EMPLOYEE MANAGEMENT</u></center><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmployee id &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="id" size=20 value="<?php echo $row[0];?>"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter the email of the employee  &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="email" size=20 value="<?php echo $row[1];?>"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter the employee name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="name" size=20 value="<?php echo $row[2];?>"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter the Designation &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="des" value="<?php echo $row[3]; ?>"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter the Mobile no &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="mobile" size=20 value="<?php echo $row[4];?>"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter the Working Area &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="area" size=20 value="<?php echo $row[5];?>"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="sub" value="Update">
<input type="reset" name="msg6" value="Reset">&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" onclick="goback()" name="msg6" value="Back"><br><br><br><br>
</form>
<?php
}
mysql_close($con);
}
?>

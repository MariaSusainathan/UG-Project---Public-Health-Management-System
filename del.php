<html>
<head>
<script language="javascript">
function check()
{
alert("Successfully deleted");
}
function x()
{
window.location.href="admin portal.html";
}
</script>
<body background="j.jpg">
<font face="monotype corsiva">
<center><h1>EMPLOYEE DETAILS</h1></center>
<form name="emp" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return check()" method="post">
Enter the employee name
<input type="text" name="text">
<input type="submit" name="submit" value="Delete">
<input type="button" name="button" onclick="x()" value="Admin portal">
</form>
<?php
if($_POST['submit'])
{
$a=$_POST['text'];
$con=mysql_connect('localhost','root','');
mysql_select_db("project");
$res=mysql_query("delete from empolyee where ename='$a'");
mysql_close($con);
}
?>
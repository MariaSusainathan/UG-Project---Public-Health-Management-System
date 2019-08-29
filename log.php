<?php
$a=$_POST['msg1'];
$b=$_POST['msg2'];
$con=mysql_connect('localhost','root','');
if(!$con)
{
die("could not connect") or mysql_error();
}
mysql_select_db("project") or mysql_errorno();
$res=mysql_query("select * from register");
$yes=0;
while($row=mysql_fetch_row($res))
{
if($a==$row[0])	
{
$yes==1;
if($b==$row[1])
{
$loc="user portal.php";
session_start();
$_SESSION['username']=$a;
$_SESSION['password']=$b;
header("location:$loc");
}
else
{
?>
<?php
}}}
if($yes==0)
{
?>
<script>alert("Incorrect username and Passowrd");
window.location.href="login.php";
</script>
<?php
}
mysql_close($con);
?>



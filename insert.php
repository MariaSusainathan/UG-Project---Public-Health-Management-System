<?php
$a=$_POST['msg1'];
$b=$_POST['msg2'];
$c=$_POST['msg3'];
$d=$_POST['msg4'];
$e=$_POST['msg5'];
$f=$_POST['msg6'];
$g=$_POST['r1'];
$h=$_POST['msg7'];
$con=mysql_connect('localhost','root','');
if(!$con)
{
die("could not connect") or mysql_error();
}
else
{
mysql_select_db("project") or mysql_errorno();
mysql_query("insert into register 
values('$a','$b','$c','$d','$e','$f','$g','$h')");
mysql_close($con);
}
?>
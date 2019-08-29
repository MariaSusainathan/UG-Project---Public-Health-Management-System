<?php
$a=$_POST['msg1'];
$b=$_POST['msg2'];
$c=$_POST['msg3'];
$d=$_POST['msg4'];
$e=$_POST['msg5'];
$f=$_POST['msg6'];
$g=$_POST['msg7'];
$h=$_POST['r1'];
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
$q=mysql_query("select * from register");
while($row=mysql_fetch_row($q))
{
echo $row[0];
echo $row[1];
echo $row[2];
echo $row[3];
echo $row[4];
echo $row[5];
echo $row[6];
echo $row[7];
}
mysql_close($con);
}
?>
</body>
</html>
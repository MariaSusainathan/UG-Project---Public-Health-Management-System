<?php
$a=$_POST['email'];
$b=$_POST['name'];
$c=$_POST['designation'];
$d=$_POST['mobile'];
$e=$_POST['area'];
$con=mysql_connect('localhost','root','');
if(!$con)
{
die("could not connect") or mysql_error();
}
else
{
mysql_select_db("project") or mysql_errorno();
mysql_query("insert into empolyee(email,ename,des,mobile,area)
values('$a','$b','$c','$d','$e')");
mysql_close($con);
}
header("location:add.html");
?>
</body>
</html>
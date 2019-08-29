<html>
<head><style type="text/css"></style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head><body background="199064.jpg">
<form name="G">
<?php
if(!$_POST['submit'])
{
?>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<font face="monotype corsiva" color="yellow">
<h1><center>POLIO REGISTRATION FORM</center></h1><br>
<table border=1 color="pink" cellpadding=50 align="center">
<tr>
<td>
<font face="monotype corsiva" color="yellow" size=4>
Name of the Child
<center><input type="text" name="n1" size=30><br></center>
Date of birth    
<center><input type="date" name="n2" size=30><br></center>
Age              
<center><input type="text" name="n3" size=30><br></center>
Gender           
<center>Male           
<input type="radio" name="r1">
Female
<input type="radio" name="r2"><br><br></center>
Father's Name
<center><input type="text" name="r3" size=30><br></center>
Other information
<center><textarea name="r4"></textarea></center><br>
<center><input type="submit" name="submit" value="Register">
</tr>
</table>
</form>
<?php
}
else
{
$a=$_POST['n1'];
$b=$_POST['n2'];
$c=$_POST['n3'];
$d=$_POST['r1'];
$e=$_POST['r2'];
$f=$_POST['r3'];
$g=$_POST['r4'];
$con=mysql_connect('localhost','root','');
if(!$con)
{
die("could not connect") or mysql_error();
}
mysql_select_db("Mari") or die("mysql_errorno");
$result=mysql_query("insert into polio values('$a','$b','$c','$d','$e','$f','$g')");
while($row=mysql_fetch_row($result))
{
echo $row[0];
echo $row[1];
echo $row[2];
echo $row[3];
echo $row[4];
echo $row[5];
echo $row[6];
}
mysql_close($con);
}
?>
</html>





<?php
$a=$_POST['username'];
$b=$_POST['pass'];
$c=$_POST['name'];
$d=$_POST['dob'];
$e=$_POST['area'];
$f=$_POST['mobile'];
$g=$_POST['gender'];
$h=$_POST['address'];
$con=mysql_connect('localhost','root','');
mysql_select_db("project") or die("could not connect");
$res=mysql_query("select * from register");
while($row=mysql_fetch_row($res))
{
if($a==$row[0])
{
?>
<script type="text/javascript">
window.location.href="register.html";
alert("Username already exists");
</script>
<?php
break;
}
else if($f==$row[5])
{
?>
<script type="text/javascript">
window.location.href="register.html";
alert("Mobile no already exists");
</script>
<?php
break;
}
}
mysql_query("insert into register(username,password,name,dob,area,mobile_no,gender,address) 
values('$a','$b','$c','$d','$e','$f','$g','$h')");
?>
<script type="text/javascript">
window.location.href="home.html";
alert("Successfully registered");
</script>
<?php
mysql_close($con);
?>
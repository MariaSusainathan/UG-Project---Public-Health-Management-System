<?php
session_start();
$b=$_SESSION['n'];
$con=mysql_connect('localhost','root','');
mysql_select_db("project");
mysql_query("delete from complaint where username='$b'");
mysql_close($con);
header("location:comp_details.php");
?>

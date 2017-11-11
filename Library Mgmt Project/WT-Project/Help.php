<?php
$host="localhost";
$user="root";
$pass="";
$db="lib";

mysql_connect($host,$user,$pass);      
mysql_select_db($db);

$uid=$_GET['uid'];
$email=$_GET['email'];
$sql="SELECT * FROM registration WHERE uid='$uid' AND email='$email'";
$res=mysql_query($sql);
$row=mysql_fetch_assoc($res);
echo "Your Password".$row['password'];
?>

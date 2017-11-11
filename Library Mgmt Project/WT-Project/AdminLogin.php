<?php
$host="localhost";
$user="root";
$pass="";
$db="lib";

mysql_connect($host,$user,$pass);
mysql_select_db($db);

$uname=$_POST['uname'];
$pwd=$_POST['pwd'];

if(isset($_POST['uname']))
{
  $sql="SELECT * FROM admin WHERE uname='".$uname."' AND pwd='".$pwd."'";
  $res=mysql_query($sql);
  $row=mysql_fetch_assoc($res);
  

 if(mysql_num_rows($res)==1)
  {
  header("Location:Admin.php?name=".$row['name']);
  }
else{
  header("Location:Admin.html");
 }
}
?>
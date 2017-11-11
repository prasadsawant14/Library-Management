<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$host="localhost";
$user="root";
$pass="";
$db="lib";

mysql_connect($host,$user,$pass);
mysql_select_db($db);


if(isset($_POST['uid']))
{
  $sql="SELECT * FROM registration WHERE uid='$uid' AND password='$pwd'";
  $res=mysql_query($sql);
  $row=mysql_fetch_assoc($res);

 if(mysql_num_rows($res)==1)
  {
  header('Location:userfetch.php?&uid='.$row['uid']);
  }
else
{
  header("Location:OLMS.html");
  }
}
?>
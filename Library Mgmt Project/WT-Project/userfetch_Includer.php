<?php
$host="localhost";
$user="root";
$pass="";
$db="lib";

@mysql_connect($host,$user,$pass);      
@mysql_select_db($db);

//$name=$_GET['name'];
$uid=$_GET['uid'];
$name="SELECT * FROM registration WHERE uid='".$uid."'";
$bookname="SELECT bookname FROM bookrecords WHERE uid='".$uid."'";
$penalty="SELECT fine FROM bookrecords WHERE uid='".$uid."'";
$bookstatus="SELECT bookstatus FROM bookrecords WHERE uid='".$uid."'";
 $resName=@mysql_query($name);
 $rowName=@mysql_fetch_assoc($resName);

 $res=@mysql_query($bookname);
 $row=@mysql_fetch_assoc($res);
 $res1=@mysql_query($penalty);
 $row1=@mysql_fetch_assoc($res1);
 $res2=@mysql_query($bookstatus);
 $row2=@mysql_fetch_assoc($res2);
?>
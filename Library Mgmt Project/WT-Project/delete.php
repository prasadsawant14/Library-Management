<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysql_select_db("lib", $connection); // Selecting Database.
$uid=$_GET['uid'];
$query = mysql_query("DELETE FROM registration WHERE uid='$uid'"); // Delete query
if($query){
echo "You have Successfully deleted a record....";
}
else
{
echo "Error....!!";
}
mysql_close ($connection);
?>
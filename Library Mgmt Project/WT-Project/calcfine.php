<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysql_select_db("lib", $connection); // Selecting Database.
$uid=$_GET['uid'];
$amt=$_GET['amt'];
$query = mysql_query("update bookrecords set fine='$amt' where uid='$uid'"); //update query
if($query)
{
	echo"Fine Imposed";
}
else
{
	echo "error..!!!";
}
mysql_close ($connection);
?>
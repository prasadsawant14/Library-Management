<?php
$host="localhost";
$user="root";
$pass="";
$db="lib";

@mysql_connect($host,$user,$pass);      
@mysql_select_db($db);

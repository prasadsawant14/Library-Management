<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysql_select_db("lib", $connection); // Selecting Database.
$uid=$_POST['UID'];
$password= $_POST['pwd']; // Fetching Values from URL.
$name=$_POST['name'];
$email=$_POST['email'];
 // Password Encryption, If you like you can also leave sha1.
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysql_query("SELECT * FROM registration WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("insert into registration(uid, name, email, password) values ('$uid', '$name','$email', '$password')"); // Insert query
if($query){
echo "You have Successfully Registered.....";
echo" To login ";
echo "<a href='OLMS.html'>Click Here..!!!";
}else
{
echo "Error....!!";
}
}else{
echo "This email is already registered, Please try another email...";
}
}
mysql_close ($connection);
?>
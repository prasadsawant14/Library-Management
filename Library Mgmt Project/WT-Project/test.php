<?php
ini_set('mysql.connect_timeout',300);
ini_set('default_socket_timeout',300);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Images</title>
</head>
<body>
	<form method="post" >
		<br>
		<input type="file" name="image">
		<br>
		<input type="submit" value="submit">
	</form>
	<?php
	if(isset($_POST['sumit'])){

	if(getimagesize($_FILES['image']['temp_name']) == false){
	echo "Please select an image";

}
else{
	$image = addslashes($_FILES['image']['temp_name']);
	$name = addslashes($_FILES['image']['name']);
	$image = file_get_contents($image);
	$image = base64_encode($image);	
	saveImage($name,$image);
}
}
function saveImage($name,$image){
	$con = @mysql_connect("localhost","root","");      
    @mysql_select_db("shivam",$con);
    
    $qry = "INSERT INTO images (name,image) values ('$name','$image')";
    $result=@mysql_query($qry,$con);
 	
 	if($result){
 		echo "<br>Image uploaded";
 	}
 	else{
 		echo "<br>Image not uploaded" ;
 	}
}
	




	?>
</body>
</html>
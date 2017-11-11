<html>
<link rel="stylesheet" href="css/OLMS.css">
<div style="border-radius: 25px;background-color:darkblue;color:white;text-align:center;padding:5px;border:3px solid black; background: rgba(200, 54, 200, 0.5)
">
<img src="headerlogo.png" height="42" width="42"/>
<h1><marquee>Admin Portal</marquee></h1>
</div>

<link rel="stylesheet" href="css/OLMS.css">
<body background="library1.jpg">
<div  style="float:right;width:300px;height:90px;border-radius: 15px;background: rgba(54, 178, 200, 0.9)"></div>
	
<form method='get' action='OLMS.html'><input style='position: relative;left:1280px;top:30px' type='submit' value='Logout'>
</form>
<div style="height:50px"></div>
<div align='left' style="border-radius:15px;height:291px;width:200px;border:3px solid #6D343D;background: rgba(151,151,26, 0.8)">
	
  <div  align='center'style="border:3px solid #6D343D" ><h2><a href="Admin1.php">Home</a></h2></div>
  <div align='center'style="border:3px solid #6D343D" ><h2><a href="updaterecords.php">UpdateRecords</a></h2></div>
  <div align='center'style="border:3px solid #6D343D" ><h2><a href="records.php">Records</a></h2></div>
  <div align='center'style="border:3px solid #6D343D" ><h2><a href="Fine.php">Fine</a></h2></div>
</div>
 <div align="center"style="background: rgba(54, 178, 200, 0.9);width:250px;display:block; margin-top:-230px;margin-left:300px">
<form method="get"action="add.php">
	<h3>Enter UID:</h3><p><input type="text" id="uid" name="uid" value="" placeholder="UID"></p>
	<h3>Enter Default-password:</h3><p><input type="text" id="pwd" name="pwd" value="" placeholder="password"></p>
	<h3>Enter name</h3><p><input type="text" id="name" name="name" value="" placeholder="name"></p>
	<h3>Enter email</h3><p><input type="text" id="email" name="email" value="" placeholder="email"></p>
    <p class="submit"><input type="submit"  value="ADD"></p>
</form>
</div>
	
	<div align="center" style="background: rgba(54, 178, 200, 0.9);width:250px;display:block;margin-top:-460px;margin-left:580px;margin-right:200px">
<form method="get "action="delete.php">
	<h3>Enter UID:</h3><p><input type="text" id="uid" name="uid" value="" placeholder="UID"></p>
	<p class="submit"><input style="position: relative" type="submit"  value="DELETE"></p>
</form>
</div>


	
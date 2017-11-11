<html>
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



<div align="center" style="background: rgba(54, 178, 200, 0.9);width:250px;display:block;margin-top:-260px;margin-left:280px;margin-right:200px">
<form method="get "action="calcfine.php">
	<h3>Enter UID:</h3><p><input type="text" id="uid" name="uid" value="" placeholder="UID"></p>
	<h3>Enter Amount:</h3><p><input type="text" id="amt" name="amt" value="" placeholder="amount"></p>
	<p class="submit"><input style="position: relative" type="submit"  value="Submit"></p>
</form>
</div>
</body>
</html>
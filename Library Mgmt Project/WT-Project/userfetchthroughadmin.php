<html>
<div style="border-radius: 25px;background-color:darkblue;color:white;text-align:center;padding:5px;border:3px solid black; background: rgba(200, 54, 200, 0.5)
">
<img src="headerlogo.png" height="42" width="42"/>
<h1><?php include("userfetch_Includer.php"); echo $rowName['name']."'s "?>Account</h1>
</div>

<link rel="stylesheet" href="css/OLMS.css">
<body background="library1.jpg">
<!--<div  style="height:90px;color:white;border-radius: 15px;background: rgba(54, 178, 200, 0.9)">
<h1><?php include("userfetch_Includer.php"); echo "  ".$rowName['name'];?></h1>
</div>
<form method='get' action='OLMS.html'><input style='position: relative;top: -63px;left: 1310px' type='submit' value='Logout'>
</form>-->
<div align='center'style='width:400px;color:white;background: rgba(160, 203, 192, 0.8)'>
<fieldset>
		<legend>
			<h1 style='color:white'>Your Info.</h1>
		</legend>
		<table border='1' style='color:white'>
			
			<tr><td><h3>Bookheld</td></h3><td><h3><?php  include("userfetch_Includer.php"); echo $row['bookname']; ?></h3></td></tr>
			<tr><td><h3>Fine</td><td><h3><?php include("userfetch_Includer.php"); echo $row1['fine']; ?></h3></td></tr>
			<tr><td><h3>Bookstatus</td><td><h3><?php include("userfetch_Includer.php") ;echo $row2['bookstatus']; ?></h3></td></tr>
			</table>
	</div>
        
	</fieldset>
</body>
</html>
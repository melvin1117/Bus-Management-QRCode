<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'iclub');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error());
$query="SELECT * FROM driver WHERE status LIKE 'available' ";
$data = mysqli_query ($con,$query)or die(mysqli_error($con));
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$driver_name=$_POST['driver_name'];
	$driv_cntct_no=$_POST['driv_cntct_no'];
	$alt_cntct_no="\"".$_POST['alt_cntct_no']."\"";
	$address=$_POST['address'];
	if($address==""){
		$address=null;
	}
$query	="INSERT INTO driver (driver_name,driv_cntct_no,alt_cntct_no,address) VALUES (\"$driver_name\",$driv_cntct_no,$alt_cntct_no,\"$address\")";
	$data = mysqli_query ($con,$query)or die(mysqli_error($con));
	if($data)
	{
		echo "<h2>Entry Successful</h2>";
		('index.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Driver Entry</title>
	<style type="text/css">
		td{
			text-align: left;
			width: 150px;
		} 
		input,select{
			width: 160px;
		}
	</style>
</head>
<body>
<table>
<form id="frmdriver" action="#" method="post">
<tr><td>Driver Name	</td><td><input type="text" required name="driver_name" id="driver_name" value=""></td></tr><tr><td>
Contact No. </td><td><input type="number" required name="driv_cntct_no" id="driv_cntct_no" value=""></td></tr><tr><td>
Alternate Contact No.	</td><td><input type="number" required name="alt_cntct_no" id="alt_cntct_no" value=""></td></tr><tr><td>
Address </td><td><textarea name="address" required id="address" value=""></textarea></td></tr>
<tr><td><button type="submit" value="submit" name="add_bus">Add Entry</button></td></tr></form></form>
</table>
</body>
</html>
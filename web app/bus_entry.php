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
	$bus_no=$_POST['bus_no'];
	$route_no=$_POST['route_no'];
	$bus_reg="\"".$_POST['bus_reg']."\"";
	$curr_stat=$_POST['location'];
	$driver_id=$_POST['driver'];
	if($curr_stat==""){
		$curr_stat="inside";
	}
	if ($driver_id=="") {
		$driver_id=0;
	}
	if ($curr_stat=="inside") {
		
	}
$query	="INSERT INTO bus (bus_no,route_no,bus_reg,curr_stat,driver_id) VALUES ($bus_no,$route_no,$bus_reg,\"$curr_stat\",$driver_id)";
	$data = mysqli_query ($con,$query)or die(mysqli_error($con));
	$query="UPdate table bus set in_time= (select timestamp from bus where bus_no=$bus_no)";
	echo $query;
	$data = mysqli_query ($con,$query)or die(mysqli_error($con));
	if($data)
	{
		echo "<h2>Entry Successful</h2>";
		redirect('index.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<form id="frmbus" action="#" method="post">
<tr><td >Bus No. </td><td><input type="number" required name="bus_no" id="bus_no" value=""></td></tr>
<tr><td >Route No. </td><td><input type="number" required name="route_no" id="route_no" value=""></td></tr>
<tr><td >Transport Registration No. </td><td><input type="text" required name="bus_reg" id="bus_reg" placeholder="TN02-3969" value=""></td></tr>
<tr><td >Current Location </td><td><select name="location">
					<option value="inside" selected >Inside</option>
					<option value="outside" >Outside</option>
				</select></td></tr>
<tr><td>Driver</td><td><select name="driver">
<option value="" selected style="color:grey">Driver Name</option>
<?php  	while($row = mysqli_fetch_assoc($data)){
      echo "<option value=".$row['driver_id'].">".$row['driver_name']."</option>";}
	?>	</select></td></tr>
<tr><td><button type="submit" value="submit" name="add_bus">Add Entry</button></td></tr></form>
</table>
</body>
</html>
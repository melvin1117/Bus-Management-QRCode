<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'iclub');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error());
$localIP = getHostByName(getHostName());
 $query="SELECT * FROM reg_ip WHERE ip_no = \"$localIP\"";
$data = mysqli_query ($con,$query)or die(mysqli_error($con));
$no=mysqli_num_rows($data);
$bus_no=$_GET['bus'];
if ($bus_no==''||$no==0) {
	header('location:http://www.sathyabamauniversity.ac.in');
}else{

$query="SELECT * FROM bus WHERE bus_no = $bus_no ";
$data = mysqli_query ($con,$query)or die(mysqli_error($con));
$num_row=mysqli_num_rows($data);
if($num_row==0)
	header('location:http://www.sathyabamauniversity.ac.in');
else{	$row=mysqli_fetch_assoc($data);
	$bus_id=$row['bus_id'];
	$route_no=$row['route_no'];
	$driver_id=$row['driver_id'];
	$status=$row['curr_stat'];
$query="SELECT * FROM driver WHERE driver_id = $driver_id ";
$data = mysqli_query ($con,$query)or die(mysqli_error($con));
while($row = mysqli_fetch_assoc($data)){
	$driver_name=$row['driver_name'];
	$contact_no=$row['driv_cntct_no'];
}}
$query="SELECT * FROM log ORDER BY log_id DESC LIMIT 1;";
$data = mysqli_query ($con,$query)or die(mysqli_error($con));
$row=mysqli_fetch_assoc($data);
if($row['bus_id']!=$bus_id){	
	if ($status=='inside') {
		$status="outside";
	}
	else
		$status="inside";
$query1="Insert into log (bus_id,bus_no,route_no,driver_id,status) values ($bus_id,$bus_no,$route_no,$driver_id,\"$status\");";
$data1 = mysqli_query ($con,$query1)or die(mysqli_error($con));
}
$query="SELECT * FROM log ORDER BY log_id DESC LIMIT 1;";
$data = mysqli_query ($con,$query)or die(mysqli_error($con));
while($row = mysqli_fetch_assoc($data)){
	$log_id=$row['log_id'];
	$time=$row['timestamp'];
}
$timestamp="\"".$time."\"";
$query="UPDATE bus set curr_stat=\"$status\",log_id=$log_id,timestamp=$timestamp WHERE bus_id=$bus_id;";
$data = mysqli_query ($con,$query)or die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Entry Page</title>
	<style type="text/css">
		table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
	</style>
</head>
<body>
<br><br><br><br>
<h2 align="center">Current Bus</h2>
<br><br>
<table align="center" style="border:solid;">
	<tr><th>Route No.</th><th>Bus No.</th><th>Driver Name</th><th>Contact No.</th><th>Status</th><th>TimeStamp</th></tr>
	<?php echo "<tr><td>$route_no</td><td>$bus_no</td><td>$driver_name</td><td>$contact_no</td><td>$status<td>$time</tr>"; ?>
</table>

</body>
</html>
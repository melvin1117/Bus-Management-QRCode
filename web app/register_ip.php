<?php
 define('DB_HOST', 'localhost');
define('DB_NAME', 'iclub');
define('DB_USER','root');
define('DB_PASSWORD','');
  $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error());
$ip_no=getHostByName(getHostName());
	$localIP = "\"".$ip_no."\"";

 $query="SELECT * FROM reg_ip where ip_no = $localIP";
  $data = mysqli_query ($con,$query)or die(mysqli_error($con));
  $num=mysqli_num_rows($data);
 if($_SERVER["REQUEST_METHOD"] == "POST"&&$num==0)
{
$query	="INSERT INTO reg_ip (ip_no) VALUES ($localIP)";
  $data1 = mysqli_query ($con,$query)or die(mysqli_error($con));
if ($data1 ) {
	echo "IP Addres Registered";
	}
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register IP</title>
<script type="text/javascript">
	window.onload = function WindowLoad(event) {
    // alert("Hello");
}
</script>
</head>
<body>
<div style="padding-top: 10%; padding-left: 30%; padding-right: 30%">		<h3>Your IP Address is : <?php echo $ip_no;?></h3>
<?php if (mysqli_num_rows($data)==0): ?>
	<form id="ip_reg" name="ip_reg" action="#" method="POST">
		<input type="hidden" name="ip_no" value="<?php echo $localIP;?>" readonly >
		<button type="submit" value="submit" >Register</button>
	</form>
<?php else:?>
	<h3>Your IP is already registered</h3>
	<button type="submit" value="submit" >Remove</button>
<?php endif ?>
</div>
</body>
</html>
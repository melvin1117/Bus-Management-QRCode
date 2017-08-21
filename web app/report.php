<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'vehicle');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error());
$query="SELECT * FROM data group by data_id ";
echo $localIP."Hello";

$data = mysqli_query ($con,$query)or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
	<script type="text/javascript">
	function searchLoad(search_value) {
		document.getElementById("chek").innerHTML=search_value;
		document.getElementById("search_title").hidden=false;
	LoadReport(search_value)}

	function loadreport(value)
    { 
    switch(value)
    {
      case 'Vehicle No':
      {
        var vehicle=[""<?php 
        while($row = mysqli_fetch_assoc($data)){
      	echo ",".$row['vehicle_no'];}
 	    ?>];
        var sel = document.getElementById('search_title');
        while(sel.options.length>0)
        {
          sel.remove(0);
        }
        for(var i = 0; i < vehicle.length; i++)
        {
          var opt = document.createElement('option');
          opt.innerHTML = vehicle[i];
          opt.value = veicle[i];
          sel.appendChild(opt);
        }
      }break;
      default:{}break;
    }
  }
	</script>
</head>
<body>
<h2>Generate Report</h2>
<tr><td >Search By</td><td><select name="search" onchange="javascript:getIP();" >
					<option value="vehicle_no." onclick="searchLoad(this.innerHTML);">Vehicle No</option>
					<option value="vehicle_type" onclick="searchLoad(this.innerHTML);">Vehicle Type</option>
					<option value="driver" onclick="searchLoad(this.innerHTML);">Driver Name</option>
					<option value="Date" onclick="searchLoad(this.innerHTML);">Date</option>
				</select></td></tr>
<tr><td><p id="chek"></p><select hidden id="search_title" name="search_title">Title</select><option></option></td></tr></div>
</body>
</html>
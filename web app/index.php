<!DOCTYPE html>
<html>
<head>
	<title>Bus List</title>
	<meta http-equiv="refresh" content="5" charset="utf-8">
	<style type="text/css">
		table {

    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin: 0 auto;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
/*    background-color: #e3e6ad ;*/
    background-color: #ffffff;
   

}
tr:nth-child(odd) {
    background-color: #e3e6ad ;
/*    background-color: #ffffff;*/
   

}

button,input {
 font-family: Arial,Helvetica,sans-serif;
 font-size: 16px;
    padding-left: 3%;
    padding-right: 3%;
}
html, body {
    height: 100%;
    
  }
  #tableContainer-1 {
    height: 100%;
    width: 100%;
    display: table;
  }
  #tableContainer-2 {
    vertical-align: middle;
    display: table-cell;
    height: 100%;
  }
  form
  {
    padding-top: 5%;
    padding-left: 49%;

  }
  div
  {
    padding-top: 10%;
    padding-right: 5%;
    padding-left: 5%;
  }

	</style>
  <script type="text/javascript">
        function PrintDiv() {
            var contents = document.getElementById("dvContents").innerHTML;
            var frame1 = document.createElement('iframe');
            frame1.name = "frame1";
            frame1.style.position = "absolute";
            frame1.style.top = "-1000000px";
            document.body.appendChild(frame1);
            var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
            frameDoc.document.open();
            frameDoc.document.write('<html><head><title>'+document.title+'</title>');
            frameDoc.document.write('</head><body>');
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                document.body.removeChild(frame1);
            }, 500);
            return false;
        }
    </script>
</head>
<body background="sbubg.jpg">
<div id="dvContents" >
<h1 align="center">Bus Log</h1><br>
<table align="center" style="border:solid;">
  <tr><th>Route No.</th><th>Bus No.</th><th>Driver Name</th><th>Status</th><th>TimeStamp</th></tr>
  <?php
  define('DB_HOST', 'localhost');
define('DB_NAME', 'iclub');
define('DB_USER','root');
define('DB_PASSWORD','');
  $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error());
  $query="SELECT * FROM bus b,driver d where b.driver_id = d.driver_id";
  $data = mysqli_query ($con,$query)or die(mysqli_error($con));
    while($row = mysqli_fetch_assoc($data)){
      $bus_no=$row['bus_no'];
      $route_no=$row['route_no'];
      $Status=$row['curr_stat'];
      $time=$row['timestamp'];
      $driver=$row['driver_name'];
      echo "<tr><td>$route_no</td><td>$bus_no</td><td>$driver</td><td>$Status<td>$time</tr>";
  }
  ?>
</table>
</div>
<form id="form1">
    <input type="button" onclick="PrintDiv();" value="Print"  />
</form>
</body>
</html>
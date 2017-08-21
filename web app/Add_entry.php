<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Entry</title>
<script type="text/javascript">
	function go(url)
		{
			document.getElementById('frmientry').hidden=false;
			document.getElementById('frmientry').src=url;
		}
		function titl(titl,url) {
			document.title = titl;
		go(url);
		}
</script>
<style type="text/css">
	
		iframe{
			height: 90%;
			width:90%;
			position:absolute;
			left:5%;
			right:5%;
			top:5%;
			background-color:#eeeeee; 
	}
label
{
	align-self: left;	
}

/*input[type=radio] { margin-right: -1.65em; z-index: 2; }*/
.radiostyle{
	align: absolute;
    background-color: #D1C4E9;
    border-radius: 8px;
    padding: 4px 4px 4px 1.75em;
}

.radiostyle:hover{
    background-color: #80DEEA;    
    cursor:pointer;
}

input[type=radio]:checked+label {
     Or `#a1:checked+label` if you only want it for that input 
    background-color: #B2DFDB
}
}
</style>
</head>
<body>
<div id="selecter" >
<input type='radio' name='entry' id="en1" value='Driver_entry' autofocus onchange="javascript:titl('Driver entry','driver_entry.php');;"></input>
<label for="en1" class="radiostyle" style="align:absolute;" accesskey="c">Driver</label>
<input type='radio' name='entry'  id="en2" value='bus_entry' onchange="javascript:titl('Bus Entry','bus_entry.php');;"></input>
<label for="en2" class="radiostyle" accesskey="b">Bus</label></div>
			
<iframe id="frmientry" hidden="none" src="" style="" ></iframe>
</body>
</html>
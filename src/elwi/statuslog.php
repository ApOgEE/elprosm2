<?php 

include('elweb.class.php');
$ew = new elweb();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Realtime Rain Gauge System</title>
<style type="text/css">
body {margin:0;}
.heading {height:60px;width:100%;background-color:#2B6D21;}
</style>
<link rel="stylesheet" type="text/css" href="css/sys_style.css" />
<script type="text/javascript">
function loadXMLDoc()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("logarea").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","statlog.php",true);
	xmlhttp.send();
	setTimeout("loadXMLDoc()", 10000);
}
</script>
</head>
<div id="container">
<?php $ew->printHeader(); ?>
<div id="mainmenu">
<ul>
	<li><a href="info.php">Info</a></li>
	<li class="selected"><a href="raingauge.php">Rain Gauge</a></li>
	<li><a href="network.php">Network</a></li>
	<li class="separator">-</li>
	<li><a href="logout.php">Logout</a></li>
</ul>
</div>

<div id="submenu">
<h3><strong>Subcategories:</strong></h3>
<ul>
	<li><a href="raingauge.php">Device ID</a></li>
	<li class="selected"><a href="statuslog.php">Status Log</a></li>

</ul>
</div>
<div id="content">

<h2>Status log</h2>

<pre id="logarea" style="background-color: white; border: 1px inset; font-family: Monospace,monospace; font-size: 8pt; height: 150px; margin: 0px; overflow: auto; padding: 3px; text-align: left; width: 98%;">

</pre>
<script type="text/javascript">
//var logarea = document.getElementById("logarea");
//logarea.innerHTML = "<?php echo $ew->getLatestLog(); ?>";
loadXMLDoc();
</script>


</div>
<br />


<hr />
<div id="footer">
	<h3>Embedded Linux Web Interface</h3>
	<em>End user graphical interface for Embedded Linux</em>

</div>
</div> <!-- End #container -->

</body>
</html>

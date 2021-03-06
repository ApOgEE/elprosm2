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
	<li><a href="statuslog.php">Status Log</a></li>
	<li class="selected"><a href="history.php">History Files</a></li>

</ul>
</div>
<div id="content">

<h2>History</h2>

</div>
<br />
<?php $ew->printFootInput(); ?>   

<hr />
<div id="footer">
	<h3>Embedded Linux Web Interface</h3>
	<em>End user graphical interface for Embedded Linux</em>

</div>
</div> <!-- End #container -->

</body>
</html>

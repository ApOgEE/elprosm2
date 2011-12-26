<?php 

include('elweb.class.php');
$ew = new elweb();

if (isset($_POST)) {
	$newid = $_POST['sender_id'];
	if (strlen($newid) != 0) {
		writeSenderConfig($newid);
	}
}

function writeSenderConfig($senderid) {
	$myFile = "/tmp/tmpConfig.txt";
	$fh = fopen($myFile, 'w') or die("can't open file");
	$stringData = "sender=\"".$senderid."\"";
	fwrite($fh, $stringData);
	fclose($fh);
	shell_exec('sudo cp -f '.$myFile.' /etc/raingauge/rgdata.conf');
	unlink($myFile);

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Realtime Rain Gauge System</title>
<script type="text/javascript">
function saveconfig() {
	//alert('saving');
	document.forms['raingauge'].submit();
	return false;
}
</script>
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
	<li class="selected"><a href="raingauge.php">Device ID</a></li>
	<li><a href="statuslog.php">Status Log</a></li>

</ul>
</div>
<div id="content">
<?php
/*
if (isset($newid)) {
		echo "<pre>";
		echo "new id: ".$newid;
		echo "</pre>";
}*/
?>
<h2>Device ID Configuration</h2>

<div style="" id="raingauge_setting" class="settings">
<h3><strong>ID Settings</strong></h3>
<form name="raingauge" method="post" action="">
<div class="settings-content">
<table width="100%" summary="Settings">
<tbody><tr style="" id="field_wan_ipaddr">
<td width="40%">Sender ID</td><td width="60%">
<input type="text" value="<?php echo $ew->getRGSenderId(); ?>" name="sender_id" id="sender_id">
</td></tr>
</tbody></table>
</div>
<blockquote class="settings-help">
<h3><strong>Short help:</strong></h3>
<h4>Sender ID Settings:</h4><p>Sender ID is the device id recognised by the server.</p>
</blockquote>
<div class="clearfix">&nbsp;</div></div>


</div>
<br />
<?php $ew->printFootInput(); ?>   
</form>
<hr />
<div id="footer">
	<h3>Embedded Linux Web Interface</h3>
	<em>End user graphical interface for Embedded Linux</em>

</div>
</div> <!-- End #container -->

</body>
</html>

<?php

include ('elweb.class.php');

$ew = new elweb();
if ($ew->checkUserSession()) {
	header('Location:'.BASE_URL.'/info.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Realtime Rain Gauge System</title>
<link rel="stylesheet" type="text/css" href="css/sys_style.css" />
<link rel="stylesheet" type="text/css" href="css/login-box.css" />
<style type="text/css">
body {
	/* background-color: #5e8ab7; */ 
	background-color: #2c71d8;
	}
</style>
</head>
<div id="container">
<div id="header">
	<div id="short-status">
		<h3><strong>Status:</strong></h3>
		<ul>
			<li><strong> </strong></li>
			<li><strong>Host:</strong> Raingauge</li>
			<li><strong>Uptime:</strong> 6 days, 21:55</li>

			<li><strong>Load:</strong> 0.00, 0.00, 0.00</li>
		</ul>
	</div>
</div>

<div id="login_content">

<div id="login-box">
<form method="post" action="login.php">
<H2>Login</H2>
Please enter your username and password.
<br />
<br />
<div id="login-box-name" style="margin-top:10px;">Username:</div><div id="login-box-field" style="margin-top:10px;"><input name="q[1]" class="form-login" title="Username" value="" size="30" maxlength="2048" /></div>
<div id="login-box-name">Password:</div><div id="login-box-field"><input name="q[2]" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div>
<br />
<br />
<br />
<input type="submit" value="" style="background: url(images/login-btn.png) 0 ;border:0;width:103px;height:42px;margin-left:90px;" />
</form>
</div>

</div>
<hr />
<div id="footer">
	<h3>Embedded Linux Web Interface</h3>
	<em>End user graphical interface for Embedded Linux</em>

</div>
</div> <!-- End #container -->

</body>
</html>

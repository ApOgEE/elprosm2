<?php

define('BASE_URL','http://'. $_SERVER['HTTP_HOST']);
define('ETHNAME', 'eth2');

class Elweb {
	function __construct() {
		session_start();
	}
	
	function checkLogin() {
		if (!$this->checkUserSession()) {
			header('Location:'.BASE_URL.'/login.php');
		}
	}
	
	function checkUserSession() {
		if ($_SESSION['logged_in']) {
			return true;
		} elseif (isset($_POST['q'])) {
			$req = $_POST['q'];
			if (($req[1] == 'root') && ($req[2] == 'admin')) {
				$_SESSION['logged_in'] = true;
				return true;
			} else {
				session_destroy();
			}
		}
		return false;
	}
	
	function logout() {
		$_SESSION['logged_in'] == false;
		session_destroy();
		header('Location:'.BASE_URL.'/login.php');
	}

	function getUptime() {
		$data = shell_exec('uptime');
		$uptime = explode(' up ', $data);
		$ul = explode(',', $uptime[1]);
		$uptime = $ul[0].', '.$ul[1];
		$load = explode(': ', $ul[2]);
		
		$upload = array($uptime,$load[1].', '.$ul[3].', '.$ul[4]);
		
		return $upload;
	}
	
	function getUname() {
		$data = shell_exec('uname -a');
		return $data;
	}
	
	function printHeader() {
		$ul = $this->getUptime();
		?>
<div id="header">
	<div id="short-status">
		<h3><strong>Status:</strong></h3>
		<ul>
			<li><strong> </strong></li>
			<li><strong>Host:</strong> Raingauge</li>
			<li><strong>Uptime:</strong> <?php echo $ul[0]; ?></li>

			<li><strong>Load:</strong> <?php echo $ul[1]; ?></li>
		</ul>
	</div>
</div>
		<?
	}
	
	function getMacAddress() {
		$mac = shell_exec("ip link show ".ETHNAME." | awk '/ether/ {print $2}'");
		return $mac;
	}
	
	function getSysIP() {
		$sysip = shell_exec("ifconfig ".ETHNAME.' | sed -n \'s/.*inet addr:\([0-9.]\+\)\s.*/\1/p\'');
		return $sysip;
	}
	
	function getGateway() {
		$gwaddr = shell_exec('netstat -r | grep ^default | awk \'{print $2}\'');
		return $gwaddr;
	}
	
	function getRGSenderId() {
		$sender = shell_exec('. /etc/raingauge/rgdata.conf; echo $sender;');
		return $sender;
	}
	
	function getLatestLog() {
		$ldata = shell_exec('sudo tail -n11 /var/log/syslog');
		//$ldata = shell_exec('whoami');
		$ldata = str_replace("\n","\\n",$ldata);
		//$ldata = shell_exec('. /etc/raingauge/rgdata.conf; echo $sender');
		//$ldata = "testing\\n123";
		return $ldata;
	}
	
	function printFootInput() {
		?>
<fieldset id="save">
	<legend><strong>Proceed Changes</strong></legend>
	
	<ul class="apply">
		<li>
		<a href="<?php echo basename($_SERVER['PHP_SELF']); ?>?mode=save&amp;prev=<?php echo basename($_SERVER['PHP_SELF']); ?>" rel="lightbox" onclick="return saveconfig();">Apply Changes &laquo;</a>
		</li>
		<li><a href="<?php echo basename($_SERVER['PHP_SELF']); ?>?mode=clear&amp;prev=<?php echo basename($_SERVER['PHP_SELF']); ?>">Clear Changes &laquo;</a></li>
		<?php /* <li><a href="updateconfig.php?mode=review&amp;prev=<?php echo basename($_SERVER['PHP_SELF']); ?>">Review Changes  &laquo;</a></li> */ ?>
	</ul>
</fieldset>        

		<?php
	}

}

?>

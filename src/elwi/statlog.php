<?php
		$ldata = shell_exec('sudo tail -n10 /var/log/syslog');
		//$ldata = str_replace("\n","\\n",$ldata);
		echo $ldata;
?>

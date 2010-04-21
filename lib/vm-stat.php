<?php
include ("config.php");
$vm=shell_exec("$sudo $vbox list vms | grep -v VirtualBox | grep -v \(C\) | grep -v All | awk '{ print $1 }' ");
echo "$vm";
?>

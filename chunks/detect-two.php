<?php

$Browser_Detection = array();

$Browser_Detection['User Agent'] = $_SERVER['HTTP_USER_AGENT'];

if (strpos($Browser_Detection['User Agent'], 'Windows') !== false) $Browser_Detection['Operating System'] = 'Windows';
else if (strpos($Browser_Detection['User Agent'], 'Macintosh') !== false) $Browser_Detection['Operating System'] = 'Macintosh';
else if (strpos($Browser_Detection['User Agent'], 'Linux') !== false) $Browser_Detection['Operating System'] = 'Linux';
else if (strpos($Browser_Detection['User Agent'], 'FreeBSD') !== false) $Browser_Detection['Operating System'] = 'FreeBSD';
else $Browser_Detection['Operating System'] = false;
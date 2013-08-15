<?php if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$VisitorIP = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$VisitorIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$VisitorIP = $_SERVER['REMOTE_ADDR'];
} echo geoip_country_code_by_name($VisitorIP); ?>

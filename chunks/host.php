<?php

$host = htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES | ENT_HTML5, "UTF-8");

if ( $host === '192.168.1.6' ) {
	$home = 'http://192.168.1.6/midoribrowser.org';
	$location = str_replace('/midoribrowser.org', '', $location);
} else {
	$home = 'http://' . $host;
}

?>
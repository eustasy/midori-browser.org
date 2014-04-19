<?php

$host = htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

if ($host === 'localhost') {
	$home = 'http://localhost/midori-browser.org';
	$location = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
	$location = str_replace('/midori-browser.org', '', $location);
} else {
	$home = 'http://'.$host;
	$location = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
<?php

// Get the user agent as a string
$ua = $_SERVER["HTTP_USER_AGENT"];

// Define Linux as a variable
$linux = strpos($ua, 'Linux') ? true : false;

// Define Windows as a variable
$windows = strpos($ua, 'Windows') ? true : false;

// Define OS X as a variable
$osx = strpos($ua, 'Macintosh') ? true : false;

/*
if ($ua) {

	if ($linux) { // Linux
		echo 'You are using Linux.';
	} elseif ($windows) { // Windows
		echo 'You are using Windows.';
	} elseif ($osx) { // OS X
		echo 'You are using OS X.';
	} else {
		echo 'You are using something else.';
	}

}
*/

?>

<?php

// Get it?
$content = file_get_contents($url);

// What is it went horribly wrong?
if ( $content === False ) {

	echo '<!-- Something went horribly wrong. -->';

} else {

	// What needs to be taken off the end
	$remove = array('</body>', '</html>');

	// Just a little trim
	$content = str_replace($remove, "", $content);

	// They always take too much off
	echo end(explode('<body>',$content));

	// He did it.
	echo '<p class="right"><a href="' . $edit . '">Source / Edit</a></p>';

} // All done.

?>

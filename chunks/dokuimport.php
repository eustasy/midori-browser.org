<?php

// Get it?
$content = file_get_contents($url);

// What is it went horribly wrong?
if ( $content === False ) {

	echo '<!-- Something went horribly wrong. -->';

} else {

	// They always take too much off
	$content = end(explode('<body>',$content));

	// What needs to be taken off
	$raw = array('</body>', '</html>', '>Midori - ', 'h5', 'h4', 'h2', 'h1');
	$cooked = array('', '', '>', 'h6', 'h5', 'h4', 'h3');

	// Just a little trim
	$content = str_replace($raw, $cooked, $content);

	// He did it.
	echo $content;
	echo '<p class="right"><a href="' . $edit . '">Source / Edit</a></p>';

} // All done.

?>

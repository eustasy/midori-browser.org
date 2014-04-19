<?php

function dokuImport($DokuImport_URL, $DokuImport_View) {

	// Get it?
	$DokuImport_Content = file_get_contents($DokuImport_URL);

	// What is it went horribly wrong?
	if ($DokuImport_Content === false) { ?>

		<h2><span style="color:#999">Import Error:</span> Unable to fetch page contents.</h2>
		<p class="center">We tried to import a <a href="<?php echo $DokuImport_View; ?>">page</a>, but it didn't work. You can try <a href="<?php echo $DokuImport_View; ?>">loading it directly</a>, or <a href="https://github.com/eustasy/midoribrowser.org/issues?direction=desc&milestone=&page=1&sort=updated&state=open"> report the problem</a>.</p>
		<h3>Sorry about that, here's a picture of a kitten!</h3>
		<div class="clear"><br></div>
		<a title="By Nicolas Suzor from Brisbane, Australia (Kittens!  Uploaded by Kaldari) [CC-BY-SA-2.0 (http://creativecommons.org/licenses/by-sa/2.0)], via Wikimedia Commons" href="http://commons.wikimedia.org/wiki/File%3ACute_grey_kitten.jpg"><img alt="Cute grey kitten" class="rounded" src="http://upload.wikimedia.org/wikipedia/commons/7/75/Cute_grey_kitten.jpg"/></a>
		<div class="clear"><br></div>
		<h4>Which way do you go? That depends a good deal on where you want to get to.</h4>
		<h5>You should probably try clicking one of the links up the top though. Above the kitten.</h5>

	<?php } else {

		// They always take too much off
		$Exploded = explode('<body>', $DokuImport_Content);
		$DokuImport_Content = end($Exploded);

		// What needs to be taken off
		$raw = array('</body>', '</html>', '>Midori - ', 'h5', 'h4', 'h2', 'h1');
		$cooked = array('', '', '>', 'h6', 'h5', 'h4', 'h3');

		// Just a little trim
		$DokuImport_Content = str_replace($raw, $cooked, $DokuImport_Content);

		// He did it.
		echo $DokuImport_Content;
		echo '<p class="right"><a href="'.$DokuImport_View.'">Source / Edit</a></p>';

	} // All done.

}

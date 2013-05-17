<?php

// This is the directory we'll be scanning, 
// and the only thing you might need to edit in this file.
// It should have a trailing slash, but not one at the beginning
// Examples 'downloads/' and 'downloadmidori/
$directory = 'downloadmidori/';
// There should be nothing but midori downloads in this directory,
// and the files should be publicly accessible.
 
// Get ALL THE THINGS!
$file = glob($directory . "*");

// Begin XML and start the downloads element
echo '<?xml version="1.0" ?>
<downloads>
';

// For every file we found, list it as a download
foreach($file as $file) {

	// The location is the filename and directory after the domain.
	$location = 'http://198.199.69.148/' . $file;

	// We need to seperate those filenames apart
	$parts = explode("_", $file);
	// This is why they all need to be named correctly
	// As 			'midori_version_architecture_.extension
	// Example 		'midori_0.5.0-2_x86-64_.pkg.tar.xz'

	// Now we can add a download to the list.	
	echo '	<download>
		<location>' . $location . '</location> 
		<version>' . $parts[1] . '</version> 
		<architecture>' . $parts[2] . '</architecture> 
		<extension>' . $parts[3] . '</extension> 
		<size>' . filesize($file) . '</size> 
	</download>
';

} // Listing finished.

// Close the downloads element
echo '</downloads>';
// All done.

?>

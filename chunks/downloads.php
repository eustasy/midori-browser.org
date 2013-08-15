<?php

include 'host.php';

// This is the directory we'll be scanning,
// and the only thing you might need to edit in this file.
// It should have a trailing slash, but not one at the beginning
// Examples '/downloads/' and '/downloadmidori/
$directory = '/downloads/';
// There should be nothing but midori downloads in this directory,
// and the files should be publicly accessible.
$check = '..' . $directory;
// Get ALL THE THINGS!
$file = glob($check . "*");

// Begin XML and start the downloads element
echo '<?xml version="1.0" ?>
<downloads>
';

// For every file we found, list it as a download
foreach($file as $file) {

	// We need to seperate those filenames apart
	$parts = explode("_", $file);
	// This is why they all need to be named correctly
	// As 			'midori_version_architecture_.extension
	// Example 		'midori_0.5.0-2_x86-64_.pkg.tar.xz'
	$check = substr($parts[0], -6, 6);

	// The location is the filename and directory after the domain.
	$location = $home  . $directory . str_replace('../downloads/', '', $file);

	// Now we can add a download to the list.
	echo '	<download>
		<location>', $location, '</location>
		<check>', $check, '</check>
		<version>', $parts[1], '</version>
		<architecture>', $parts[2], '</architecture>
		<extension>', $parts[3], '</extension>
		<size>', filesize($file), '</size>
		<sum>', sha1_file($file), '</sum>
	</download>
';

} // Listing finished.

// Close the downloads element
echo '</downloads>';
// All done.

?>

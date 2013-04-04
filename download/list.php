<?php // path to directory to scan
$directory = "../downloads/";
 
// get all the things
$location = glob($directory . "*");
 
//print each file name
foreach($location as $location)
{
$file = str_replace('../downloads/', '', basename($location));
echo '<a href="' . $location . '">' . $file . '</a><br>';
} ?>

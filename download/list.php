<?php // path to directory to scan
$directory = "../downloads/";
 
// get all the things
$location = glob($directory . "*");
 
//print each file name
foreach($location as $location)
{
$file = str_replace('../downloads/', '', basename($location));
echo '<a href="' . $location . '">' . $file . '</a><br>';
echo '<br>';
$parts = explode("_", $location);
echo 'Version&emsp;&emsp;&emsp;&emsp;' . $parts[1];
echo '<br>';
echo 'Extension &emsp;&emsp;&emsp;' . $parts[2];
echo '<br>';
echo 'Size&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;' . filesize($location);
echo '<br>';
echo '<br>';
} ?>

<?php

$xmlhost = htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES | ENT_HTML5, "UTF-8");

if ( $xmlhost === '192.168.1.6' ) {
	$xmlurl = 'http://192.168.1.6/midoribrowser.org/chunks/downloads.php';
} else {
	$xmlurl = 'http://' . $xmlhost . '/chunks/downloads.php';
}

$xml = simplexml_load_file($xmlurl);

if ($xml === false) echo '<!-- Failed to load XML --><h2><span style="color:#999">Load Error:</span> Failed to list Downloads.</h2>';

//foreach ($xml->download as $download) {
//  echo $download->extension;
//}

?>

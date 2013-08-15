<?php

$url = $home . '/chunks/downloads.php';

$xml = simplexml_load_file($url);

if ($xml === false) echo '<!-- Failed to load XML --><h2><span style="color:#999">Load Error:</span> Failed to list Downloads.</h2>';

//foreach ($xml->download as $download) {
//  echo $download->extension;
//}

?>

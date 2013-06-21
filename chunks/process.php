<?php

$url = $home . '/chunks/downloads.php';

$xml = simplexml_load_file($url);

// foreach ($xml->download as $element) {
// 	foreach($element as $key => $val) {
// 		echo "{$key}: {$val}";
// 		echo '<br>';
// 	}
// 	echo '<br>';
// }

?>

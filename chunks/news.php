<?php

$url = 'http://www.twotoasts.de/index.php/category/2-midori/feed/';

$xml = simplexml_load_file($url);

echo '<div class="news">';

$i = 0;

if ($xml) {
	if ( $location === '/' ) {
		foreach ($xml->channel->item as $item) {
			if (++$i > 3) break;
			echo '<div class="post">';
			echo '<h4><a href="' . $item->link . '">' . $item->title . '</a></h4>';
			echo '<p>' . $item->description . '</p>';
			echo '</div>';
		}
	} else {
		foreach ($xml->channel->item as $item) {
			if (++$i > 5) break;
			echo '<div class="post">';
			echo '<h4><a href="' . $item->link . '">' . $item->title . '</a></h4>';
			echo '<p>' . $item->description . '</p>';
			echo '</div>';
		}
	}
} else {
	echo '<div class="post">';
	echo '<h4>Sorry, News could not be loaded.</h4>';
	echo '<h5>Please try again later, or perhaps <a href="http://www.twotoasts.de/index.php/category/2-midori/">load it directly</a>.</h5>';
	echo '</div>';
}

echo '</div>';

?>

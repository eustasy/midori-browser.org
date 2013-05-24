<?php

$url = 'http://twotoasts.de/index.php/feed/';

$xml = simplexml_load_file($url);

echo '<div class="news">';

$news = 0;

if ($xml) {
	foreach ($xml->channel->item as $item) {

		echo '<div class="post">';
		echo '<h4><a href="' . $item->link . '">' . $item->title . '</a></h4>';
		echo '<p>' . $item->description . '</p>';
		echo '</div>';

		if ( $location == "/" ) {
			$news = $news+1;
			if ($news == 3) break;
		} else {
			$news = $news+1;
			if ($news == 7) break;
		}

	}
} else {
	echo '<div class="post">';
	echo '<h4>Sorry, News could not be loaded.</h4>';
	echo '<p>Please try again later.</p>';
	echo '</div>';
}

echo '</div>';

?>

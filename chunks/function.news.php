<?php

function news($Count) {

	$News_URL = 'http://www.twotoasts.de/index.php/category/2-midori/feed/';

	$News_XML = simplexml_load_file($News_URL);

	echo '<div class="news">';

	$News_Count = 0;

	if ($News_XML) {
		foreach ($News_XML->channel->item as $News_Item) {
			if (++$News_Count > $Count) break;
			echo '<div class="post">';
			echo '<h4><a href="' . $News_Item->link . '">' . $News_Item->title . '</a></h4>';
			echo '<p>' . $News_Item->description . '</p>';
			echo '</div>';
		}
	} else {
		echo '<div class="post">';
		echo '<h4>Sorry, the News could not be loaded.</h4>';
		echo '<h5>Please try again later, or perhaps <a href="http://www.twotoasts.de/index.php/category/2-midori/">load it directly</a>.</h5>';
		echo '</div>';
	}
	
	// TODO Add More News Link
	
	echo '</div>';

}

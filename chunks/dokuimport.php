<?php

// Get it?
$content = file_get_contents($url);

// What is it went horribly wrong?
if ( $content === False ) { ?>

<h2><span style="color:#999">Import Error:</span> Unable to fetch page contents.</h2>
<p>We tried to import a <a href="<?php echo $url; ?>">file</a> but it didn't work. You can try <a href="<?php echo $url; ?>">loading it directly</a>, or even <a href="<?php echo $edit; ?>">editing</a> it, but you should probably just report a <a href="https://github.com/eustasy/midoribrowser.org/issues?direction=desc&amp;milestone=&amp;page=1&amp;sort=updated&amp;state=open"><img alt="Flag" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAQCAYAAADJViUEAAABn0lEQVQoz7WRv0sCYRjHnzt0kI4iXIxABxMCizhoyLFMmpqcBIcQRNpqcvVvqKEb25wiFyHEgvLAI1/xIFEPnBR6B1/v6Aj88Z73NkUWFUr0wAPPM3y+fJ/nC/CH4qYXRVG2BUE48Xg865qmXQ6HQykcDlu/KuRyuRVVVS8IIcwwDGYYBtN1nVWr1dN0Os39CBYKhQOMsf0OTTchZKKqauKrQCaT4Vut1jqXz+eDoigqLpdL+E6cMQa1Wu2eMXbj8/nsyWSy6Xa7d5vN5h2XzWYXA4HAg9/v35r1UQghTRCEPT4Wi5nj8fhxVpAxZpqmeRQKhZ55AACn01mglH5EwHGvCKFir9drTIO2bY8wxoloNKoAAPAAALquP1FKXxhjUK/XzxuNxmokEomUSqWtdrt9PBqNjEql0sEYHwaDwatPViRJWkAIVYrFIpIkaeGr1WQyycXj8Z8jK5fLZ/1+X5dleW3W+/n3weFw3FJKl71e78bcMCGkblmW0e129+eGO53OM8ZYGwwGO7IsC3PBqVRqYFnWtSiKL7ZtL8F/1xvoReawuKO8IAAAAABJRU5ErkJggg==">&nbsp;&nbsp; Site Problem</a>.</p>
<h3>Sorry about that, here's a picture of a kitten!</h3>
<div class="clear"><br></div>
<a title="By Nicolas Suzor from Brisbane, Australia (Kittens!  Uploaded by Kaldari) [CC-BY-SA-2.0 (http://creativecommons.org/licenses/by-sa/2.0)], via Wikimedia Commons" href="http://commons.wikimedia.org/wiki/File%3ACute_grey_kitten.jpg"><img alt="Cute grey kitten" class="rounded" src="http://upload.wikimedia.org/wikipedia/commons/7/75/Cute_grey_kitten.jpg"/></a>
<div class="clear"><br></div>
<h4>Which way do you go? That depends a good deal on where you want to get to.</h4>
<h5>You should probably try clicking one of the links up the top though. Above the kitten.</h5>

<?php } else {

	// They always take too much off
	$content = end(explode('<body>',$content));

	// What needs to be taken off
	$raw = array('</body>', '</html>', '>Midori - ', 'h5', 'h4', 'h2', 'h1');
	$cooked = array('', '', '>', 'h6', 'h5', 'h4', 'h3');

	// Just a little trim
	$content = str_replace($raw, $cooked, $content);

	// He did it.
	echo $content;
	echo '<p class="right"><a href="' . $edit . '">Source / Edit</a></p>';

} // All done.

?>

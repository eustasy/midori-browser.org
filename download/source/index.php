<?php require '../../chunks/doctype.php'; ?>

<title>Source &nbsp;&middot;&nbsp; Download &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

<?php require '../../chunks/header.php'; ?>

<div class="section group">
	<div class="col span_1_of_5"></div>
	<div class="col span_3_of_5">
		<div class="bubble standard">
<?php

include '../../chunks/process.php';

foreach ($xml->download as $download) {
	if ($download->extension == '.tar.bz2') {
		echo '<h2><a href="' . $download->location . '">Download the Source of Midori</a></h2>';
		$size = $download->size/1048576;
		$package = ltrim($download->extension, '.');
		echo '<h6>' . $package . ' &nbsp;&middot;&nbsp; ' . $download->version . ' &nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB</h6>';
	}
}

?>
		</div>
	</div>
	<div class="col span_1_of_5"></div>
</div>

<?php require '../../chunks/footer.php'; ?>

<?php require '../../chunks/doctype.php'; ?>

<title>Source &nbsp;&middot;&nbsp; Download &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

<?php require '../../chunks/header.php'; ?>

<div class="section group">
        <div class="col span_1_of_6"><br></div>
        <div class="col span_4_of_6">
                <div class="bubble system source">
                        <h2>Download Midori Source</h2>
                </div>
        </div>
        <div class="col span_1_of_6"><br></div>
</div>

<div class="section group">
	<div class="col span_1_of_6"></div>
	<div class="col span_4_of_6">
		<div class="bubble standard">
<?php

include '../../chunks/process.php';

foreach ($xml->download as $download) {
	if ($download->extension == '.tar.bz2') {
		echo '<h3><a href="' . $download->location . '#!sha1!' . $download->sum . '">Download the Source of Midori</a></h3>';
		$size = $download->size/1048576;
		$package = ltrim($download->extension, '.');
		echo '<p class="center">' . $package . ' &nbsp;&middot;&nbsp; ' . $download->version . ' &nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB</p>';
	}
}

?>
		</div>
	</div>
	<div class="col span_1_of_6"></div>
</div>

<?php require '../../chunks/footer.php'; ?>

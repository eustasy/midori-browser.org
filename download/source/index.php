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
		echo '<p class="center">' . $package . ' &nbsp;&middot;&nbsp; <a href="'.$home.'/changelog/" title="Midori Changelog">' . $download->version . '</a> &nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB</p>';
	}
}

?>
		</div>
	</div>
	<div class="col span_1_of_6"></div>
</div>

<div class="section group">
        <div class="col span_1_of_6"><br></div>
        <div class="col span_4_of_6">
                <div class="bubble standard">
                        <h3 class="withimg64"><img src="<?php echo $home; ?>/images/feature-help.png" class="sixtyfour floatleft"> Help</h3>
                        <p>If you need to find out how to do something, you can check our <a href="<?php echo $home; ?>/faqs/">Frequently Asked Questions</a>.</p>
                </div>
        </div>
        <div class="col span_1_of_6"><br></div>
</div>

<?php require '../../chunks/footer.php'; ?>

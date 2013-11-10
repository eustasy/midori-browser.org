<?php require '../../chunks/doctype.php'; ?>

<title>Suse &nbsp;&middot;&nbsp; Download &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

<?php require '../../chunks/header.php'; ?>

<div class="section group">
	<div class="col span_3_of_4">
		<div class="bubble standard">
			<h2>Download Midori for Suse</h2>
			<div class="section group">
<?php

include '../../chunks/process.php';

foreach ($xml->download as $download) {
	if ($download->extension == '.rpm') {
		echo '<div class="col span_1_of_3">';
		echo '<h3><a href="' . $download->location . '#!sha1!' . $download->sum . '">' . $download->architecture . '</a></h3>';
		$size = $download->size/1048576;
		$package = ltrim($download->extension, '.');
		echo '<h6>' . $package . ' &nbsp;&middot;&nbsp; ' . $download->version . ' &nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB</h6>';
		echo '</div>';
	}
}

?>
			</div>
		</div>
	</div>
	<div class="col span_1_of_4">
		<div class="bubble warning">
			<h3>Install Direct</h3>
			<p class="important">You can also install directly from the repositories with this command.</p>
			<p>Note that the Suse repositories may be out of date.</p>
			<input type="text" id="dynamic" value="sudo yum install midori" />
		</div>
	</div>
</div>

<div class="section group">
	<div class="col span_1_of_2">
		<div class="bubble system opensuse">
			<h2>Suse</h2>
		</div>
	</div>
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h3 class="withimg64"><img src="<?php echo $home; ?>/images/feature-help.png" class="sixtyfour floatleft">Help</h3>
			<p>If you need to find out how to do something, you can check our <a href="<?php echo $home; ?>/faqs/">Frequently Asked Questions</a>.</p>
		</div>
	</div>
</div>

<?php require '../../chunks/footer.php'; ?>

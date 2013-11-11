<?php require '../../chunks/doctype.php'; ?>

<title>Arch &nbsp;&middot;&nbsp; Download &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

<?php require '../../chunks/header.php'; ?>

<div class="section group">
	<div class="col span_1_of_6"><br></div>
	<div class="col span_4_of_6">
		<div class="bubble system arch">
			<h2>Download Midori for Arch</h2>
		</div>
	</div>
	<div class="col span_1_of_6"><br></div>
</div>

<div class="section group">
	<div class="col span_1_of_6"><br></div>
	<div class="col span_4_of_6">
		<div class="bubble standard">
			<h3>Install Direct</h3>
			<p class="important">You can also install directly from the Arch repositories with this command.</p>
			<input type="text" id="dynamic" value="sudo pacman -S midori" />
		</div>
	</div>
	<div class="col span_1_of_6"><br></div>
</div>

<div class="section group">
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h3>Alternative Downloads</h3>
<?php

require '../../chunks/process.php';

foreach ($xml->download as $download) {
	if ($download->extension == '.pkg.tar.xz') {
		echo '<h4><a href="' . $download->location . '#!sha1!' . $download->sum . '">' . $download->architecture . '</a></h4>';
		$size = $download->size/1048576;
		$package = ltrim($download->extension, '.');
		echo '<p class="center">' . $download->version . ' &nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB &nbsp;&middot;&nbsp; <a href="' . $download->location . '.sig">sig</a></p>';
	}
}

?>
		</div>
	</div>
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h3 class="withimg64"><img src="<?php echo $home; ?>/images/feature-help.png" class="sixtyfour floatleft"> Help</h3>
			<p>If you need to find out how to do something, you can check our <a href="<?php echo $home; ?>/faqs/">Frequently Asked Questions</a>.</p>
		</div>
	</div>
</div>

<?php require '../../chunks/footer.php'; ?>

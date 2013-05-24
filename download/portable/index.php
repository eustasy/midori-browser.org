<?php require '../../chunks/doctype.php'; ?>

<title>Download Midori Portable for Windows &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

<?php require '../../chunks/header.php'; ?>

<div class="section group">
	<div class="col span_3_of_5">
		<div class="bubble standard">
			<h2>Download Midori Portable<h2>
			<h3>for Windows</h3>
			<div class="section group">
<?php

include '../../chunks/process.php';

foreach ($xml->download as $download) {
	if ($download->extension == '.7z') {
		echo '<div class="col span_1_of_2">';
		$package = ltrim($download->extension, '.');
		echo '<h3><a href="' . $download->location . '">' . $package . '</a></h3>';
		$size = $download->size/1048576;
		echo '<h6>' . $download->version . ' &nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB</h6>';
		echo '</div>';
	} elseif ($download->extension == '.zip') {
		echo '<div class="col span_1_of_2">';
		$package = ltrim($download->extension, '.');
		echo '<h3><a href="' . $download->location . '">' . $package . '</a></h3>';
		$size = $download->size/1048576;
		echo '<h6>' . $download->version . ' &nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB</h6>';
		echo '</div>';
	}
}

?>
			</div>
			<h6><a href="http://www.7-zip.org/">7Zip</a> is a free, open-source archiving utility.</h6>
		</div>
	</div>
	<div class="col span_2_of_5">
		<div class="bubble standard">
			<h3>Usage</h3>
			<p class="important">Midori Portable should work on all Windows systems, you simply need to extract the downloaded archive to a USB drive or folder on your computer, than run midori.exe</p>
			<p>You can move the midori folder, copy it across computers, and run Midori from USB drives without having to install it.</p>
		</div>
	</div>
</div>


<div class="section group">
	<div class="col span_3_of_5">
		<div class="bubble system portable">
			<h2>Portable</h2>
		</div>
	</div>
	<div class="col span_2_of_5">
		<div class="bubble standard">
			<h3 class="withimg64"><img src="http://midoribrowser.org/images/feature-help.png" class="sixtyfour floatleft">Help</h3>
			<p>If you need to find out how to do something, you can check our <a href="http://midoribrowser.org/faqs/">Frequently Asked Questions</a>.</p>
		</div>
	</div>
</div>

<?php require '../../chunks/footer.php'; ?>

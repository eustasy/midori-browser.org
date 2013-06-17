<?php require '../../chunks/doctype.php'; ?>

<title>Ubuntu &nbsp;&middot;&nbsp; Download &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

<?php require '../../chunks/header.php'; ?>

<div class="section group">
	<div class="col span_3_of_5">
		<div class="bubble standard">
			<h2>Install Midori in Ubuntu</h2>
			<div class="section group">
				<p class="important"><img src="<?php echo $home; ?>/images/sites-launchpad.png" class="sixtyfour floatleft"> By adding the repository <a href="https://launchpad.net/~midori/+archive/ppa">ppa:midori/ppa</a>, you will be kept up to date with the latest and greatest versions of Midori.</p>
				<p>Adding the repository is easy, you just</p>
				<p>INSTRUCTIONS AND SCREENSHOTS</p>
			</div>
			<p class="nobottom">You can also do this with the follwing command.</p>
			<input type="text" id="dynamic" value="sudo apt-add-repository ppa:midori/ppa && sudo apt-get update -qq && sudo apt-get install midori" />
		</div>
	</div>
	<div class="col span_2_of_5">
		<div class="bubble standard">
			<h3>Download .Debs</h3>
			<p class="important">If you want, you can just download files to install directly into Ubuntu.</p>
			<p>This is less secure than adding the Repository, as very few new versions are shipped in the official Ubuntu repositories that you already use. Instead, you will have to manually download and install new updates from this site as they become available.</p>
			<div class="section group">

<?php

include '../../chunks/process.php';

foreach ($xml->download as $download) {
	if ($download->extension == '.deb') {
		echo '<div class="col span_1_of_2">';
		echo '<h5><a href="' . $download->location . '">' . $download->architecture . '</a></h5>';
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
</div>

<div class="section group">
	<div class="col span_1_of_2">
		<div class="bubble system ubuntu">
			<h2>Ubuntu</h2>
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

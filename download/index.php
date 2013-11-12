<?php require '../chunks/doctype.php'; ?>

	<title>Download Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

	<?php require '../chunks/header.php'; ?>

<?php

require '../chunks/detect-two.php';

if ($ua) { if ($windows) { // Windows ?>

<!-- Windows -->
<h2>Download for Windows</h2>
<h3 style="color:#999999;">Select your Version</h3>
<div class="section group" id="downloads">
	<div class="col span_1_of_2">
<?php

include '../chunks/process.php';

foreach ($xml->download as $download) {
	if ($download->extension == '.exe') {
		$package = ltrim($download->extension, '.');
		$size = $download->size/1048576;
		echo '
		<a href="' . $download->location . '#!sha1!' . $download->sum . '" title="Download Midori for Windows.">
			<div class="bubble system windows">
				<h3>Windows</h3>';
		echo '
				<h6 class="right">' . $package . ' &nbsp;&middot;&nbsp; ' . $download->version . ' &nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB</h6>';
		echo '
			</div>
		</a>';
	}
}

?>
	</div>
	<div class="col span_1_of_2">
		<a href="<?php echo $home; ?>/download/portable/" title="Download Portable Midori.">
			<div class="bubble system portable">
				<h3>Portable</h3>
<?php

echo '<h6 class="right">';

foreach ($xml->download as $download) {
	if ($download->extension == '.7z') {
		$package = ltrim($download->extension, '.');
		echo $package;
	}
}

echo ' or ';

foreach ($xml->download as $download) {
	if ($download->extension == '.zip') {
		$package = ltrim($download->extension, '.');
		echo $package;
	}
}

echo ' &nbsp;&middot;&nbsp; ';

foreach ($xml->download as $download) {

	if ($download->extension == '.7z') {
		echo $download->version;
	}

}

echo ' &nbsp;&middot;&nbsp; ';

foreach ($xml->download as $download) {
	if ($download->extension == '.7z') {
		$size = $download->size/1048576;
		echo round($size, 1);
	}
}

echo ' or ';

foreach ($xml->download as $download) {
	if ($download->extension == '.zip') {
		$size = $download->size/1048576;
		echo round($size, 1);
	}
}

echo ' MB</h6>';

?>
			</div>
		</a>
	</div>
</div>
<p class="center"><a href="<?php echo $home; ?>/download/choose/" title="Other ways to get Midori / Midori for Other Systems">Other ways to get Midori / Midori for Other Systems</a></p>



<?php } elseif ($linux) { // Linux ?>

<!-- Linux -->
<h2>Download for Linux</h2>
<h3 style="color:#999999;">Select your Distribution</h3>
<div class="section group" id="downloads">
	<div class="col span_1_of_2">
		<a href="<?php echo $home; ?>/download/elementary/" title="Download Midori for elementary os.">
			<div class="bubble system elementary">
				<h3>elementary</h3>
			</div>
		</a>
	</div>
	<div class="col span_1_of_2">
		<a href="<?php echo $home; ?>/download/ubuntu/" title="Download Midori for Ubuntu.">
			<div class="bubble system ubuntu">
				<h3>Ubuntu</h3>
			</div>
		</a>
	</div>
</div>
<div class="section group" id="second">
	<div class="col span_1_of_3">
		<a href="<?php echo $home; ?>/download/fedora/" title="Download Midori for Fedora.">
			<div class="bubble system fedora">
				<h4>Fedora</h4>
			</div>
		</a>
	</div>
	<div class="col span_1_of_3">
		<a href="<?php echo $home; ?>/download/debian/" title="Download Midori for Debian.">
			<div class="bubble system debian">
				<h4>Debian</h4>
			</div>
		</a>
	</div>
	<div class="col span_1_of_3">
		<a href="<?php echo $home; ?>/download/mint/" title="Download Midori for Mint.">
			<div class="bubble system mint">
				<h4>Mint</h4>
			</div>
		</a>
	</div>
</div>
<div class="section group" id="third">
	<div class="col span_1_of_4">
		<a href="<?php echo $home; ?>/download/mageia/" title="Download Midori for Mageia.">
			<div class="bubble system mageia">
				<h4>Mageia</h4>
			</div>
		</a>
	</div>
	<div class="col span_1_of_4">
		<a href="<?php echo $home; ?>/download/arch/" title="Download Midori for Arch.">
			<div class="bubble system arch">
				<h4>Arch</h4>
			</div>
		</a>
	</div>
	<div class="col span_1_of_4">
		<a href="<?php echo $home; ?>/download/opensuse/" title="Download Midori for openSuse.">
			<div class="bubble system opensuse">
				<h4>Suse</h4>
			</div>
		</a>
	</div>
	<div class="col span_1_of_4">
		<a href="<?php echo $home; ?>/download/source/" title="Download the Source of Midori.">
			<div class="bubble system source">
				<h4>Source</h4>
			</div>
		</a>
	</div>
</div>
<p class="center"><a href="<?php echo $home; ?>/download/choose/" title="Other ways to get Midori / Midori for Other Systems">Other ways to get Midori / Midori for Other Systems</a></p>




<?php } elseif ($osx) { // OS X ?>

<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h3>Warning!</h3>
			<p>You appear to be using Mac OS X, and this application is not compatible with that system.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php require '../chunks/fallback.php' ?>



<? } else { ?>

<!-- Unable to Detect Operating System -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h3>Warning!</h3>
			<p>We couldn't detect your Operating System, and as such cannot guarantee this applications compatibility.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php require '../chunks/fallback.php';

} } ?>



<?php require '../chunks/footer.php'; ?>

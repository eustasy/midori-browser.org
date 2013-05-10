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
		<a href="http://midoribrowser.org/downloads/midori_0.4.9_windows.exe" title="Download Midori for Windows.">
			<div class="bubble system windows prefered">
				<h2>Windows</h2>
				<h6 class="right">exe &nbsp;&middot;&nbsp; 0.4.9 &nbsp;&middot;&nbsp; 33M</h6>
			</div>
		</a>
	</div>
	<div class="col span_1_of_2">
		<a href="http://midoribrowser.org/download/portable/" title="Download Portable Midori.">
			<div class="bubble system portable prefered">
				<h2>Portable</h2>
				<h6 class="right">Zip or 7z &nbsp;&middot;&nbsp; 0.4.9 &nbsp;&middot;&nbsp; 52 or 32M</h6>
			</div>
		</a>
	</div>
</div>
<p class="center"><a href="http://midoribrowser.org/download/choose/" title="Other ways to get Midori / Get Midori for Other Systems.">Other ways to get Midori and Midori for Other Systems.</a></p>



<?php } elseif ($linux) { // Linux ?>

<!-- Linux -->
<h2>Download for Linux</h2>
<h3 style="color:#999999;">Select your Distribution</h3>
<div class="section group" id="downloads">
	<div class="col span_1_of_2">
		<a href="http://midoribrowser.org/download/elementary/" title="Download Midori for elementary os.">
			<div class="bubble system elementary prefered">
				<h2>elementary</h2>
			</div>
		</a>
	</div>
	<div class="col span_1_of_2">
		<a href="http://midoribrowser.org/download/ubuntu/" title="Download Midori for Ubuntu.">
			<div class="bubble system ubuntu prefered">
				<h2>Ubuntu</h2>
			</div>
		</a>
	</div>
</div>
<div class="section group" id="second">
	<div class="col span_1_of_3">
		<a href="http://midoribrowser.org/download/fedora/" title="Download Midori for Fedora.">
			<div class="bubble system fedora">
				<h3>Fedora</h3>
			</div>
		</a>
	</div>
	<div class="col span_1_of_3">
		<a href="http://midoribrowser.org/download/debian/" title="Download Midori for Debian.">
			<div class="bubble system debian">
				<h3>Debian</h3>
			</div>
		</a>
	</div>
	<div class="col span_1_of_3">
		<a href="http://midoribrowser.org/download/mint/" title="Download Midori for Mint.">
			<div class="bubble system mint">
				<h3>Mint</h3>
			</div>
		</a>
	</div>
</div>
<div class="section group" id="third">
	<div class="col span_1_of_4">
		<a href="http://midoribrowser.org/download/mageia/" title="Download Midori for Mageia.">
			<div class="bubble system mageia">
				<h3>Mageia</h3>
			</div>
		</a>
	</div>
	<div class="col span_1_of_4">
		<a href="http://midoribrowser.org/download/arch/" title="Download Midori for Arch.">
			<div class="bubble system arch">
				<h3>Arch</h3>
			</div>
		</a>
	</div>
	<div class="col span_1_of_4">
		<a href="http://midoribrowser.org/download/snow/" title="Download Midori for Snow.">
			<div class="bubble system snow">
				<h3>Snow</h3>
			</div>
		</a>
	</div>
	<div class="col span_1_of_4">
		<a href="http://midoribrowser.org/download/opensuse/" title="Download Midori for openSuse.">
			<div class="bubble system opensuse">
				<h3>Suse</h3>
			</div>
		</a>
	</div>
</div>
<p class="center"><a href="http://midoribrowser.org/download/choose/" title="Other ways to get Midori / Get Midori for Other Systems.">Other ways to get Midori and Midori for Other Systems.</a></p>




<?php } elseif ($osx) { // OS X ?>

<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using Mac OS X, and this application is not compatible with that system.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php require 'fallback.php' ?>



<? } else { ?>

<!-- Unable to Detect Operating System -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>We couldn't detect your Operating System, and as such cannot guarantee this applications compatibility.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php require 'fallback.php';

} } ?>



<?php require '../chunks/footer.php'; ?>

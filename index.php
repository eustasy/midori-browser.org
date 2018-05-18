<?php require 'chunks/doctype.php'; ?>

	<title>Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser</title>

<?php include 'chunks/header.php'; ?>

	<section class="first jaded cuttingedge">
		<div class="header">
			<h2>On The Cutting Edge</h2>
			<p>Midori is blazing fast, utilizing the latest web technologies and a small<br>but dexterous array of extensions provide all the essential features.</p>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<img src="<?php echo $home; ?>/images/logos/html5.png" alt="HTML5">
				<h3>HTML 5 + CSS 3</h3>
				<p>Midori handles all the latest web technologies like HTML 5 and CSS3. Listen to music on Rdio, play a game of Angry Birds, and more.</p>
			</div>
			<div class="col span_1_of_3">
				<img src="<?php echo $home; ?>/images/logos/webkit.png" alt="Webkit">
				<h3>Webkit</h3>
				<p>The lightweight webkit rendering engine lends it the same supremacy in speed that has spurred the growth of Google Chrome.</p>
			</div>
			<div class="col span_1_of_3">
				<img src="<?php echo $home; ?>/images/logos/opensource.png" alt="Open Source">
				<h3>Open Source</h3>
				<p>Midori's source code is freely available for anyone to download and modify, leading to active development and a diverse feature set.</p>
			</div>
		</div>
	</section>

	<section>
		<div class="section group">
			<div class="col span_2_of_3">
				<a class="fancybox" rel="gallery" href="<?php echo $home; ?>/images/screenshots/rdio_uncompressed.png"><img src="<?php echo $home; ?>/images/screenshots/rdio.png" alt="Screenshot of Midori playing Queen from Rdio"></a>
			</div>
			<div class="col span_1_of_3">
				<h2>Small But Mighty</h2>
				<p>Midori may only be a little program, but it supports many of the most popular parts of the web, including Google, Facebook, Twitter, YouTube, Spotify and Rdio.</p>
				<p><small>Certain sites, including Spotify, will require <a href="http://get.adobe.com/flashplayer/">Adobe Flash Player</a>.</small></p>
			</div>
		</div>
	</section>

	<section class="jaded">
		<div class="section group">
			<div class="col span_1_of_3">
				<h2>Simply Beautiful</h2>
				<p>Midori is carefully crafted by skilled designers and coders, right down to the last pixel.</p>
			</div>
			<div class="col span_1_of_6"></div>
			<div class="col span_1_of_2">
				<a class="fancybox" rel="gallery" href="<?php echo $home; ?>/images/machines/MacBookPro-Corner_uncompressed.png"><img src="<?php echo $home; ?>/images/machines/MacBookPro-Corner_uncompressed.png" alt="The corner of a machine running Midori."></a>
			</div>
		</div>
	</section>

	<section>
		<div class="section group">
			<div class="col span_2_of_3">
				<a class="fancybox" rel="gallery" href="<?php echo $home; ?>/images/screenshots/privacy_uncompressed.png"><img src="<?php echo $home; ?>/images/screenshots/privacy.png" alt="Privacy Controls in Midori"></a>
			</div>
			<div class="col span_1_of_3">
				<h2>All About Privacy</h2>
				<p>Midori features built-in privacy tools, including script disabling, third-party cookie blocking, stripping referrer details and automatic history clearing after a set amount of time.</p>
				<p>There's also an integrated adblocker and cookie manager installed (but not enabled) under the included extensions.</p>
			</div>
		</div>
	</section>

	<section class="jaded">
		<div class="section group">
			<div class="col span_1_of_3">
				<h2>Available (Almost) Everywhere</h2>
				<p>You can install Midori on Windows, a variety of Linux distributions, or run a portable version for use across several computers.</p>
			</div>
			<div class="col span_2_of_3">
				<a class="fancybox" rel="gallery" href="<?php echo $home; ?>/images/machines/Faimly_uncompressed.png"><img src="<?php echo $home; ?>/images/machines/Faimly.png" alt="Several computers running Midori."></a>
			</div>
		</div>
	</section>

	<section>
		<div class="section group review">
			<div class="col span_1_of_3">
				<h3>&quot; &hellip; clever design &hellip; &quot;</h3>
				<p><a href="http://maketecheasier.com/midori-the-little-browser-that-just-might-surprise-you/2010/10/07">Midori</a>, <a href="http://maketecheasier.com/">Make Tech Easier</a></p>
			</div>
			<div class="col span_1_of_3">
				<h3>&quot; &hellip; fast &hellip; &quot;</h3>
				<p><a href="http://download.cnet.com/Midori/3000-2356_4-75206763.html">Midori</a>, <a href="http://download.cnet.com/">CNET</a></p>
			</div>
			<div class="col span_1_of_3">
				<h3>&quot; &hellip; snappier &hellip; &quot;</h3>
				<p><a href="http://www.techdrivein.com/2011/01/midori-vs-epiphany-review.html">Midori Vs. Epiphany</a>, <a href="http://www.techdrivein.com/">Tech Drive-In</a></p>
			</div>
		</div>
	</section>

	<section class="jaded">
		<div class="section group">
			<div class="col span_1_of_3">
				<h3>&quot; Midori is lightning fast &quot;</h3>
			</div>
			<div class="col span_1_of_3">
				<h3>&quot; Midori’s secret weapon is that it’s based on WebKit. &quot;</h3>
				<p class="center"><a href="http://www.softpedia.com/reviews/linux/Midori-Review-143903.shtml">Midori</a>, <a href="http://www.softpedia.com/get/Internet/Browsers/Midori.shtml">Softpedia</a></p>
			</div>
			<div class="col span_1_of_3">
				<h3>&quot; &hellip; Midori is great &hellip; &quot;</h3>
			</div>
		</div>
	</section>

	<section>
		<div class="section group">
			<div class="col span_1_of_3">
				<h3>News</h3>
				<?php news(3); ?>
			</div>
			<div class="col span_1_of_3">
				<h3>Downloads</h3>

<?php
include '../../chunks/process.php';
for ( $i = 0; $i < 2; $i++ ) {
	$download = $xml->download[i];
	$size = $download->size/1048576;
	$package = ltrim($download->extension, '.');
	echo '<h4><a href="'.$download->location.'#!sha1!'.$download->sum.'">'.$download->architecture.' '. $package.'</a></h4>';
	echo '<p class="center">' . $package . ' &nbsp;&middot;&nbsp; ';
	echo '<a href="'.$home.'/changelog/" title="Midori Changelog">' . $download->version . '</a>';
	echo '&nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB</p>';
}
?>

			</div>
			<div class="col span_1_of_3">
				<div class="donate">
					<?php donate($Geo); ?>
					<p><a href="<?php echo $home; ?>/donate">Donate in another Currency</a></p>
					<script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>
					<div style="font-size:16px;margin:0 auto;width:300px" class="blockchain-btn"
					     data-address="1FM36MzDbhgsAPHs8hBkLKj41qbLNTZWo7"
					     data-shared="false">
						<div class="blockchain stage-begin">
							<img src="https://blockchain.info/Resources/buttons/donate_64.png"/>
						</div>
						<div class="blockchain stage-loading" style="text-align:center">
							<img src="https://blockchain.info/Resources/loading-large.gif"/>
						</div>
						<div class="blockchain stage-ready">
							<p align="center">Please Donate To Bitcoin Address: <b>[[address]]</b></p>
							<p align="center" class="qr-code"></p>
						</div>
						<div class="blockchain stage-paid">
							Donation of <b>[[value]] BTC</b> Received. Thank You.
						</div>
						<div class="blockchain stage-error">
							<font color="red">[[error]]</font>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<div>

<?php include 'chunks/footer.php'; ?>

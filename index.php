<?php require 'chunks/doctype.php'; ?>

	<title>Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

	<?php include 'chunks/header.php'; ?>

</div>

	<section class="nobottom">
		<div class="full">
			<div class="full left"></div>
			<div class="full center"></div>
			<div class="full right"></div>
		</div>
	</section>

	<section class="jaded">
		<div class="section group">
			<div class="col span_1_of_3">
				<h2>Small But Mighty</h2>
				<p>Midori may only be a little program, but it supports many of the most popular parts of the web, including Google, Facebook, Twitter, YouTube, Spotify and Rdio.</p>
				<p><small>Certain sites, including YouTube and Spotify, will require <a href="http://get.adobe.com/flashplayer/">Adobe Flash Player</a>.</small></p>
			</div>
			<div class="col span_2_of_3">
				<a class="fancybox" rel="gallery" href="<?php echo $home; ?>/images/screenshots/rdio_uncompressed.png"><img src="<?php echo $home; ?>/images/screenshots/rdio.png" alt="Screenshot of Midori playing Queen from Rdio"></a>
			</div>
		</div>
	</section>

	<section>
		<div class="section group">
			<div class="col span_1_of_2">
				<a class="fancybox" rel="gallery" href="<?php echo $home; ?>/images/logos/bundle_uncompressed.png"><img src="<?php echo $home; ?>/images/logos/bundle.png" alt="Technologies Logos"></a>
			</div>
			<div class="col span_1_of_6"></div>
			<div class="col span_1_of_3">
				<h2>Cutting Edge</h2>
				<p>Midori is blazing fast, utilising the latest web technologies and a small but dexterous array of extensions provide all the essential features.</p>
				<p>The lightweight webkit rendering engine lend it the same supremacy in speed that has spurred the growth of Google Chrome.</p>
			</div>
		</div>
	</section>

	<section class="jaded">
		<div class="section group">
			<div class="col span_1_of_3">
				<h2>Simply Beautiful</h2>
				<p>Midori is carefully crafter by skilled designers and coders, right down to the last pixel.</p>
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
				<p>Midori features built-in privacy tools, including script disabling, blocking thrid-party cookie blocking, stripping referrer details and automatic history clearing after a set amount of time.</p>
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
				<?php include 'chunks/news.php'; ?>
			</div>
			<div class="col span_1_of_3"></div>
			<div class="col span_1_of_3">
				<div class="donate">
					<?php donate($Geo); ?>
					<p><a href="<?php echo $home; ?>/donate">Donate in another Currency</a></p>
				</div>
			</div>
		</div>
	</section>

<div>

<?php include 'chunks/footer.php'; ?>

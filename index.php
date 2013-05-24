<?php require 'chunks/doctype.php'; ?>

	<title>Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	<link rel="icon" href="http://midoribrowser.org/favicon.ico">
	<link rel="shortcut icon" href="http://midoribrowser.org/favicon.ico">

	<link rel="stylesheet" media="all" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Sans+Mono|Raleway:200,300,400">
	<link rel="stylesheet" media="all" href="http://www.eustasy.org/css/col.min.css">
	<link rel="stylesheet" media="all" href="http://midoribrowser.org/chunks/style.css">

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

	<script src="http://midoribrowser.org/chunks/jquery.bigtext.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/jquery.fancybox.css" media="screen">
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/helpers/jquery.fancybox-media.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			'padding'	: 0,
			width		: 1072,
			height		: 603,
			helpers : {
				media : {}
			}
		});
	});
	</script>

	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-28932148-9']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>

</head>

<body>

<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>
<div class="home" id="wrapper">

<div class="navwrap">
	<nav class="section group nav">
		<a class="col span_1_of_6" href="http://midoribrowser.org/features/" title="Features of Midori">Features</a>
		<a class="col span_1_of_6" href="http://wiki.xfce.org/start?do=search&id=midori" title="Wiki Articles for Midori">Wiki</a>
		<a class="col span_1_of_6" href="http://midoribrowser.org/faqs/" title="Questions Frequently Asked about DeVeDe.">FAQs</a>
		<a class="col span_1_of_6" href="http://midoribrowser.org/news/" title="News about Midori">News</a>
		<a class="col span_1_of_6" href="http://midoribrowser.org/contribute/" title="Contribute to Midori">Contribute</a>
		<a class="col span_1_of_6" href="http://midoribrowser.org/download/" title="Download Midori" class="down">Download</a>
	</nav>
</div>

<div id="headcontainer">
	<header class="clear nobottom">
		<div class="section group">
			<div class="col span_1_of_6">
				<img src="http://midoribrowser.org/images/midori.png" alt="">
			</div>
			<div class="col span_1_of_3">
				<a href="http://midoribrowser.org/download/" title="Midori, a lightweight, fast, and free web browser.">
					<div id="bigtext" class="bigtext">
						<div class="h1 bigtext-line0">Midori</div>
						<div class="tag bigtext-line1">a lightweight, fast, and free web browser</div>
					</div>
				</a>
				<script>$("#bigtext").bigtext();</script>
			</div>
			<div class="col span_1_of_2">
				<h3 class="buttons">
					<a class="features" href="http://midoribrowser.org/features/">Features</a>
					<a class="button" href="http://midoribrowser.org/download/">Download</a>
				</h3>
			</div>
		</div>
		<div class="full">
			<div class="full left"></div>
			<div class="full center"></div>
			<div class="full right"></div>
		</div>
	</header>
</div>

<div id="maincontentcontainer">

	<section>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2>Small But Mighty</h2>
				<p>Midori may only be a little program, but it supports many of the most popular parts of the web, including Google, Facebook, Twitter, YouTube, Spotify and Rdio.</p>
				<p><small>Certain sites, including YouTube and Spotify, will require <a href="http://get.adobe.com/flashplayer/">Adobe Flash Player</a>.</small></p>
			</div>
			<div class="col span_2_of_3">
				<img src="http://midoribrowser.org/images/screenshots/rdio.png" alt="">
			</div>
		</div>
	</section>

	<section class="clear">
		<div class="section group">
			<div class="col span_1_of_2">
				<img src="http://midoribrowser.org/images/logos/bundle.png" alt="">
			</div>
			<div class="col span_1_of_6"></div>
			<div class="col span_1_of_3">
				<h2>Cutting Edge</h2>
				<p>Midori is blazing fast, utilising the latest web technologies and a small but dexterous array of extensions provide all the essential features.</p>
				<p>The lightweight webkit rendering engine lend it the same supremacy in speed that has spurred the growth of Google Chrome.</p>
			</div>

		</div>
	</section>

	<section>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2>Simply Beautiful</h2>
				<p>Midori is carefully crafter by skilled designers and coders, right down to the last pixel.</p>
			</div>
			<div class="col span_1_of_6"></div>
			<div class="col span_1_of_2">
				<img src="http://midoribrowser.org/images/machines/MacBookPro-Corner.png" alt="">
			</div>
		</div>
	</section>

	<section class="clear">
		<div class="section group">
			<div class="col span_1_of_6"></div>
			<div class="col span_1_of_2">
				<img src="http://midoribrowser.org/images/screenshots/privacy-compressed.png" alt="">
			</div>
			<div class="col span_1_of_3">
				<h2>All About Privacy</h2>
				<p>Midori features built-in privacy tools, including script disabling, blocking thrid-party cookie blocking, stripping referrer details and automatic history clearing after a set amount of time.</p>
				<p>There's also an integrated adblocker and cookie manager installed (but not enabled) under the included extensions.</p>
			</div>
		</div>
	</section>

	<section>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2>Available (Almost) Everywhere</h2>
				<p>You can install Midori on Windows, a variety of Linux distributions, or run a portable version for use across several computers.</p>
			</div>
			<div class="col span_2_of_3">
				<img src="http://midoribrowser.org/images/machines/Faimly-Compressed.png" alt="">
			</div>
		</div>
	</section>

	<section class="clear">
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

	<section>
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

	<section class="clear">
		<div class="section group">
			<div class="col span_1_of_3">
				<h3>News</h3>
				<?php include 'chunks/news.php'; ?>
			</div>
			<div class="col span_1_of_3"></div>
			<div class="col span_1_of_3">
				<h3 class="buttons">
					<a class="features" href="http://midoribrowser.org/features/">Features</a>
					<a class="button" href="http://midoribrowser.org/download/">Download</a>
				</h3>
				<div class="donate">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_xclick">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="button_subtype" value="services">
						<input type="hidden" name="no_shipping" value="1">
						<input type="hidden" name="rm" value="1">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="cn" value="Add a note.">
						<input type="hidden" name="business" value="christian@twotoasts.de">
						<input type="hidden" name="item_name" value="Midori Browser Donation">
						<input type="hidden" name="return" value="http://midoribrowser.org/thanks">
						<input type="hidden" name="cancel_return" value="http://midoribrowser.org/ohwell">
						<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHosted">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
						<input class="amount" name="amount" type="text"  maxlength="5" value="5.00">
						<input class="submit" name="submit" type="submit"  value="Donate">
					</form>
					<p><a href="http://midoribrowser.org/donate">Donate in another Currency</a></p>
				</div>
			</div>
		</div>
	</section>

<div>

<?php include 'chunks/footer.php'; ?>

	<?php include 'host.php'; ?>

	<!--[if IE]><meta http-equiv="cleartype" content="on"><![endif]-->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	<link rel="icon" href="<?php echo $home; ?>/favicon.ico">
	<link rel="shortcut icon" href="<?php echo $home; ?>/favicon.ico">

	<link rel="stylesheet" media="all" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Sans+Mono|Raleway:200,300,400">
	<link rel="stylesheet" media="all" href="<?php echo $home; ?>/chunks/style.css">

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

	<script src="<?php echo $home; ?>/chunks/jquery.squishy.min.js"></script>

	<script src="<?php echo $home; ?>/chunks/jquery.equalize.min.js"></script>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/jquery.fancybox.css" media="screen">
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/jquery.fancybox.pack.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/helpers/jquery.fancybox-media.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox({
			'padding'	: 0
		});
		$('.fancybox-media').fancybox({
			'padding'	: 0,
			helpers : {
				media : {}
			}
		});
	});
	</script>

	<script type="text/javascript">
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

<body<?php if ( $location == '/' ) { echo ' class="home"'; } ?>>

<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>



<div id="headcontainer">
	<header class="section group">
		<div class="col span_1_of_6">
			<img src="<?php echo $home; ?>/images/midori.png" alt="Midori Logo">
		</div>
		<div class="col span_1_of_3">
			<a href="<?php echo $home; ?>/" title="Midori, a lightweight, fast, and free web browser."><h1 class="squishy">Midori</h1></a>
			<a href="<?php echo $home; ?>/" title="Midori, a lightweight, fast, and free web browser."><p class="tag squishy">a lightweight, fast, and free web browser</p></a>
			<script>$(".squishy").squishy();</script>
		</div>
		<div class="col span_1_of_6 donate">
			<?php donate(false); ?>
			<p><a href="<?php echo $home; ?>/donate/">Other Currencies</a></p>
		</div>
	</header>
</div>


<div class="navwrap">
	<nav class="section group">
		<a href="<?php echo $home; ?>/about/" title="About Midori" class="col span_1_of_6<?php if ( $location == '/about/' ) { echo ' current'; } ?>">About</a>
		<a href="<?php echo $home; ?>/features/" title="Features of Midori" class="col span_1_of_6<?php if ( $location == '/features/' ) { echo ' current'; } ?>">Features</a>
		<a href="<?php echo $home; ?>/faqs/" title="Questions Frequently Asked about DeVeDe." class="col span_1_of_6<?php if ( $location == '/faqs/' ) { echo ' current'; } ?>">FAQs</a>
		<a href="<?php echo $home; ?>/news/" title="News about Midori"  class="col span_1_of_6<?php if ( $location == '/news/' ) { echo ' current'; } ?>">News</a>
		<a href="<?php echo $home; ?>/contribute/" title="Contribute to Midori"  class="col span_1_of_6<?php if ( $location == '/contribute/' ) { echo ' current'; } ?>">Contribute</a>
		<a href="<?php echo $home; ?>/download/" title="Download Midori"  class="col span_1_of_6<?php if ( $location == '/download/' ) { echo ' current'; } ?> down">Download</a>
	</nav>
</div>


<div id="maincontentcontainer">
	<div id="maincontent">

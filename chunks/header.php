	<?php require 'host.php'; ?>

	<!--[if IE]><meta http-equiv="cleartype" content="on"><![endif]-->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	<link rel="icon" href="<?php echo $home; ?>/favicon.ico">
	<link rel="shortcut icon" href="<?php echo $home; ?>/favicon.ico">

	<link rel="stylesheet" media="all" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600|Raleway:200,300,400">
	<link rel="stylesheet" media="all" href="<?php echo $home; ?>/chunks/style.css">

	<script src="<?php echo $home; ?>/chunks/modernizr.min.js"></script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-45667989-8', 'midori-browser.org');
		ga('send', 'pageview');
	</script>

</head>

<body<?php if ( $location == '/' ) { echo ' class="home"'; } ?>>

<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>

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

<div id="headcontainer">
	<header>
		<h1><a href="<?php echo $home; ?>/" title="Midori, a lightweight, fast, and free web browser."><img src="<?php echo $home; ?>/images/midori-white.png" alt="Midori Logo">Midori</a></h1>
		<a href="<?php echo $home; ?>/" title="Midori, a lightweight, fast, and free web browser."><p class="tag">A lightweight, fast, and free web browser.</p></a>
	</header>
</div>

<?php if ( $location == '/' ) { ?>
<section class="home-full nobottom">
	<div class="full">
		<div class="full left"></div>
		<div class="full center"></div>
		<div class="full right"></div>
	</div>
</section>
<h3 class="home-down"><a href="<?php echo $home; ?>/download/">Download</a></h3>
<?php } ?>


<div id="maincontentcontainer">
	<div id="maincontent">

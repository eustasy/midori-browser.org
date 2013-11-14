	<?php require 'host.php'; ?>

	<!--[if IE]><meta http-equiv="cleartype" content="on"><![endif]-->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	<link rel="icon" href="<?php echo $home; ?>/favicon.ico">
	<link rel="shortcut icon" href="<?php echo $home; ?>/favicon.ico">

	<link rel="stylesheet" media="all" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Sans+Mono|Raleway:200,300,400">
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

<?php
	function nav() {
		echo '
<div class="navwrap">
	<nav class="section group">
		<a href="' . echo $home; .'/about/" title="About Midori" class="col span_1_of_6';
		if ( $location == '/about/' ) { echo ' current'; }
		echo '">About</a>
		<a href="' . echo $home; .'/features/" title="Features of Midori" class="col span_1_of_6';
		if ( $location == '/features/' ) { echo ' current'; }
		echo '">Features</a>
		<a href="' . echo $home; .'/faqs/" title="Questions Frequently Asked about DeVeDe." class="col span_1_of_6';
		if ( $location == '/faqs/' ) { echo ' current'; }
		echo '">FAQs</a>
		<a href="' . echo $home; .'/news/" title="News about Midori"  class="col span_1_of_6';
		if ( $location == '/news/' ) { echo ' current'; }
		echo '">News</a>
		<a href="' . echo $home; .'/contribute/" title="Contribute to Midori"  class="col span_1_of_6';
		if ( $location == '/contribute/' ) { echo ' current'; }
		echo '">Contribute</a>
		<a href="' . echo $home; .'/download/" title="Download Midori"  class="col span_1_of_6';
		if ( $location == '/download/' ) { echo ' current'; }
		echo ' down">Download</a>
	</nav>
</div>';
	}
	function head() {
		echo '
<div id="headcontainer">
	<header class="section group">
		<h1><a href="' . echo $home; . '/" title="Midori, a lightweight, fast, and free web browser."><img src="' . echo $home; . '/images/midori-white.png" alt="Midori Logo">Midori</a></h1>
		<a href="' . echo $home; . '/" title="Midori, a lightweight, fast, and free web browser."><p class="tag">A lightweight, fast, and free web browser.</p></a>
	</header>
</div>';
	}
	if ( $location == '/' ) {
		nav();
		head();
	} else {
		head();
		nav();
	}
?>


<div id="maincontentcontainer">
	<div id="maincontent">

<?php

	require 'host.php';
	require 'visitor.php';
	require 'geo.php';

	require 'function.donate.php';
	require 'function.news.php';
	require 'function.dokuimport.php';

?>
	<!-- Cleartype Setting -->
	<!--[if IE]><meta http-equiv="cleartype" content="on"><![endif]-->

	<!-- Mobile Settings -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Shortcut Icons -->
	<link rel="icon" href="<?php echo $home; ?>/favicon.ico">
	<link rel="shortcut icon" href="<?php echo $home; ?>/favicon.ico">

	<!-- Stylesheets -->
	<link rel="stylesheet" media="all" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600|Raleway:200,400">
	<link rel="stylesheet" media="all" href="<?php echo $home; ?>/chunks/style.css">

	<!-- Canonical -->
	<link rel="canonical" href="<?php echo $home.$location; ?>">
<?php
		// If Home OR News then link the RSS Feed
		if ( $location === '/' || $location === '/news/' ) echo '
	<!-- RSS Feed -->
	<link rel="alternate" type="application/rss+xml" title="News Feed" href="http://www.twotoasts.de/index.php/feed/">
';
?>

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-45667989-8', 'midori-browser.org');
		ga('send', 'pageview');
	</script>

	<!-- jQI -->
	<script type="text/javascript">var jQl={q:[],dq:[],gs:[],ready:function(a){"function"==typeof a&&jQl.q.push(a);return jQl},getScript:function(a,c){jQl.gs.push([a,c])},unq:function(){for(var a=0;a<jQl.q.length;a++)jQl.q[a]();jQl.q=[]},ungs:function(){for(var a=0;a<jQl.gs.length;a++)jQuery.getScript(jQl.gs[a][0],jQl.gs[a][1]);jQl.gs=[]},bId:null,boot:function(a){"undefined"==typeof window.jQuery.fn?jQl.bId||(jQl.bId=setInterval(function(){jQl.boot(a)},25)):(jQl.bId&&clearInterval(jQl.bId),jQl.bId=0,jQl.unqjQdep(),jQl.ungs(),jQuery(jQl.unq()), "function"==typeof a&&a())},booted:function(){return 0===jQl.bId},loadjQ:function(a,c){setTimeout(function(){var b=document.createElement("script");b.src=a;document.getElementsByTagName("head")[0].appendChild(b)},1);jQl.boot(c)},loadjQdep:function(a){jQl.loadxhr(a,jQl.qdep)},qdep:function(a){a&&("undefined"!==typeof window.jQuery.fn&&!jQl.dq.length?jQl.rs(a):jQl.dq.push(a))},unqjQdep:function(){if("undefined"==typeof window.jQuery.fn)setTimeout(jQl.unqjQdep,50);else{for(var a=0;a<jQl.dq.length;a++)jQl.rs(jQl.dq[a]); jQl.dq=[]}},rs:function(a){var c=document.createElement("script");document.getElementsByTagName("head")[0].appendChild(c);c.text=a},loadxhr:function(a,c){var b;b=jQl.getxo();b.onreadystatechange=function(){4!=b.readyState||200!=b.status||c(b.responseText,a)};try{b.open("GET",a,!0),b.send("")}catch(d){}},getxo:function(){var a=!1;try{a=new XMLHttpRequest}catch(c){for(var b=["MSXML2.XMLHTTP.5.0","MSXML2.XMLHTTP.4.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],d=0;d<b.length;++d){try{a= new ActiveXObject(b[d])}catch(e){continue}break}}finally{return a}}};if("undefined"==typeof window.jQuery){var $=jQl.ready,jQuery=$;$.getScript=jQl.getScript};</script>

	<!-- JSDelivr -->
	<!--[if lt IE 9]>
		<script>jQl.loadjQ('//cdn.jsdelivr.net/g/modernizr,selectivizr,prefixfree,jquery@1.11.0,colorbox,jquery.autosize,jquery.equalize,jquery.downboy');</script>
	<![endif]-->
	<!--[if IE 9]><!-->
		<script>jQl.loadjQ('//cdn.jsdelivr.net/g/modernizr,prefixfree,jquery,colorbox,jquery.autosize,jquery.equalize,jquery.downboy');</script>
	<!--<![endif]-->

	<!-- Scripts -->
	<script>
		$(function() {
			// Colorbox
			$('.fancybox, .colobox, .gallery').colorbox({rel:'gallery'});
			$('.fancybox-media, .youtube').colorbox({ iframe: true, width: 1280, height: 720 });
			// Code select-all functions
			$('input.code').one('click', function() { $(this).select(); });
			$('input.code').dblclick(function() { $(this).select(); });
			$('textarea.code').one('click', function() { $(this).select(); });
			$('textarea.code').dblclick(function() { $(this).select(); });
			// Autosize Textarea
			$('textarea.resize').autosize();
			// Equalize Columns
			equalize();
			downBoy();
			window.onresize = function() {
				equalize();
				downBoy();
			}
		});
	</script>

</head>

<body<?php if ( $location === '/' ) echo ' class="home"'; ?>>

<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>

<div class="navwrap">
	<nav class="section group">
		<a href="<?php echo $home; ?>/about/" title="About Midori" class="col span_1_of_6<?php if ( $location == '/about/' ) { echo ' current'; } ?>">About</a>
		<a href="<?php echo $home; ?>/features/" title="Features of Midori" class="col span_1_of_6<?php if ( $location == '/features/' ) { echo ' current'; } ?>">Features</a>
		<a href="<?php echo $home; ?>/faqs/" title="Questions Frequently Asked about Midori." class="col span_1_of_6<?php if ( $location == '/faqs/' ) { echo ' current'; } ?>">FAQs</a>
		<a href="<?php echo $home; ?>/news/" title="News about Midori"  class="col span_1_of_6<?php if ( $location == '/news/' ) { echo ' current'; } ?>">News</a>
		<a href="<?php echo $home; ?>/contribute/" title="Contribute to Midori"  class="col span_1_of_6<?php if ( $location == '/contribute/' ) { echo ' current'; } ?>">Contribute</a>
		<a href="<?php echo $home; ?>/download/" title="Download Midori"  class="col span_1_of_6<?php if ( $location == '/download/' ) { echo ' current'; } ?> down">Download</a>
	</nav>
</div>

<div id="headcontainer">
	<header>
		<h1><a href="<?php echo $home; ?>/" title="Midori, a lightweight, fast, and free web browser."><img src="<?php echo $home; ?>/images/midori-white.png" alt="Midori Logo">Midori</a></h1>
		<a href="<?php echo $home; ?>/" title="Midori, a lightweight, fast, and free web browser."><p class="tag">a lightweight, fast, and free web browser</p></a>
	</header>
</div>

<?php if ( $location == '/' ) { ?>
<section class="home-full nobottom">
	<div class="full">
		<div class="full left"></div>
		<div class="full center"></div>
		<div class="full right"></div>
	</div>
	<h3 class="home-down"><a href="<?php echo $home; ?>/download/"><img src="<?php echo $home; ?>/images/three/downloadicon.svg">Download</a></h3>
</section>

<div id="maincontentcontainer">
	<div id="maincontent"></div>
<?php } else { ?>
<div id="maincontentcontainer">
	<div id="maincontent">
<?php } ?>

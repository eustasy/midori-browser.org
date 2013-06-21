<?php

// This is the GitPull file. The correct URL to active it is:
// http://midoribrowser.org/gitpull.php?auth=glaflzbhlaczddmuxurmlujmdqtgvoqzzbpljshtfrohsqzfbtmazkgnkmudqaiq

$auth = htmlentities($_GET['auth'], ENT_QUOTES, "UTF-8"); // Encode auth before using it.

// We can also check for payload to help stop attacks.
// isset($_POST['payload'])

if ( $auth === 'glaflzbhlaczddmuxurmlujmdqtgvoqzzbpljshtfrohsqzfbtmazkgnkmudqaiq' ) { // If the auth is correct and Git posted a payload.

	// We're going to run a few commands now.
	// git reset --hard HEAD	// Cleans out uncommitted changes.
	// git clean -f -d			// Remove junk files. DO NOT EXECUTE. DELETES DOWNLOADS.
	// git pull					// Get the latest version.

	// git reset --hard HEAD && git pull

	$output = nl2br( shell_exec('git reset --hard HEAD && git pull') ); // Capture the output.

} else { // Or not.
	$output = 'No.'; // Sassy.
}

// That is all.

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="icon" type="image/x-icon" href="http://www.eustasy.co.uk/favicon.ico">
<link rel="shortcut icon" type="image/x-icon" href="http://www.eustasy.co.uk/favicon.ico">
<link rel="apple shortcut icon" href="http://www.eustasy.co.uk/wp-content/themes/eustasy-three/200.png">
<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400' rel='stylesheet' type='text/css'>
<!--[if IE ]><style type="text/css">body { text-align: left !important; }</style><![endif]-->
<!--[if IE 8]><style type="text/css">body { font-style: normal !important; }</style><![endif]-->
<style type="text/css">
body{background:#fafafa;margin:0px;padding:0px;text-align:center;top:0px;color:#333333;font:400 1em/1.4 'Raleway',Sans;min-width:750px;}
#small-container{margin:5% auto 3%;padding:30px 0;width:100%;background:#ffffff;}
h1{font:200 112px/1 'Raleway',Sans;padding:65px 	0px 0px 0px;text-align:center;display:block;margin:0px;opacity:0.7;
transition:all 500ms ease-in-out;-o-transition:all 500ms ease-in-out;-ms-transition:all 500ms ease-in-out;-moz-transition:all 500ms ease-in-out;-webkit-transition:all 500ms ease-in-out;}
h1:hover{opacity:1;
transition:all 500ms ease-in-out;-o-transition:all 500ms ease-in-out;-ms-transition:all 500ms ease-in-out;-moz-transition:all 500ms ease-in-out;-webkit-transition:all 500ms ease-in-out;}
h1 img{vertical-align:middle;height:100px;width:100px;}
h1 a,h1 a:hover,h1 a:active{color:#333333;}
a{color:#006AC0;text-decoration:none;
transition:alll 500ms ease-in-out;-o-transition:alll 500ms ease-in-out;-ms-transition:alll 500ms ease-in-out;-moz-transition:alll 500ms ease-in-out;-webkit-transition:alll 500ms ease-in-out;}
a:hover{color:#19B6EE;
transition:alll 500ms ease-in-out;-o-transition:alll 500ms ease-in-out;-ms-transition:alll 500ms ease-in-out;-moz-transition:alll 500ms ease-in-out;-webkit-transition:alll 500ms ease-in-out;}
</style>
</head>
<body>
<h1><a href="http://www.eustasy.co.uk/definition/"><img src="http://www.eustasy.co.uk/wp-content/themes/eustasy-three/200.png" alt="eustasy logo"> eustasy</a></h1>
<div id="small-container">
<pre><?php echo $output; // Kind of. ?></pre>
</div>
</body>
</html>

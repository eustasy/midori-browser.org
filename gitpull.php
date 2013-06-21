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
<title>GitPull</title>
<link rel="icon" type="image/x-icon" href="http://www.eustasy.co.uk/favicon.ico">
<link rel="shortcut icon" type="image/x-icon" href="http://www.eustasy.co.uk/favicon.ico">
<link rel="apple shortcut icon" href="http://www.eustasy.co.uk/wp-content/themes/eustasy-three/200.png">
<link href='http://fonts.googleapis.com/css?family=Raleway:400' rel='stylesheet' type='text/css'>
<!--[if IE ]><style type="text/css">body { text-align: left !important; }</style><![endif]-->
<!--[if IE 8]><style type="text/css">body { font-style: normal !important; }</style><![endif]-->
<style type="text/css">
body{background:#fafafa;margin:0;padding:0;text-align:center;color:#333333;font:400 1em/1.4 'Raleway',Sans;min-width:750px;}
#small-container{margin:15% auto 12%;padding:5% 0 4%;width:100%;background:#ffffff;}
</style>
</head>
<body>
<div id="small-container">
<pre><?php echo $output; // Kind of. ?></pre>
</div>
</body>
</html>

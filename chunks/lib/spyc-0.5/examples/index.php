<?php require 'chunks/doctype.php'; ?>

	<title>Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

	<?php require 'chunks/header.php'; ?>

<?php

require("chunks/detect.php");

$ua = UA::parse();

?>
<!-- UA Parsed -->

<?php if (
$ua->os == "Windows ME"  || // Windows ME
$ua->os == "Win16" || // Windows 3.11
$ua->os == "Windows NT 4.0" || // Windows NT 4.0
$ua->os == "WinNT4.0" || 
$ua->os == "WinNT" || 
$ua->os == "Windows NT" || 
$ua->os == "Windows_95" || // Windows 95
$ua->os == "Windows 95" || 
$ua->os == "Win95" ||
$ua->os == "Windows 98" || // Windows 98
$ua->os == "Win98" ||
$ua->os == "Windows NT 5.0" || // Windows 2000
$ua->os == "Windows 2000" ||
$ua->os == "Windows NT 5.1" || // Windows XP
$ua->os == "Windows XP" || 
$ua->os == "Windows NT 5.2" || // Windows Server 2003
$ua->os == "Windows NT 6.0" || // Windows Vista
$ua->os == "Windows Vista" ||
$ua->os == "Windows NT 6.1" || // Windows 7
$ua->os == "Windows 7" || 
$ua->os == "Windows NT 6.2" || // Windows 8
$ua->os == "Windows 8"
) { ?>
<!-- Windows -->
<div class="section group" id="downloads">
	<a href="http://www.devede.org/download/windows/" title="Download for Windows 7 and 8">
		<div class="col span_3_of_5">
			<div class="bubble windows prefered">
				<h2>Download for<br>Windows 7 &amp; 8</h2>
			</div>
		</div>
	</a>
	<a href="http://www.devede.org/download/previous-windows/" title="Download DeVeDe for Windows Vista and XP.">
		<div class="col span_2_of_5">
			<div class="bubble previous-windows">
				<h3>Download for Windows XP and Vista</h3>
			</div>
		</div>
	</a>
	<p class="center"><a href="http://www.devede.org/download/choose/" title="Other ways to get DeVeDe / Get DeVeDe for Other Systems.">Other ways to get DeVeDe and  DeVeDe for Other Systems.</a></p>
</div>

<?php } elseif ($ua->os == "Linux" || $ua->os == "Ubuntu" || $ua->os == "Linux Mint") { ?>
<!-- Linux -->
<div class="section group" id="downloads">
	<a href="http://www.devede.org/download/ubuntu/" title="Download DeVeDe for Ubuntu.">
		<div class="col span_3_of_5">
			<div class="bubble ubuntu prefered">
				<h2>Download for Ubuntu</h2>
				<p>Download the .deb Debian Package for Ubuntu and other Debian based linux distributions.</p>
			</div>
		</div>
	</a>
	<a href="http://www.devede.org/download/source/" title="Download the Source of DeVeDe.">
		<div class="col span_2_of_5">
			<div class="bubble source">
				<h3>Download the Source</h3>
				<p>Download the Source of DeVeDe in a .tar.bz2 archive.</p>
			</div>
		</div>
	</a>
	<p class="center"><a href="http://www.devede.org/download/choose/" title="Other ways to get DeVeDe / Get DeVeDe for Other Systems.">Other ways to get DeVeDe and  DeVeDe for Other Systems.</a></p>
</div>

<?php } elseif ($ua->os == "Mac OS X") { ?>
<!-- OS X -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using OS X, and this application is not compatible with that system. Continue at your peril.</p>
		</div>
	</div>
</div>
<?php require 'chunks/warning.php';

} elseif ($ua->os == "iOS") { ?>
<!-- iOS -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using iOS, and this application is not compatible with that system. Continue at your peril.</p>
		</div>
	</div>
</div>
<?php require 'chunks/warning.php';

} elseif ($ua->os == "Android") { ?>
<!-- Android -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using Android, and this application is not compatible with that system. Continue at your peril.</p>
		</div>
	</div>
</div>
<?php require 'chunks/warning.php';

} elseif ($ua->os == "SymbianOS") { ?>
<!-- SymbianOS -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using SymbianOS, and this application is not compatible with that system. Continue at your peril.</p>
		</div>
	</div>
</div>
<?php require 'chunks/warning.php';

} elseif ($ua->os == "BlackBerry") { ?>
<!-- BlackBerry -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using BlackBerry, and this application is not compatible with that system. Continue at your peril.</p>
		</div>
	</div>
</div>
<?php require 'chunks/warning.php';

} elseif ($ua->os == "Chrome OS") { ?>
<!-- Chrome OS -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using Chrome OS, and this application is not compatible with that system. Continue at your peril.</p>
		</div>
	</div>
</div>
<?php require 'chunks/warning.php';

} else { echo '<!-- Browser: ' . $ua->browser . ' Major: ' . $ua->major . ' OS: ' . $ua->os . ' -->'; ?>
<!-- Unable to Detect Operating System -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>We couldn't detect your Operating System, and as such cannot guarantee this applications compatibility. Continue at your peril.</p>
		</div>
	</div>
</div>
<?php require 'chunks/warning.php';

} ?>



<div class="section group">
	<div class="col span_4_of_6">
		<p><a href="http://www.devede.org/about/" title="About DeVeDe">DeVeDe</a> is a free, open-source Video to DVD converter. It will transform various <a href="http://www.devede.org/faq/#formats" title="Video Formats DeVeDe supports.">formats</a> of video to a DVD Player playable video <a href="http://www.devede.org/faq/#discs" title="Different types of writable discs.">DVD</a>, VideoCD, Super VideoCD, China VideoDisc, or DivX/MPEG-4 compliant image which it will then offer to start burning it. You can download DeVeDe for free and start converting AVI, MP4 and MPG to DVD now, no watermarks, no premium version</p>
	</div>
	<div class="col span_1_of_6">
		<ul>
		<li>AVI to DVD</li>
		<li>MP4 to DVD</li>
		<li>MPG to DVD</li>
		</ul>
	</div>
	<div class="col span_1_of_6">
		<ul>
		<li>DVD to AVI</li>
		<li>DVD to MP4</li>
		<li>DVD to MPG</li>
		</ul>
	</div>
</div>







<?php require 'chunks/footer.php'; ?>

<?php require '../../chunks/doctype.php'; ?>

<title>Download Midori Portable for Windows &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

<?php require '../../chunks/header.php'; ?>

<div class="section group">
        <div class="col span_1_of_6"><br></div>
        <div class="col span_4_of_6">
                <div class="bubble system portable">
                        <h2>Download Midori Portable</h2>
                        <h3>for Windows</h3>
                </div>
        </div>
        <div class="col span_1_of_6"><br></div>
</div>

<div class="section group">
        <div class="col span_1_of_6"><br></div>
        <div class="col span_4_of_6">
                <div class="bubble standard">
                	<div class="section group">
<?php

include '../../chunks/process.php';

foreach ($xml->download as $download) {
	if ($download->check == 'midori') {
		if ($download->extension == '.7z' || $download->extension == '.zip') {
			$package = ltrim($download->extension, '.');
			$size = $download->size/1048576;
			echo '
				<div class="col span_1_of_2">
					<h3><a href="' . $download->location . '#!sha1!' . $download->sum . '">' . $package . '</a></h3>
					<p class="center"><a href="'.$home.'/changelog/" title="Midori Changelog">' . $download->version . '</a> &nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB</p>
				</div>';
		}
	}
}

?>
			</div>
			<p class="center"><a href="http://www.7-zip.org/">7Zip</a> is a free, open-source archiving utility.</p>
                </div>
        </div>
        <div class="col span_1_of_6"><br></div>
</div>

<div class="section group">
        <div class="col span_1_of_6"><br></div>
        <div class="col span_4_of_6">
                <div class="bubble standard">
                        <p class="important">Midori Portable should work on all Windows systems, you simply need to extract the downloaded archive to a USB drive or folder on your computer, than run midori.exe</p>
                        <p>You can move the midori folder, copy it across computers, and run Midori from USB drives without having to install it.</p>
                </div>
        </div>
        <div class="col span_1_of_6"><br></div>
</div>

<div class="section group">
        <div class="col span_1_of_6"><br></div>
        <div class="col span_4_of_6">
                <div class="bubble standard">
                        <h3 class="withimg64"><img src="<?php echo $home; ?>/images/feature-help.png" class="sixtyfour floatleft"> Help</h3>
                        <p>If you need to find out how to do something, you can check our <a href="<?php echo $home; ?>/faqs/">Frequently Asked Questions</a>.</p>
                </div>
        </div>
        <div class="col span_1_of_6"><br></div>
</div>

<?php require '../../chunks/footer.php'; ?>

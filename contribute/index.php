<?php require '../chunks/doctype.php'; ?>

<title>Contribute &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

<?php require '../chunks/header.php'; ?>

<h2>Contribute</h2>

<div class="section group">
	<div class="col span_1_of_3">
		<a href="https://bugs.launchpad.net/midori">
			<div class="bubble">
				<h4 class="withimg64"><img src="<?php echo $home; ?>/images/bug-reporting.png" class="sixtyfour floatleft">Bugs</h4>
				<p>Have a problem or a suggestion? Report a bug on launchpad and watch it be vigilantly attacked and beaten into submission. Or developed and drafted into the next release.</p>
			</div>
		</a>
	</div>
	<div class="col span_1_of_3">
		<a href="https://launchpad.net/midori">
			<div class="bubble">
				<h4 class="withimg64"><img src="<?php echo $home; ?>/images/sites-launchpad.png" class="sixtyfour floatleft">Launchpad</h4>
				<p>Launchpad hosts a repository of Midori suitable for installation on Ubuntu based distributions. You can browse the code, see blueprints, and get in touch with the developers.</p>
			</div>
		</a>
	</div>
	<div class="col span_1_of_3">
		<a href="https://translations.launchpad.net/midori">
			<div class="bubble">
				<h4 class="withimg64"><img src="<?php echo $home; ?>/images/feature-dictionary.png" class="sixtyfour floatleft">Translation</h4>
				<p>Can you assist in completeing the translation of Midori into your language? Here you can download, modify, and contribute to the many languages available.</p>
			</div>
		</a>
	</div>
</div>

<?php

// Import this page
dokuImport('http://wiki.xfce.org/_export/xhtml/midori/contribute', 'http://wiki.xfce.org/midori/contribute');

require '../chunks/footer.php';

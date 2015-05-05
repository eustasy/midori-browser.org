<?php require '../chunks/doctype.php'; ?>

	<title>FAQs &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

<?php require '../chunks/header.php';

// Enable Debuggin
error_reporting(~0);
ini_set('display_errors', 1);
// Import this page
dokuImport('http://wiki.xfce.org/_export/xhtml/midori/faq', 'https://wiki.xfce.org/midori/faq');

require '../chunks/footer.php';

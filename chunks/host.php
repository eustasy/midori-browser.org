<?php

$host = htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES | ENT_HTML5, "UTF-8");

if ( $host === '192.168.1.6' ) {
	$home = 'http://192.168.1.6/midoribrowser.org';
	$location = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES | ENT_HTML5, "UTF-8");
	$location = str_replace('/midoribrowser.org', '', $location);
} else {
	$home = 'http://' . $host;
	$location = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES | ENT_HTML5, "UTF-8");
}


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$VisitorIP = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$VisitorIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$VisitorIP = $_SERVER['REMOTE_ADDR'];
} $Geo = geoip_country_code_by_name($VisitorIP);

function donate($Country = $Geo) {
	if ($Country  == 'EU' || $Country  == 'AD' || $Country  == 'AT' || $Country  == 'BE' || $Country  == 'CY' || $Country  == 'EE' || $Country  == 'FI' || $Country  == 'FR' || $Country  == 'DE' || $Country  == 'GR' || $Country  == 'IE' || $Country  == 'IT' || $Country  == 'XK' || $Country  == 'LU' || $Country  == 'MT' || $Country  == 'MC' || $Country  == 'ME' || $Country  == 'NL' || $Country  == 'PT' || $Country  == 'SM' || $Country  == 'SK' || $Country  == 'SI' || $Country  == 'ES' || $Country  == 'VA') { // EUR
		echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="eur">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="currency_code" value="EUR">';
	} elseif ($Country  == 'GG' || $Country  == 'IM' || $Country  == 'JE' || $Country  == 'GS' || $Country  == 'GB') { // GBP
		echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="gbp">
		<input type="hidden" name="lc" value="GB">
		<input type="hidden" name="currency_code" value="GBP">';
	} elseif ($Country  == 'AU' || $Country  == 'CC' || $Country  == 'KI' || $Country  == 'NR' || $Country  == 'TV') { // AUD
		echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="aud">
		<input type="hidden" name="lc" value="AU">
		<input type="hidden" name="currency_code" value="AUD">';
	} elseif ($Country  == 'CA') { // CAD
		echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="cad">
		<input type="hidden" name="lc" value="CA">
		<input type="hidden" name="currency_code" value="CAD">';
	} elseif ($Country  == 'SE') { // SEK
		echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="sek">
		<input type="hidden" name="lc" value="SE">
		<input type="hidden" name="currency_code" value="SEK">';
	} else { // USD
		echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="usd">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="currency_code" value="USD">';
	}

	echo '
		<input type="hidden" name="cmd" value="_xclick">
		<input type="hidden" name="button_subtype" value="services">
		<input type="hidden" name="no_shipping" value="1">
		<input type="hidden" name="rm" value="1">

		<input type="hidden" name="no_note" value="0">
		<input type="hidden" name="cn" value="Add a note.">

		<input type="hidden" name="business" value="christian@twotoasts.de">
		<input type="hidden" name="item_name" value="Midori Browser Donation">
		<input type="hidden" name="return" value="<?php echo $home; ?>/thanks">
		<input type="hidden" name="cancel_return" value="<?php echo $home; ?>/ohwell">

		<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHosted">
		<img alt="PayPal Payment Tracking" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" style="width:1px;height:1;border:none;">

		<label for="amount">Donation Amount</label>
		<input class="amount" name="amount" type="text" id="amount" maxlength="5" value="5.00">

		<input class="submit" name="submit" type="submit" value="Donate">

		</form>';
}

?>
window.onload = function(){

var country = geoip_country_code();

if (country === "EU" || country === "AD" || country === "AT" || country === "BE" || country === "CY" || country === "EE" || country === "FI" || country === "FR" || country === "DE" || country === "GR" || country === "IE" || country === "IT" || country === "XK" || country === "LU" || country === "MT" || country === "MC" || country === "ME" || country === "NL" || country === "PT" || country === "SM" || country === "SK" || country === "SI" || country === "ES" || country === "VA") { // EUR
    $('.donationlocation').html('<input type=\"hidden\"name=\"lc\"value=\"US\"><input type=\"hidden\"name=\"currency_code\"value=\"EUR\">');
	$(".donate form").addClass("eur");
} else if (country === "GG" || country === "IM" || country === "JE" || country === "GS" || country === "GB") { // GBP
    $('.donationlocation').html('<input type=\"hidden\"name=\"lc\"value=\"GB\"><input type=\"hidden\"name=\"currency_code\"value=\"GBP\">');
	$(".donate form").addClass("gbp");
} else if (country === "AU" || country === "CC" || country === "KI" || country === "NR" || country === "TV") { // AUD
    $('.donationlocation').html('<input type=\"hidden\"name=\"lc\"value=\"AU\"><input type=\"hidden\"name=\"currency_code\"value=\"AUD\">');
	$(".donate form").addClass("aud");
} else if (country === "CA") { // CAD
    $('.donationlocation').html('<input type=\"hidden\"name=\"lc\"value=\"CA\"><input type=\"hidden\"name=\"currency_code\"value=\"CAD\">');
	$(".donate form").addClass("cad");
} else if (country === "SE") { // CAD
    $('.donationlocation').html('<input type=\"hidden\"name=\"lc\"value=\"SE\"><input type=\"hidden\"name=\"currency_code\"value=\"SEK\">');
	$(".donate form").addClass("sek");
} else { // USD
    $('.donationlocation').html('<input type=\"hidden\"name=\"lc\"value=\"US\"><input type=\"hidden\"name=\"currency_code\"value=\"USD\">');
	$(".donate form").addClass("usd");
}


}

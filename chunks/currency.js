var country = geoip_country_code();

if (country === "EU" || country === "AD" || country === "AT" || country === "BE" || country === "CY" || country === "EE" || country === "FI" || country === "FR" || country === "DE" || country === "GR" || country === "IE" || country === "IT" || country === "XK" || country === "LU" || country === "MT" || country === "MC" || country === "ME" || country === "NL" || country === "PT" || country === "SM" || country === "SK" || country === "SI" || country === "ES" || country === "VA") {
    document.getElementById("donationlocation").innerHTML = "<input type=\"hidden\"name=\"lc\"value=\"US\"><input type=\"hidden\"name=\"currency_code\"value=\"EUR\">"; // EUR
} else if (country === "GG" || country === "IM" || country === "JE" || country === "GS" || country === "GB") {
    document.getElementById("donationlocation").innerHTML = "<input type=\"hidden\"name=\"lc\"value=\"GB\"><input type=\"hidden\"name=\"currency_code\"value=\"GBP\">"; // GBP
} else if (country === "AU" || country === "CC" || country === "KI" || country === "NR" || country === "TV") {
    document.getElementById("donationlocation").innerHTML = "<input type=\"hidden\"name=\"lc\"value=\"AU\"><input type=\"hidden\"name=\"currency_code\"value=\"AUD\">"; // AUD
} else if (country === "CA") {
    document.getElementById("donationlocation").innerHTML = "<input type=\"hidden\"name=\"lc\"value=\"CA\"><input type=\"hidden\"name=\"currency_code\"value=\"CAD\">"; // CAD
} else if (country === "SE") {
    document.getElementById("donationlocation").innerHTML = "<input type=\"hidden\"name=\"lc\"value=\"SE\"><input type=\"hidden\"name=\"currency_code\"value=\"SEK\">"; // CAD
} else {
    document.getElementById("donationlocation").innerHTML = "<input type=\"hidden\"name=\"lc\"value=\"US\"><input type=\"hidden\"name=\"currency_code\"value=\"USD\">"; // USD
}
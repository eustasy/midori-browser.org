<?php

if ($VisitorIP == '127.0.0.1') $Geo = 'Local';
else $Geo = geoip_country_code_by_name($VisitorIP);
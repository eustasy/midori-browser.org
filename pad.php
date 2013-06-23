<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<XML_DIZ_INFO>

	<MASTER_PAD_VERSION_INFO>
		<MASTER_PAD_VERSION>4.0</MASTER_PAD_VERSION>
		<MASTER_PAD_EDITOR>Custom</MASTER_PAD_EDITOR>
		<MASTER_PAD_INFO>Portable Application Description, or PAD(TM) 2004 Association of Software Professionals (ASP)http://www.asp-shareware.org/pad is a data set standard and specification that is commercial software publishers to disseminate certified information about their software application. The PAD format is copyright of the ASP and cannot be used without the formal licensing and permission of both the Association of Software Professionals and its agent AppVisor.com.</MASTER_PAD_INFO>
	</MASTER_PAD_VERSION_INFO>

	<Company_Info>
		<Company_Name>Twotoasts</Company_Name>
		<Address_1>36 Pariser Straße</Address_1>
		<Address_2></Address_2>
		<City_Town>Falls Church</City_Town>
		<State_Province>Bonn</State_Province>
		<Zip_Postal_Code>53117</Zip_Postal_Code>
		<Country>Germany</Country>
		<Company_WebSite_URL>http://twotoasts.de</Company_WebSite_URL>
		<Contact_Info>
			<Contact_First_Name>Christian</Contact_First_Name>
			<Contact_Last_Name>Dywan</Contact_Last_Name>
			<Contact_Email>twotoasts@punkt.de</Contact_Email>
			<Contact_Phone>+492282407061</Contact_Phone>
			<Author_First_Name>Christian</Author_First_Name>
			<Author_Last_Name>Dywan</Author_Last_Name>
			<Author_Email>twotoasts@punkt.de</Author_Email>
		</Contact_Info>
		<Support_Info>
			<Sales_Email>twotoasts@punkt.de</Sales_Email>
			<Support_Email>twotoasts@punkt.de</Support_Email>
			<General_Email>twotoasts@punkt.de</General_Email>
			<Sales_Phone>+492282407061</Sales_Phone>
			<Support_Phone>+492282407061</Support_Phone>
			<General_Phone>+492282407061</General_Phone>
			<Fax_Phone></Fax_Phone>
		</Support_Info>
		<GooglePlusPage></GooglePlusPage>
		<LinkedinPage></LinkedinPage>
		<TwitterCompanyPage></TwitterCompanyPage>
		<FacebookCompanyPage></FacebookCompanyPage>
		<CompanyStorePage>http://twotoasts.de</CompanyStorePage>
	</Company_Info>

	<Program_Info>
		<Program_Name>Midori</Program_Name>
<?

include 'chunks/process.php';

foreach ($xml->download as $download) {
	if ($download->extension == '.exe') {


		echo '		<Program_Version>' . $download->version . '</Program_Version>
';

		echo $download->location;

		// Get the thing
		$curl = curl_init($download->location);

		// Don't fetch the actual page, you only want headers
		curl_setopt($curl, CURLOPT_NOBODY, true);

		// Stop it from outputting stuff to stdout
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		// Attempt to retrieve the modification date
		curl_setopt($curl, CURLOPT_FILETIME, true);

		$result = curl_exec($curl);

		if ($result === false) {
			die (curl_error($curl));
		}

		$timestamp = curl_getinfo($curl, CURLINFO_FILETIME);
		if ($timestamp != -1) {
			echo '		<Program_Release_Month>' . date("m", $timestamp) . '</Program_Release_Month>
	';
			echo '		<Program_Release_Day>' . date("d", $timestamp) . '</Program_Release_Day>
	';
			echo '		<Program_Release_Year>' . date("Y", $timestamp) . '</Program_Release_Year>
	';
		}

		echo '		<Program_Cost_Dollars>0</Program_Cost_Dollars>
		<Program_Cost_Other_Code>USD</Program_Cost_Other_Code>
		<Program_Cost_Other>0</Program_Cost_Other>
		<Program_Type>Freeware</Program_Type>
		<Program_Category_Class>Network &amp; Internet::Browser Tools</Program_Category_Class>
		<Program_Specific_Category></Program_Specific_Category>
		<Program_Categories>Internet :: Access Control,Internet :: Browser Utilities,Internet :: Tools &amp; Utilities,Internet :: Monitoring,Internet :: Security</Program_Categories>
		<Program_Release_Status>New Release</Program_Release_Status>
		<Program_Install_Support>Install and Uninstall</Program_Install_Support>
		<Program_OS_Support>WinXP, Win2000, WinVista, WinVista x64, Win7 x32, Win7 x64, Linux, Linux Gnome, Linux GPL, Linux Open Source, Other</Program_OS_Support>
		<Program_Language>English</Program_Language>
		<Program_Change_Info></Program_Change_Info>
		<Program_System_Requirements></Program_System_Requirements>
		<Limitations>None</Limitations>
		<Awards></Awards>
		<File_Info>';

		$size = $download->size;
		echo '			<File_Size_Bytes>' . round($size, 1) . '</File_Size_Bytes>
';

		$size = $download->size/1024;
		echo '			<File_Size_K>' . round($size, 1) . '</File_Size_K>
';

		$size = $download->size/1048576;
		echo '			<File_Size_MB>' . round($size, 1) . '</File_Size_MB>
';

		echo '		</File_Info>
		<Expire_Info>
			<Has_Expire_Info>N</Has_Expire_Info>
			<Expire_Count></Expire_Count>
			<Expire_Based_On></Expire_Based_On>
			<Expire_Year></Expire_Year>
			<Expire_Other_Info></Expire_Other_Info>
			<Expire_Month></Expire_Month>
			<Expire_Day></Expire_Day>
		</Expire_Info>
		<FacebookFanPage></FacebookFanPage>
		<VideoLink1URL></VideoLink1URL>
		<VideoLink2URL></VideoLink2URL>
		<FacebookProductPage></FacebookProductPage>
		<GooglePlusFanPage></GooglePlusFanPage>
	</Program_Info>

	<Web_Info>
		<Application_URLs>
			<Application_Info_URL>http://midoribrowser.org/</Application_Info_URL>
			<Application_Order_URL>http://midoribrowser.org/download/</Application_Order_URL>
			<Application_Screenshot_URL>http://midoribrowser.org/images/screenshots/rdio.png</Application_Screenshot_URL>
			<Application_Icon_URL>http://midoribrowser.org/images/icon.png</Application_Icon_URL>
			<Application_XML_File_URL>http://midoribrowser.org/pad.php</Application_XML_File_URL>
		</Application_URLs>
		<Download_URLs>
			<Primary_Download_URL>';
		echo $download->location;
	}
} ?></Primary_Download_URL>
			<Secondary_Download_URL></Secondary_Download_URL>
			<Additional_Download_URL_1></Additional_Download_URL_1>
			<Additional_Download_URL_2></Additional_Download_URL_2>
		</Download_URLs>
	</Web_Info>

	<Program_Descriptions>
		<English>
			<Keywords>open source, lightweight, web, browser, fast, free</Keywords>
			<Char_Desc_45>A lightweight, fast, and free web browser.</Char_Desc_45>
			<Char_Desc_80>Midori is a lightweight, fast, free, and open-source web browser.</Char_Desc_80>
<!-- TODO -->			<Char_Desc_250>Midori is a lightweight, fast, free, and open-source web browser.</Char_Desc_250>
<!-- TODO -->			<Char_Desc_450>Midori is a lightweight, fast, free, and open-source web browser.</Char_Desc_450>
<!-- TODO -->			<Char_Desc_2000>Midori is a lightweight, fast, free, and open-source web browser.</Char_Desc_2000>
		</English>
	</Program_Descriptions>

	<Permissions>
		<Distribution_Permissions>Midori and all delivered artwork are licensed under the LGPL2. This library is free software; you can redistribute it and/or modify it under the terms of the GNU Lesser General Public License as published by the Free Software Foundation; either version 2.1 of the Licence, or (at your option) any later version. </Distribution_Permissions>
		<EULA></EULA>
	</Permissions>

</XML_DIZ_INFO>

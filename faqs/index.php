<?php require '../chunks/doctype.php'; ?>

<title>FAQs &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

<?php require '../chunks/header.php'; ?>

<h2>Frequently Asked Questions</h2>

<div class="section group">
	<div class="col span_1_of_1"><h3 style="color:#666;">General</h3></div>
</div>
<div class="section group">
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4>What is Midori?</h4>
			<p class="important">Midori is a lightweight webkit web browser designed by Nancy Runge, and is developed and maintained by Christian Dywan, both of <a href="http://twotoasts.de/index.php/midori//">TwoToasts.de</a></p>
			<p>It was originally made for <a href="http://www.xfce.org/">Xcfe</a> as part of there Goodies projects, and as such makes the most out of available system resources. It has also been ported to <a href="http://elementaryos.org/">elementary os</a> as midori-granite to better align with their beatiful system.</p>
		</div>
	</div>
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4>What license is Midori under?</h4>
			<p>Midori is licensed under the <a href="http://www.gnu.org/licenses/lgpl-2.1.html">GNU Lesser General Public License, version 2.1</a>, which allows for free re-distribution of both original and modified versions of Midori, even commercially.</p>
		</div>
	</div>
</div>

<div class="section group">
	<div class="col span_1_of_1"><h3 style="color:#666;">Settings</h3></div>
</div>
<div class="section group">
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4>How do i enable spell checking?</h4>
			<p>You can enable, disable, and change the language of spell checking under the Behaviour tab in Preferences.</p>
			<p class="right"><a href="http://wiki.xfce.org/midori/faq#spell_check">Source</a></p>
		</div>
	</div>
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4>How do i hide the Menubar?</h4>
			<p>Under View, Toolbars you can enable and disable the Menubar, as well as the Statusbar, Bookmarksbar, and Navigationbar. Midori ships in elementary os with all but the Navigationbar disabled.</p>
		</div>
	</div>
</div>
<div class="section group">
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4>How do i browse privately?</h4>
			<p>You can start a private browsng window under the File or App menus. It will load any settings from your normal browsing, but won't save any session changes.</p>
		</div>
	</div>
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4>How do i install adblock?</h4>
			<p>Extensions in Midori are set, and can't be installed or uninstalled, only enabled and disabled. You can find them listed under the Extensions tab in the Preferences dialogue. There you can enable adblock.</p>
		</div>
	</div>
</div>
<div class="section group">
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4>How do i change the search engine?</h4>
			<p>Right click in the address bar, and select Manage Search Engines. Here, you can add, edit, remove, and set your default search engine.</p>
		</div>
	</div>
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4></h4>
			<p></p>
		</div>
	</div>
</div>


<div class="section group">
	<div class="col span_1_of_1"><h3 style="color:#666;">Compatibility</h3></div>
</div>
<div class="section group">
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4>Why do some sites show a mobile version?</h4>
			<p>Versions of Midori before 0.3.5 used a user-agent (some information your browser sends to a website) which caused sites to think you were using a mobile browser. You should upgrade to a newer version, or change it to:</p>
			<code>Mozilla/5.0 (X11; Linux) AppleWebKit/531.2+ Midori/0.4</code>
			<p class="right"><a href="http://wiki.xfce.org/midori/faq#why_does_google_mailcalendarmaps_facebook_not_work_or_show_mobile_version">Source</a></p>
		</div>
	</div>
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4>Why doesn't HTML5 Video play?</h4>
			<p>To play Video you'll need some gstreamer plugins. You can install them with the Software Centre, or with the command below.</p>
			<code>sudo apt-get install gstreamer0.10-base gstreamer0.10-good gstreamer0.10-bad gst-plugins-faad</code>
			<p class="right"><a href="http://ie.microsoft.com/testdrive/Graphics/VideoFormatSupport/Default.html">Test HTML 5 Video</a> &nbsp;&middot;&nbsp; <a href="http://wiki.xfce.org/midori/faq#html5_video_doesn_t_play">Source</a></p>
		</div>
	</div>
</div>
<div class="section group">
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4>How do i open external links?</h4>
			<p>Some desktop applications (the ones that register <span class="code">mimetypes</span>) will automatically open certain links from Midori. You can open external link types, such as magnet:, irc:, apt:, and bitcoin: with other desktop applications only by manually editing the configuration files. This is NOT recommended for most users. The file you need to append your changes too is <span class="code">~/.local/share/applications/mimeapps.list</span>, using the format <span class="code">x-scheme-handler/magnet=transmission-gtk.desktop</span></p>
			<p class="right"><a href="http://wiki.xfce.org/midori/faq#open_magnetircaptbitcoinwith_an_application">Source</a></p>
		</div>
	</div>
	<div class="col span_1_of_2">
		<div class="bubble standard">
			<h4>Can i install UserScripts and UserStyles?</h4>
			<p>Yes, you'll need to enable the User Addons extension, then store your scripts in:</p>
			<code>~/.local/share/midori/scripts</code>
			<p>Styles should be stored in:</p>
			<code>~/.local/share/midori/styles</code>
			<p class="right"><a href="http://wiki.xfce.org/midori/faq#user_scripts_and_styles">Source</a></p>
		</div>
	</div>
</div>

<div class="section group">
	<div class="col span_1_of_1"><h3>Flash</h3></div>
</div>
<div class="section group">
	<div class="col span_2_of_3">
		<div class="bubble standard">
			<h4>elementary os</h4>
			<div class="section group">
				<div class="col span_1_of_2">
					<h5>32bit</h5>
					<p>First, we're going to install flash and a wrapper.</p>
					<code>sudo apt-get install nspluginwrapper flashplugin-installer</code>
					<p>Now we need to copy flash over to the folder for Mozilla plugins. Midori isn't mozilla but that's where the wrapper will look.</p>
					<code>sudo cp /usr/lib/flashplugin-installer/libflashplayer.so  /usr/lib/mozilla/plugins/libflashplayer.so</code>
					<p>Now tell the wrapper to look for it.</p>
					<code>nspluginwrapper -v -a -n -i</code>
				</div>
				<div class="col span_1_of_2">
					<h5>64bit</h5>
					<p>For people with 64-bit elementary os who want Flash in Midori, there is a (manual) fix. As you may have noticed, you can't install 32-bit Flash through the package manager since it whines too much about dependencies.</p>
					<h5><a href="https://get.adobe.com/flashplayer/completion/?installer=Flash_Player_11.2_for_other_Linux_(.tar.gz)_32-bit">Download</a></h5>
					<p>Extract libflashplayer.so somewhere, right-click Files in the dock and select New Window as Administrator. Navigate to the file and copy it to /usr/lib/mozilla/plugins/</p>
					<code>nspluginwrapper -v -a -n -i</code>
					<p class="right"><a href="https://plus.google.com/103196092969302947544/posts/gqaJVRq3Z7i">Source</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="col span_1_of_3">
		<div class="bubble standard">
			<h4>Windows</h4>
			<p>Starting with WebkitGTK+ 1.8.2 (Midori 0.4.7) Netscape plugins are now supported if they're installed in Application Data\Mozilla\plugins or bin\Plugins in Midori's folder (ie. NPSWF32.dll for Flash).</p>
			<p class="right"><a href="http://wiki.xfce.org/midori/faq#flash_doesn_t_work">Source</a></p>
		</div>
	</div>
	<div class="col span_1_of_3">
		<div class="bubble standard">
			<h4>Arch</h4>
			<p>Install the package <a href="https://aur.archlinux.org/packages/midori-flash/">midori-flash</a>, which automatically takes the same actions required to get flash in <a href="https://wiki.archlinux.org/index.php/Epiphany#Flash">Epiphany</a>.</p>
			<p class="right"><a href="https://wiki.archlinux.org/index.php/Midori#Flash_Plugin">Source</a></p>
		</div>
	</div>
</div>

https://midori.jottit.com/	

<?php require '../chunks/footer.php'; ?>

	</div>
</div>



<div id="footercontainer">
	<footer>

		<div class="section group">
			<div class="col span_1_of_6">
				<a href="http://eustasy.org/" title="eustasy organisation"><img src="http://eustasy.org/images/eustasy-light.png" title="eustasy" alt="eustasy logo" class="eustasy"></a>
				<p class="center none">An <a href="http://eustasy.org/classes/openshout">OpenShout</a> site.</p>
			</div>
			<div class="col span_1_of_12"></div>
			<div class="col span_1_of_6">
				<h4>legal</h4>
				<ul>
					<li><a href="http://eustasy.org/legal/website-disclaimer" title="Website Disclaimer">disclaimer</a></li>
					<li><a href="http://eustasy.org/legal/copyright-notice" title="Copyright Notice">copyright</a></li>
					<li><a href="http://eustasy.org/legal/cookie-policy" title="Cookie Policy">cookies</a></li>
					<li><a href="http://eustasy.org/legal/privacy-policy" title="Privacy Policy">privacy</a></li>
					<li><a href="http://eustasy.org/legal/terms-of-service" title="Terms Of Service">terms</a></li>
				</ul>
			</div>
			<div class="col span_1_of_3 license">
				<h4>license</h4>
				<p>
					This site and its content is licensed under the <a href="http://www.gnu.org/licenses/lgpl-2.1.html" rel="license">LGPL 2.1</a> license. This license allows you to modify, redistribute and sublicense the work, even allowing for some commercial use, on the condition that it is accepted without warranty or liability and that there are instructions for obtaining or viewing the original.
					<span class="floatright"><a href="http://www.tldrlegal.com/license/gnu-lesser-general-public-license-v2.1-(lgpl-2.1)" rel="license">human readable</a> &nbsp;&middot;&nbsp; <a href="http://www.gnu.org/licenses/lgpl-2.1-standalone.html" rel="license">legal code</a></span>
				</p>
			</div>
			<div class="col span_1_of_12"></div>
			<div class="col span_1_of_6">
				<h4>about</h4>
				<p><a href="<?php echo $home; ?>/">Midori</a> is a lightweight, fast, and free web browser. It is also the default browser of the beautiful <a href="http://elementaryos.org/">elementary os</a>. <span class="floatright"><a href="<?php echo $home; ?>/about/">read more</a></span></p>
			</div>

		</div>

		<div class="section group">
			<div class="col span_5_of_6"></div>
			<div class="col span_1_of_6">
				<p><a href="https://github.com/eustasy/midori-browser.org/issues?direction=desc&milestone=&page=1&sort=updated&state=open"><img alt="Flag" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAQCAYAAADJViUEAAABn0lEQVQoz7WRv0sCYRjHnzt0kI4iXIxABxMCizhoyLFMmpqcBIcQRNpqcvVvqKEb25wiFyHEgvLAI1/xIFEPnBR6B1/v6Aj88Z73NkUWFUr0wAPPM3y+fJ/nC/CH4qYXRVG2BUE48Xg865qmXQ6HQykcDlu/KuRyuRVVVS8IIcwwDGYYBtN1nVWr1dN0Os39CBYKhQOMsf0OTTchZKKqauKrQCaT4Vut1jqXz+eDoigqLpdL+E6cMQa1Wu2eMXbj8/nsyWSy6Xa7d5vN5h2XzWYXA4HAg9/v35r1UQghTRCEPT4Wi5nj8fhxVpAxZpqmeRQKhZ55AACn01mglH5EwHGvCKFir9drTIO2bY8wxoloNKoAAPAAALquP1FKXxhjUK/XzxuNxmokEomUSqWtdrt9PBqNjEql0sEYHwaDwatPViRJWkAIVYrFIpIkaeGr1WQyycXj8Z8jK5fLZ/1+X5dleW3W+/n3weFw3FJKl71e78bcMCGkblmW0e129+eGO53OM8ZYGwwGO7IsC3PBqVRqYFnWtSiKL7ZtL8F/1xvoReawuKO8IAAAAABJRU5ErkJggg==">&nbsp;&nbsp; Site Issues</a></p>
			</div>
		</div>

	</footer>
</div>

	<!-- Scripts -->

	<!-- jQuery: Load from CDN, or fallback to local -->
	<!--[if lt IE 9]>
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo $home; ?>/chunks/jquery-1.10.2.min.js"><\/script>');</script>
		<![endif]-->
		<!--[if IE 9]><!-->
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="<?php echo $home; ?>/chunks/jquery-2.0.3.min.js"><\/script>');</script>
		<!--<![endif]-->

	<!-- jQuery Select-All Code -->
	<script>$('input.code').one('click', function() { $(this).select(); });</script>
	<script>$('input.code').dblclick(function() { $(this).select(); });</script>
	<script>$('textarea.code').one('click', function() { $(this).select(); });</script>
	<script>$('textarea.code').dblclick(function() { $(this).select(); });</script>

	<!-- jQuery.equalize -->
	<script src="<?php echo $home; ?>/chunks/jquery.equalize.min.js"></script>

	<!-- Fancybox -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox({ 'padding' : 0 });
		$('.fancybox-media').fancybox({
			'padding' : 0,
			helpers : { media : {} }
		});
	});
	</script>

</body>
</html>

<audio id="preview"></audio> 
<div id="search_script" class="search_script"></div>

<?php if ($_SERVER['HTTP_HOST'] == '30sec.fm'/*$_SERVER['IS_30SEC_FM_PRODUCTION']*/) : ?>
	<script src="/javascripts/min/minify.js" type="text/javascript"></script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-8809253-5']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
<?php else: ?>
	<script src="/javascripts/jquery-1.6.4.js" type="text/javascript"></script>
	<script src="/javascripts/jquery.mobile-1.0b2.js" type="text/javascript"></script>
	<script src="/javascripts/const.js" type="text/javascript"></script>
	<script src="/javascripts/global.js" type="text/javascript"></script>
	<script src="/javascripts/callback.js" type="text/javascript"></script>
	<script src="/javascripts/bookmark.js" type="text/javascript"></script>
	<script src="/javascripts/itunes_search.js" type="text/javascript"></script>
	<script src="/javascripts/global_mediator.js" type="text/javascript"></script>
	<script src="/javascripts/search_mediator.js" type="text/javascript"></script>
	<script src="/javascripts/bookmark_mediator.js" type="text/javascript"></script>
	<script src="/javascripts/album_mediator.js" type="text/javascript"></script>
	<script src="/javascripts/list_mediator.js" type="text/javascript"></script>
<?php endif; ?>
</body>
</html>


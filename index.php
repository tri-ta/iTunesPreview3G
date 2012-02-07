<?php include("includes/header.php"); ?>

	<div id="menu">
		<a href="/" id="menu_search" class="menu_search selected">曲を検索</a>
		<a href="/bookmark" id="menu_bookmark" class="menu_bookmark">お気に入り</a>
	</div>
	<div data-role="content">
		<form id="search_form" class="search_form">
			<input type="search" name="keyword" id="keyword" class="keyword not_focused" data-theme="c" value="" onfocus="focusHandler(); itunesSearch()" onblur="itunesSearch()"/>
		</form>
		<div id="search_result_container" class="search_result_container" data-theme="a">
			<h2 class="title">iTunes Chart (Top 50)</h2>
			<div class="info"><p>曲をタップすると音がでます。ご注意ください。</p></div>
			<div class="chart"></div>
		</div>
	</div>
	<div data-role="footer" id="footer">
		<p>&copy; <a href="http://tri-ta.com" target="_blank">tri-ta</a>, <a href="http://blk.jp" target="_blank">blk</a></p>
	</div>
</div><!-- #container -->

<?php include("includes/footer.php"); ?>


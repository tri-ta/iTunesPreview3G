<?php include("includes/header.php"); ?>

  <div id="menu">
    <a href="javascript:jump2Search()" id="menu_search" class="menu_search selected">曲を検索</a>
    <a href="javascript:jump2Bookmarks()" id="menu_bookmark" class="menu_bookmark">お気に入り</a>
  </div>
  <div data-role="content">
    <form id="search_form" class="search_form">
      <input type="search" name="keyword" id="keyword" class="keyword not_focused" data-theme="c" value="" onfocus="focusHandler()" onblur="itunesSearch()"/>
    </form>
    <br clear="all"/>
    <div id="search_result_container" class="search_result_container" data-theme="a">
      <div class="intro"></div>
    </div>
  </div>
  <div data-role="footer" id="footer">
    <p>&copy; <a href="http://tri-ta.com" target="_blank">tri-ta</a>, <a href="http://blk.jp" target="_blank">blk</a></p>
  </div>
</div><!-- #container -->

<?php include("includes/footer.php"); ?>


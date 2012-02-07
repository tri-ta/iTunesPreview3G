/**
 * init
 */
$(document).bind('pageshow', function(){
    	if($('.search_result_container:visible').length == 0) return;

	// menu
	//$('#menu:visible').children().removeClass('selected');
	//$('.menu_search:visible').addClass('selected');

	// introduction
	var isNotSearched = $('.search_result_container .info').is(':visible');;
	if(isNotSearched){
		//resultContainer.html(getMessages().searchIntro);
		$('.keyword:visible').attr('value', getMessages().searchHelpText);
	}

	// search setup
	$('.search_form:visible').submit(function() { $('.selected:visible').get(0).focus(); itunesSearch(); return false; }); // submitでフォーカスを外して検索
	//$('#search_form').blur(itunesSearch); // blurイベントに検索アクションを割り当て…たかったが、なぜか効かないのでHTMLのonblur属性に直に設定した
	
	// 以下、チャート表示
	// 一度実行された後かどうかチェック
	if($('.chart:visible').html() != '') return;

	// set rank info
	itunesSearchChart('topsongs'); // get collection information from iTunes Store API
});

function focusHandler() {
	var keywordField = $('.keyword:visible');
	if(keywordField.hasClass('not_focused')) {
		keywordField.removeClass('not_focused');
		keywordField.attr('value', '');
	}
}

/**
 * show iTunes Chart
 */
function showChart(results) {
	// get html elements
	var chartPane = $('.chart:visible');

	// set track information
	showItemRss(results, chartPane, MODE_CHART);
}

/**
 * jump to album page
 */
function jump2Album(albumId) {
	$.mobile.changePage({  
		url: 'album', 
		type: 'get',
		data: 'cId=' + albumId
	}, "slide", false, true, false);  
}

/**
 * jump to bookmarks page
 */
function jump2Bookmarks() {
	$.mobile.changePage({
		url: "bookmark", 
		type: "get",
		data: ""
	}, "slide", false, true, false);
}

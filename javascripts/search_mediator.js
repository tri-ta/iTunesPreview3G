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
		$('.keyword:visible').attr('placeholder', getMessages().searchHelpText);
		// チャート表示
		itunesSearchChart('topsongs'); // get collection information from iTunes Store API
	}

	// search setup
	$('.search_form:visible').submit(function() { $('.selected:visible').get(0).focus(); itunesSearch(); return false; }); // submitでフォーカスを外して検索
	//$('#search_form').blur(itunesSearch); // blurイベントに検索アクションを割り当て…たかったが、なぜか効かないのでHTMLのonblur属性に直に設定した
});

function focusHandler() {
	var keywordField = $('.keyword:visible');
	if(keywordField.hasClass('not_focused')) {
		keywordField.removeClass('not_focused');
	}
}

/**
 * show iTunes Chart
 */
function showChart() {
	// get html elements
	var container = $('.search_result_container:visible');
	
	// clear container
	container.html('');
	
	// generate html elements
	var h2_title = $('<h2 class="title">iTunes Chart (Top 50)</h2>');
	var div_chart = $('<div class="chart"></div>');
	container.append(h2_title);
	container.append(div_chart);
	
	// set track information
	itunesSearchChart('topsongs'); // get collection information from iTunes Store API
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

/**
 * init
 */
$(document).bind('pageinit', function(){  
	// basic setup
	$.mobile.ajaxEnabled = true;
	$.mobile.page.prototype.options.addBackBtn = true;
	$.mobile.loadingMessage = getMessages().loading;
	$.mobile.pageLoadErrorMessage = getMessages().loadError;
	
	// localize
	//$('.title:last').html(getLabels().subTitle + ' - ' + getLabels().title);
	//$('.menu_search:last').html(getLabels().menuSearch);
	//$('.menu_bookmark:last').html(getLabels().menuBookmark);

	$('#preview').bind('ended', audioStop);
});
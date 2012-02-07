TMP_DIR=tmp

JS_DIR=../javascripts
JS_OUT_DIR=$(JS_DIR)/min
JS_FILES=jquery-1.7.1.js jquery.mobile-1.0.1.js const.js global.js callback.js bookmark.js itunes_search.js global_mediator.js search_mediator.js bookmark_mediator.js album_mediator.js list_mediator.js
JS_PATH=$(addprefix $(JS_DIR)/,$(JS_FILES))
JS_TMP_PATH=$(addprefix $(TMP_DIR)/,$(JS_FILES))

CSS_DIR=../stylesheets
CSS_OUT_DIR=$(CSS_DIR)/min
CSS_FILES=jquery.mobile-1.0.1.css common.css
CSS_PATH=$(addprefix $(CSS_DIR)/,$(CSS_FILES))

all: js css

js: $(JS_PATH)
	cp $(JS_PATH) $(TMP_DIR)
	sed -e 's/\/\*!/\/** @preserve/g' -i'.bak' $(JS_TMP_PATH)
	java -jar ./closure-compiler.jar $(addprefix --js ,$(JS_TMP_PATH)) --js_output_file=$(JS_OUT_DIR)/minify.js

css: $(CSS_PATH)
	cat $(CSS_PATH) > $(TMP_DIR)/all.css
	java -jar ./yuicompressor-2.4.6.jar $(TMP_DIR)/all.css -o $(CSS_OUT_DIR)/minify.css


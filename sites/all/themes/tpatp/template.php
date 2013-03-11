<?php

function tpatp_preprocess(&$variables){
	$variables['theme_path'] = base_path().path_to_theme().'/';
}

function tpatp_js_alter(&$js) {
	if (isset($js['misc/jquery.js'])) {
        $jsPath = 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js';
        $js['misc/jquery.js']['data'] = $jsPath;
        $js['misc/jquery.js']['version'] = '1.9.1';
    }
}
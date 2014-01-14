<?php

	// addCss("webfont1", "<link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>");

	$userAgent = $_SERVER['HTTP_USER_AGENT'];
	if(preg_match("/(iPhone)|(iPod)|(iPad)/i",$userAgent)){
		$meta["viewport"] = '<meta name="viewport" content="width=980px" />';
	}else{
		$meta["viewport"] = '<meta name="viewport" content="width=980px" />';
	}

	// =Use Require.js
	$plugins = array();
	addJs('theme.min.js', '<script src="'.BASEURL.'/'.THEME.'/js/theme.min.js"></script>');
	// addJs('require.js', '<script data-main="'.THEMEURL.'/js/theme" src="'.THEMEURL.'/js/vendor/require-2.1.5.min.js"></script>');
	addJs('lt-ie9',
		'<!--[if lt IE 9]>'
		.'<script src="'.BASEURL.'/lib/js/html5-3.6.2pre.js"></script>'
		.'<script src="'.BASEURL.'/lib/js/selectivizr-1.0.2-min.js"></script>'
		.'<![endif]-->'
	);

	// addJs("jquery-easing", '<script src="'.BASEURL.'/lib/js/jquery.easing.1.3.js"></script>');
	// addJs("jquery-vgrid", '<script src="'.BASEURL.'/lib/js/jquery.vgrid-0.1.9.custom.js"></script>');

	// =font-awesome-ie7
	addCss("font-awesome-ie7", '<!--[if IE 7]><link rel="stylesheet" href="'.BASEURL.'/lib/css/font-awesome-ie7.min.css"><![endif]-->');

?>

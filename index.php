<?php
	/* make structure */
	$structure['foundation'] =
		array(
			"div#site" => array(
				"div#summary",
				"div#header",
				"div#primary.component",
				// "div#aside.component",
				"div#footer.component",
				"div#totop",
			),
		);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="shortcut icon" href="<?php echo BASEURL.'/'.THEME.'/images/favicon.ico'; ?>" type="image/vnd.microsoft.icon">
{!extention}
<!--[if IE 7]><link rel="stylesheet" href="<?php echo BASEURL.'/lib/css/foundation-ie7.css'; ?>" /><![endif]-->
</head>
<body>
<?php

	/* expand structure */
	layout($structure['foundation']);

?>
</body>
</html>

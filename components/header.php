<?php

	// echo file::load(UPLOADS."/header.php");

?>
<?php

global $siteinfo;
$logo = logotype("<a href='" .BASEURL. "/'><img src='".BASEURL."/".IMAGES."/logo-symbol.png' alt='Votre Chateau'></a>");

$navigationLeft =<<<EOF
<div class="nav">
	<ul>
		<li class="link">
			<a href="%BASEURL%/care/"><img src="%BASEURL%/%THEME%/images/nav/nav-care.png" alt="テキスト"></a>
		</li>
		<li class="link">
			<a href="%BASEURL%/products/"><img src="%BASEURL%/%THEME%/images/nav/nav-products.png" alt="テキスト"></a>
		</li>
		<li class="link">
			<a href="%BASEURL%/howto/"><img src="%BASEURL%/%THEME%/images/nav/nav-howto.png" alt="テキスト"></a>
		</li>
	</ul>
</div>
EOF;

$navigationRight =<<<EOF
<div class="nav">
	<ul>
		<li class="link">
			<a href="%BASEURL%/ingredient/"><img src="%BASEURL%/%THEME%/images/nav/nav-ingredient.png" alt="テキスト"></a>
		</li>
		<li class="link">
			<a href="%BASEURL%/online-shop/"><img src="%BASEURL%/%THEME%/images/nav/nav-online_shop.png" alt="テキスト"></a>
		</li>
		<li class="link">
			<a href="%BASEURL%/company/"><img src="%BASEURL%/%THEME%/images/nav/nav-company.png" alt="テキスト"></a>

		</li>
	</ul>
</div>
EOF;

$navigationLeft = str_replace("%BASEURL%", BASEURL, $navigationLeft);
$navigationLeft = str_replace("%THEME%", THEME, $navigationLeft);
$navigationLeft = phpQuery::newDocument($navigationLeft);
$navigationLeft['.'.now()]->addClass("active");

$navigationRight = str_replace("%BASEURL%", BASEURL, $navigationRight);
$navigationRight = str_replace("%THEME%", THEME, $navigationRight);
$navigationRight = phpQuery::newDocument($navigationRight);
$navigationRight['.'.now()]->addClass("active");

?>

<div class="row">

	<?php echo $logo; ?>

	<div class="nav-left mod">
		<?php echo $navigationLeft; ?>
	</div>

	<div class="nav-right mod">
		<?php echo $navigationRight; ?>
	</div>

</div>
<div class="bg"></div>

<!-- // =NavSample
<div class="six columns">
  <div id="nav">
	<ul>
	  <li><a href="./">Home</a></li>
	  <li><a href="?p=models">Models</a></li>
	  <li><a href="?p=icons">Icons</a></li>
	  <li><a href="?p=elements">Elements</a></li>
	  <li class="dropdown">Dropdown ＋</i>
		<ul>
		  <li><a href="#">Sub Nav Item 1</a></li>
		  <li><a href="#">Sub Nav Item 2</a></li>
		  <li><a href="#">Sub Nav 3</a></li>
		  <li><a href="#">Sub Nav 4</a></li>
		  <li><a href="#">Sub Nav Item 5</a></li>
		</ul>
	  </li>
	</ul>
  </div>
</div>
<div class="twelve columns">
	<ul class="nav-bar">
		<li class="active"><a href="#">Nav Item 1</a></li>
		<li class="has-flyout">
		  <a href="#">Nav Item 2</a>
		  <a href="#" class="flyout-toggle"><span> </span></a>
		  <ul class="flyout">
			<li><a href="#">Sub Nav 1</a></li>
			<li><a href="#">Sub Nav 2</a></li>
			<li><a href="#">Sub Nav 3</a></li>
		  </ul>
		</li>
		<li class="has-flyout">
		  <a href="#">Nav Item 2</a>
		  <a href="#" class="flyout-toggle"><span> </span></a>
		  <ul class="flyout">
			<li><a href="#">Sub Nav 1</a></li>
			<li><a href="#">Sub Nav 2</a></li>
			<li><a href="#">Sub Nav 3</a></li>
		  </ul>
		</li>
		<li class="has-flyout">
		  <a href="#">Nav Item 2</a>
		  <a href="#" class="flyout-toggle"><span> </span></a>
		  <ul class="flyout">
			<li><a href="#">Sub Nav 1</a></li>
			<li><a href="#">Sub Nav 2</a></li>
			<li><a href="#">Sub Nav 3</a></li>
		  </ul>
		</li>
	</ul>
</div>
-->

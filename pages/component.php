<?php

	//= SEO用に設定。
	// define( 'PAGE_TITLE', "上書きタイトル" );
	// define( 'PAGE_DESCRIPTION', "上書き説明文" );
	// define( 'PAGE_KEYWORD', "キーワード1, キーワード2, キーワード3" );
	
?>
<div class="row">
	<div class="twelve columns">
		<h1>Home</h1>
		<p>Start "Prologue"</p>
		<p>Content here...</p>
	</div>
</div>

<div class="row">
	<div class="twelve columns md">
		<h2>Reveal</h2>
		<a href="#" class="button" data-reveal-id="myModal2" id="buttonForModal">Click Me For A Modal</a>
		<pre>[expand, xlarge, large, medium, small]</pre>
	</div>
	<div id="myModal" class="reveal-modal large">
		<div class="row">
			<div class="six columns mod">
				<h2>Awesome. I have it.</h2>
				<p class="lead">Your couch.  It is mine.</p>
				<p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>	
			</div>
			<div class="six columns mod">
				<h2>Awesome. I have it.</h2>
				<img src="holder.js/1600x900" alt="">
				<p class="lead">Your couch.  It is mine.</p>
				<p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>	
			</div>
		</div>
		<a class="close-reveal-modal">&#215;</a>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#buttonForModal").click(function() {
				$("#myModal").reveal();
			});
		});
	</script>
</div>

<div class="row">
	<div class="twelve columns">
		<h3>Tabs</h3>
		<dl class="tabs">
		  <dd class="active"><a href="#simple1">Simple Tab 1</a></dd>
		  <dd><a href="#simple2">Simple Tab 2</a></dd>
		  <dd class="hide-for-small"><a href="#simple3">Simple Tab 3</a></dd>
		</dl>
		<ul class="tabs-content">
		  <li class="active" id="simple1Tab">This is simple tab 1s content. Pretty neat, huh?</li>
		  <li id="simple2Tab">This is simple tab 2s content. Now you see it!</li>
		  <li id="simple3Tab">This is simple tab 3s content.</li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="twelve columns md">
			<h2>Orbit</h2>
			<div id="visual">
				<div class="inner">
					<a href="./"><img src="holder.js/1200x450" alt="slide image"></a>
					<a href="./"><img src="holder.js/1200x450" alt="slide image"></a>
					<a href="./"><img src="holder.js/1200x450" alt="slide image"></a>
				</div>
			</div>

	</div>
</div>
<div class="row">
	<div class="twelve columns md">
		<h2>Lightbox - External Plugin</h2>
		<p>標準プラグインの代替として</p>
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<ul class="block-grid three-up">
			<li class="mod">
				<a href="http://dummyimage.com/930x16:9/ccc/fff.png" data-modal class="thumbnail">
					<img src="http://dummyimage.com/930x16:9/ccc/fff.png" alt="test">
					<p class="caption">Lorem ipsum dolor sit amet,</p>

				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum iure eveniet itaque modi ex fuga recusandae est natus! Sit commodi culpa itaque nemo quam neque beatae modi possimus facilis et.</p>
			</li>
			<li class="mod">
				<a href="http://dummyimage.com/930x16:9/ccc/fff.png" data-modal class="thumbnail">
					<img src="http://dummyimage.com/930x16:9/ccc/fff.png" alt="test">
					<p class="caption">Lorem ipsum dolor sit amet,</p>

				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum iure eveniet itaque modi ex fuga recusandae est natus! Sit commodi culpa itaque nemo quam neque beatae modi possimus facilis et.</p>
			</li>
			<li class="mod">
				<a href="http://dummyimage.com/930x16:9/ccc/fff.png" data-modal class="thumbnail">
					<img src="http://dummyimage.com/930x16:9/ccc/fff.png" alt="test">
					<p class="caption">Lorem ipsum dolor sit amet,</p>

				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum iure eveniet itaque modi ex fuga recusandae est natus! Sit commodi culpa itaque nemo quam neque beatae modi possimus facilis et.</p>
			</li>
		</ul>
	</div>
</div>

<?php /*
<div class="row">
	<div class="twelve columns mod">
		<h2>Megelan - not Action</h2>
		<ul data-magellan-expedition='fixed' class="up">
			<li data-magellan-arrival='fiji'>Fiji</li>
			<li data-magellan-arrival='bahamas'>Bahamas</li>
			<li data-magellan-arrival='hawaii'>Hawaii</li>
		</ul>
		<div data-magellan-destination='fiji'>
			  <p>When this is in view the Fiji arrival will be notified.</p>
		</div>
		<div data-magellan-destination='bahamas'>
			  <p>When this is in view the Bahamas arrival will be notified.</p>
		</div>
		<div data-magellan-destination='hawaii'>
			  <p>When this is in view the Hawaii arrival will be notified.</p>
		</div>
	</div>
</div>
<script type="text/javascript">
$(window).load(function(){
	$('#fixedNav a').anchorme({ offset: 24 });
});
</script>
*/ ?>
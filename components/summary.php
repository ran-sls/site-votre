<?php global $siteinfo; ?>

<nav class="top-bar">

	<ul>
		<!-- Title Area -->
		<li class="logo">
		  <h2><a href="<?php echo BASEURL; ?>"><img src="<?php echo BASEURL."/".THEME."/images/src/logo.fw.png" ?>" alt="<?php echo $siteinfo['brand']; ?>"></a></h2>
		</li>
	</ul>
	<section>
		<!-- Left Nav Section -->
		<ul class="left">
			<li class="facebook" style="padding-left: 0;">
				<a
				href="http://www.facebook.com/sharer.php?u=<?php echo $siteinfo["facebook"]["target"]; ?>&amp;t=Socialite.js"
				class="socialite facebook-like"
				data-href="<?php echo $siteinfo["facebook"]["target"]; ?>"
				data-send="false"
				data-layout="button_count"
				data-show-faces="false"
				rel="nofollow"
				target="_blank"
				><span class="vhidden">Share on Facebook</span></a>
			</li>
			<!-- <li class="divider"></li>
			<li><a href="#">Main Item 2</a></li> -->
		</ul>

		<!-- Sample -->
		<!-- <ul class="left">
		  <li class="divider"></li>
		  <li class="has-dropdown">
			<a class="active" href="#">Main Item 1</a>
			<ul class="dropdown">
			  <li><label>Section Name</label></li>
			  <li><a href="#" class="">Dropdown Level 1</a></li>
			  <li><a href="#">Dropdown Option</a></li>
			  <li><a href="#">Dropdown Option</a></li>
			  <li class="divider"></li>
			  <li><label>Section Name</label></li>
			  <li><a href="#">Dropdown Option</a></li>
			  <li><a href="#">Dropdown Option</a></li>
			  <li><a href="#">Dropdown Option</a></li>
			  <li class="divider"></li>
			  <li><a href="#">See all &rarr;</a></li>
			</ul>
		  </li>
		  <li class="divider"></li>
		  <li><a href="#">Main Item 2</a></li>
		  <li class="divider"></li>
		  <li class="has-dropdown">
			<a href="#">Main Item 3</a>
			<ul class="dropdown">
			  <li><a href="#">Dropdown Option</a></li>
			  <li><a href="#">Dropdown Option</a></li>
			  <li><a href="#">Dropdown Option</a></li>
			  <li class="divider"></li>
			  <li><a href="#">See all &rarr;</a></li>
			</ul>
		  </li>
		  <li class="divider"></li>
		</ul> -->

		<!-- Right Nav Section -->
		<ul class="right">
			<li><a href="<?php echo $siteinfo['facebook']['target']; ?>" target="_blank"><i class="icon-facebook"></i><span class="caption">Facebook</span></a></li>
			<li class="divider"></li>
			<li><a href="<?php echo $siteinfo['twitter']['target']; ?>" target="_blank"><i class="icon-twitter"></i><span class="caption">Twitter</span></a></li>
			<li class="divider"></li>
			<li><a href="<?php echo $siteinfo['blog']['target']; ?>" target="_blank"><i class="icon-book"></i><span class="caption">Ameblo</span></a></li>
			<li class="divider"></li>
		</ul>


		<!-- <ul class="right">
			<li class="has-dropdown">
			  <a href="#">Main Item 4</a>
			  <ul class="dropdown">
				<li><label>Section Name</label></li>
				<li class="has-dropdown">
				  <a href="#" class="">Has Dropdown, Level 1</a>
				  <ul class="dropdown">
					<li><a href="#">Dropdown Options</a></li>
					<li><a href="#">Dropdown Options</a></li>
					<li class="has-dropdown">
					  <a href="#">Has Dropdown, Level 2</a>
					  <ul class="dropdown test">
						<li><a href="#">Subdropdown Option</a></li>
						<li><a href="#">Subdropdown Option</a></li>
						<li><a href="#">Subdropdown Option</a></li>
					  </ul>
					</li>
					<li><a href="#">Subdropdown Option</a></li>
					<li><a href="#">Subdropdown Option</a></li>
					<li><a href="#">Subdropdown Option</a></li>
				  </ul>
				</li>
				<li><a href="#">Dropdown Option</a></li>
				<li><a href="#">Dropdown Option</a></li>
				<li class="divider"></li>
				<li><label>Section Name</label></li>
				<li><a href="#">Dropdown Option</a></li>
				<li><a href="#">Dropdown Option</a></li>
				<li><a href="#">Dropdown Option</a></li>
				<li class="divider"></li>
				<li><a href="#">See all &rarr;</a></li>
			  </ul>
			</li>
			<li class="divider"></li>
			<li><a href="#">Main Item 5</a></li>
			<li class="divider"></li>
			<li class="has-dropdown">
			  <a href="#">Main Item 6</a>
			  <ul class="dropdown">
				<li><a href="#">Dropdown Option</a></li>
				<li><a href="#">Dropdown Option</a></li>
				<li><a href="#">Dropdown Option</a></li>
				<li class="divider"></li>
				<li><a href="#">See all &rarr;</a></li>
			  </ul>
			</li>
			<li class="divider"></li>
		</ul> -->
	</section>
</nav>
<!-- End Header and Nav -->

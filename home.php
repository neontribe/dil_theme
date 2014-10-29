<?php get_header(); ?>

<h1 class="vh"><!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">--><?php bloginfo( 'name' ); ?><!--</a>--></h1>

<div class="grid-2-columns">
	<div class="app border-right">
		<h2>The App</h2>
		<div class="grid-2-columns">
			<div>
				<img class="phone" src="<?php bloginfo('stylesheet_directory'); ?>/images/phone_smaller.png" />
			</div>
			<div>
				<h3>Download&hellip;</h3>
				<p>
					<a href="https://itunes.apple.com/us/app/mind-of-my-own/id726944594">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/app-store-momo.png" alt="Available at the Apple store for iOS">
					</a>
				</p>
				<p>
					<a href="https://play.google.com/store/apps/details?id=com.sixteen25.momo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Android-MOMO-Play.png" alt="Available on Android from Google Play">
					</a>
				</p>
				<span class="try-online">&hellip;Or <a href="http://app.mindofmyown.org.uk">use it online!</a></span>
			</div>
		</div>
	</div>
	<div class="service">
		<h2>The Service</h2>
		<div class="grid-2-columns baseline">
			<div>
				<p class="smaller">A <a href="http://mindofmyown.org.uk/young-people-momo-improves-service/">subscription service</a> for local authorities that connects their social workers with the needs of their children in care, through the app. Pushes children in care's views into the heart of decision making.</p>
			</div>
			<div>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/lappy_phone.jpg" alt="Service MOMO integrated monitoring">
			</div>
		</div>
		<p><strong class="bigger">Request an info pack:</strong> <a class="button-shaped" href="tel:07834 364 205"><span class="icon-mobile"></span> 07834 364 205</a></p>
	</div>
</div>
<div class="taking-off">
	<h2><span class="icon-rocket"></span> It's taking off!</h2>
	<div class="grid-2-columns">
		<div class="councils">
			<h3>Using MOMO</h3>
			<ul>
				<li>Surrey County Council</li>
				<li>Derbyshire County Council</li>
				<li>West Sussex County Council</li>
				<li>South Eastern Trust (Northern Ireland)</li>
				<li>Northumberland County Council</li>
				<li>NYAS (Bexley)</li>
			</ul>
		</div>
		<div class="awards">
			<h3>Awards</h3>
			<ul>
				<li>Winner:&nbsp;<a href="http://mindofmyown.org.uk/momo-wins-social-care-innovation-award-northern-ireland//" onclick="_gaq.push(['_trackEvent', 'outbound-widget-int', 'http://mindofmyown.org.uk/momo-wins-social-care-innovation-award-northern-ireland//', 'Quality &amp; Safety&nbsp;Innovation Award']);" target="_blank">Quality &amp; Safety&nbsp;Innovation Award (NI)</a></li>
				<li>Finalist: Advice &amp; Guidance Award -<a href="http://www.cypnawards.com/shortlist-2014" onclick="_gaq.push(['_trackEvent', 'outbound-widget', 'http://www.cypnawards.com/shortlist-2014', ' Children &amp; Young People Now Awards 2014']);" target="_blank"> Children &amp; Young People Now Awards 2014</a></li>
				<li>Finalist Best Technical Innovation in the Public Sector - <a href="http://mindofmyown.org.uk/momo-shortlisted-technical-innovation-public-sector-award/" onclick="_gaq.push(['_trackEvent', 'outbound-widget-int', 'http://mindofmyown.org.uk/momo-shortlisted-technical-innovation-public-sector-award/', 'DEA Awards 2014']);" target="_blank">DEA Awards 2014</a></li>
				<li>Finalist the 'Good' Awards - <a href="http://techspark.co/the-sparkies-awards-2014-shortlist-announced/" onclick="_gaq.push(['_trackEvent', 'outbound-widget', 'http://techspark.co/the-sparkies-awards-2014-shortlist-announced/', 'Sparkies Awards 2014']);" target="_blank">Sparkies Awards 2014</a></li>
				<li>Editorial: Technology in Children's Social Care, <a href="http://mindofmyown.org.uk/technology-helping-children-care/" onclick="_gaq.push(['_trackEvent', 'outbound-widget-int', 'http://mindofmyown.org.uk/technology-helping-children-care/', 'Children &amp; Young People Now']);" target="_blank">Children &amp; Young People Now</a>, July 2014</li>
			</ul>
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?>
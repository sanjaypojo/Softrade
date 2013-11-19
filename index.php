<?php get_header(); ?>

	<div id="title-wrapper">
		<h1><a href="<?php echo home_url(); ?>">Softrade</a></h1>
		<h3>25 years of Code</h3>
	</div>

	<nav id="main-nav">
		<a href="<?php echo home_url(); ?>">Home</a>
		<a href="<?php echo home_url(); ?>/portfolio/">Portfolio</a>
		<a href="<?php echo home_url(); ?>/contact-us/">Contact Us</a>
	</nav>

	<div id="main-description" class="page-section">
		<p id="main-description-graphic">
			25
		</p>
		<p id="main-description-text">
			
		</p>
	</div>

	<div id="mantras" class="page-section">
		
		<div class="a-mantra">
			<h4>Bulletproof systems</h4>
			<p>
				It just works. We're not kidding!
			</p>
		</div>

		<div class="a-mantra">
			<h4>Perfect, snug fit</h4>
			<p>
				No ready-made stuff. We know the importance of writing our code from scratch for each of our customers.
			</p>
		</div>
		
		<div class="a-mantra">
			<h4>Small is big</h4>
			<p>
				We believe in churning out tailored masterpieces rather than make big bucks on volumes that help no one.
			</p>
		</div>

		<div class="a-mantra">
			<h4>Quality quality quality</h4>
			<p>
				Our clients have stood by us for decades now and that's because we believe in quality.
			</p>
		</div>

		<div class="a-mantra">
			<h4>Always on time</h4>
			<p>
				We've been defying the industry standard for 25 years.
			</p>
		</div>

	</div>


	<div id="clients" class="page-section">
		<h4>Our Clients</h4>
		<div id="clientLogos">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/clientLogos/DB.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/clientLogos/SCB.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/clientLogos/Total.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/clientLogos/SKS.jpg">
		</div>
	</div>
	
<?php get_footer(); ?>
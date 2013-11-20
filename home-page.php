<?php
/*
Template Name: Home Page
*/
?>

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
			<?php the_field("main_description"); ?>
		</p>
	</div>

	<div id="mantras" class="page-section">
		<?php
		$args = array( 'post_type' => 'feature', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ($loop->have_posts() ) : $loop->the_post(); ?>
			<div class="a-mantra">	
				<h4><?php the_title(); ?></h4>
				<p><?php the_field('brief_description');?></p>
			</div>
		<?php endwhile; ?>
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
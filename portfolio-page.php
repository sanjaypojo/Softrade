<?php
/*
Template Name: Portfolio Page
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

	<div id = "projects" class="page-section">
	<?php $post_objects = get_field('projects'); ?>
	<?php if( $post_objects ): ?>
	    <?php foreach( $post_objects as $post_object): ?>
	    	<?php $client_data = get_field('client', $post_object->ID); ?>
	    	<div class="project-container">
		        <a href="<?php the_permalink($post_object->ID); ?>">
		        	<img src="<?php echo get_field('client_logo',$client_data->ID); ?>" class="client-logo">
		        	<h4><?php echo $post_object->post_title; ?></h4>
		        	<h5>Designed for <?php echo $client_data->post_title; ?></h5>
		        	<p><?php the_field('salient_features', $post_object->ID); ?></p>
		        </a>
		    </div>
	    <?php endforeach; ?>
	<?php endif; ?>
	</div>

<?php get_footer(); ?>
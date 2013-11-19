<?php
/*
Template Name: Contact Us Page
*/
?>

<?php get_header(); ?>
	
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript">
	(function($) { 

	// This function will render a Google Map onto the selected jQuery element	 
	function render_map( $el ) {
		// var
		var $markers = $el.find('.marker');
		// vars
		var args = {
			zoom		: 14,
			center		: new google.maps.LatLng(0, 0),
			mapTypeId	: google.maps.MapTypeId.ROADMAP
		};
		// create map	        	
		var map = new google.maps.Map( $el[0], args);
		// add a markers reference
		map.markers = [];
		// add markers
		$markers.each(function(){
	    	add_marker( $(this), map );
		});
		// center map
		center_map( map );
	}
	 
	// This function will add a marker to the selected Google Map
	function add_marker( $marker, map ) {
		// var
		var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
		// create marker
		var marker = new google.maps.Marker({
			position	: latlng,
			map			: map
		});
		// add to array
		map.markers.push( marker );
		// if marker contains HTML, add it to an infoWindow
		if( $marker.html() )
		{
			// create info window
			var infowindow = new google.maps.InfoWindow({
				content		: $marker.html()
			});
			// show info window when marker is clicked
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open( map, marker );
			});
		}
	}
	 
	// This function will center the map, showing all markers attached to this map
	function center_map(map) {
		// vars
		var bounds = new google.maps.LatLngBounds();
		var opt = {
			minZoom: 8,
			maxZoom: 18,
			disableDefaultUI: true,
			zoomControl: true,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL,
				position: google.maps.ControlPosition.RIGHT_TOP
			}
		};
		// loop through all markers and create bounds
		$.each( map.markers, function( i, marker ){
			var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
			bounds.extend( latlng );
		});
		// only 1 marker?
		if( map.markers.length == 1 )
		{
			// set center of map
		    map.setCenter( bounds.getCenter() );
		    map.setZoom( 14 );
		    map.setOptions(opt);
		}
		else
		{
			// fit to bounds
			map.fitBounds( bounds );
		}
	}
	 
	// This function will render each map when the document is ready (page has loaded)	 
	$(document).ready(function(){
		$('.map-canvas').each(function(){
			render_map( $(this) );
		});
	});
	 
	})(jQuery);
	</script>

	<div id="title-wrapper">
		<h1><a href="<?php echo home_url(); ?>">Softrade</a></h1>
		<h3>25 years of Code</h3>
	</div>

	<nav id="main-nav">
		<a href="<?php echo home_url(); ?>">Home</a>
		<a href="<?php echo home_url(); ?>/portfolio/">Portfolio</a>
		<a href="<?php echo home_url(); ?>/contact-us/">Contact Us</a>
	</nav>

	<div id="contact-us" class="page-section">
		<p>
			Call Us: <?php the_field("phone_number") ?>
		</p>
		<p>
			Email Us: <?php the_field("email_address") ?>
		</p>
	</div>

	<div id="main-address" class="page-section">
		<p>
			<?php the_field("address") ?>
		</p>
		<?php
		$location = get_field('address_map');
		if(!empty($location)):
		?>
			<div class="map-canvas">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
		<?php endif; ?>
	</div>
	
<?php get_footer(); ?>
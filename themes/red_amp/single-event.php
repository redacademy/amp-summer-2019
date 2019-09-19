<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 * Template Name: Single-Event
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="events-title">
		 <h1>Events</h1>
		 </div>
		 <div class="events-description">
	  	<?php echo CFS()->get('option_event_description', 138); ?>
		</div>	

		<?php while ( have_posts() ) : the_post(); ?>

        <div class="event-title">
		<?php esc_html(the_title( '<h1 class="entry-title">', '</h1>' )); ?>
		</div>

        <div class ="single-event-wrap">
		<div class="event-thumbnail">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php esc_html(the_post_thumbnail( 'large' )); ?>
		<?php endif; ?>
		</div>
		<?php endwhile; // End of the loop. ?>


		<?php while ( have_posts() ) {

			the_post(); ?>
			<div class ="event-details">
			<div class="events-description-details">
			<p>About the Event </p>
			<?php esc_html(the_content()); ?>
		
		     </div>


		<?php  
		   
			
			
		    $event_title = get_the_title(); // or you can use a CFS field
			$event_description = CFS()->get('event_description');
			$event_website = get_permalink();
			$event_location = CFS()->get('event_location');
			$event_date = date( 'Ymd', strtotime( CFS()->get('event_date') ) );
			$event_offset = date( 'Ymd', strtotime( '+24 hours', strtotime($event_date) ) );
			$event_button = CFS()->get('event_register_button');
			$event_map_location =CFS()->get('event_map_location');
			$event_date_1 = date( 'jS F Y' ,strtotime(CFS()-> get('event_date')));
			
			echo '<div class="event-location-time-details">';
			echo '<div class="event-location">';
			echo '<p class="location">';
			echo 'Location';
			echo '</p>';
			
			echo $event_location;
			echo '<br>';
			echo '</div>';

			echo '<div class = "event-date-time">';
			echo 'Date and Time';
			echo '<br>';
			echo $event_date_1;
			echo '<br>';
			echo CFS()->get('event_start_time'); 
			echo '-';
			echo CFS()->get('event_end_time');
			echo 'PDT'; 
			echo '<br>';
			echo '</div>';

			echo '</div>';

			
			
			
			
			
			echo '<br>';
			$esc_location = explode("<br />", $event_location);
			$comma_separated = implode(", ", $esc_location);

			echo "<a target='_blank' href='https://www.google.com/calendar/render?
			action=TEMPLATE&
			text={$event_title}&
			dates={$event_date}/{$event_offset}&
			location={$comma_separated}&
			sprop=name:{$event_title}&
			sprop=website:{$event_website}&
			details={$event_description}&
			sf=true&
			output=xml'/>add to calendar</a>";
			
		}
		?>
		
		<br>
		<a target='_blank' href="<?php echo CFS()->get('event_map_location')['url'];?>">View map</a>

		<br>
		<a target='_blank' href="<?= $event_button['url'] ?>">
		<button type="button" class="button-book">Register</button>
		</a>
		</main><!-- #main -->
		</div>
		</div>
	</div><!-- #primary -->


<?php get_footer(); ?>

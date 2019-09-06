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
	  <?php echo CFS()->get('option_event_description', 134); ?>
</div>

		<?php while ( have_posts() ) : the_post(); ?>

		<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); 

		?>

		<?php endwhile; // End of the loop. ?>


		<?php while ( have_posts() ) {

			the_post(); ?>
			<div class="events-description">
			<?php the_content(); ?>
		
		</div>


		<?php  
			echo CFS()->get('event_start_time'); // we can try to add this as well
			echo '<br>';
			echo CFS()->get('event_end_time'); // we can try to add this as well
			echo '<br>';
			
			$event_title = get_the_title(); // or you can use a CFS field
			$event_description = CFS()->get('event_description');
			$event_website = get_permalink();
			$event_location = CFS()->get('event_location');
			$event_date = date( 'Ymd', strtotime( CFS()->get('event_date') ) );
			$event_offset = date( 'Ymd', strtotime( '+24 hours', strtotime($event_date) ) );
			$event_button = CFS()->get('event_register_button');

			echo "<a href='https://www.google.com/calendar/render?
			action=TEMPLATE&
			text={$event_title}&
			dates={$event_date}/{$event_offset}&
			location={$event_location}&
			sprop=name:{$event_title}&
			sprop=website:{$event_website}&
			details={$event_description}&
			sf=true&
			output=xml'/>add to calendar</a>";
			
		}
		?>  

		
		<a href="<?= $event_button['url'] ?>">
		<button type="button" class="button-type"><?php $event_button['text'] ?></button>
		</a>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 * Template Name: Single-Event
 * Page Template: Single-Event
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="events-title">
	  <h1>Events</h1>
</div>

    <div class="events-description">
	<p> Our community events are open to members and non-members. Come join us for special events to learn more about environmental and social causes. This is a great way to get involved with organizations that are making an impact in the local community.  Below is a list of our upcoming events that you are welcome to join!</p>
</div>


		<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php while ( have_posts() ) {

			the_post();
			
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

		<?php the_excerpt(); ?>
		<a href="<?= esc_url( get_permalink() );?>">
		<button type="button" class="button-type">Register</button>
		</a>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

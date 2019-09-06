<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
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

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		<?php the_excerpt(); ?>
		<a href="<?= esc_url( get_permalink() );?>">
		<button type="button" class="button-type">Register</button>
		</a>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

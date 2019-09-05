<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	   
		<div class="events-title">
	<?php post_type_archive_title('<h1>','</h1>');?>
</div>

    <div class="events-description">
	<p> Our community events are open to members and non-members. Come join us for special events to learn more about environmental and social causes. This is a great way to get involved with organizations that are making an impact in the local community.  Below is a list of our upcoming events that you are welcome to join!</p>
</div>
	<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				?>

             

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				   
				   echo date( 'jS F Y' ,strtotime(CFS()-> get('event_date')));
					get_template_part( 'template-parts/content' );
					
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

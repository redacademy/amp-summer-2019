<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
             <section class="container" >
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<div class="front-page-workspace-button" style="
				text-align: center;">
				<button class="button-book" onclick="window.location.href ='<?php echo esc_url(get_home_url()); ?>/';">
       			 Done
				  </button>
				</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<?php get_footer(); ?>

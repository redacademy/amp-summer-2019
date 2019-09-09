<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
				<div class="page-title">
				<?php
					post_type_archive_title('<h1>','</h1>');
				?>
				</div>	
				<?php	the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>

			
			<div class="workspace-post-content">
			<?php while ( have_posts() ) : the_post(); ?>

					<div class="workspace-thumbnail-wrapper">	
						<a href="<?php echo get_the_permalink(); ?>">
							<?php the_post_thumbnail(); ?> 
							
							<h2>
							<?php the_title(); ?>
							</h2>
						</a>
					</div> <!-- #workspace-thumbnail-wrapper -->
			<?php endwhile; ?>
			</div> <!-- #workspace-post-content -->
			

			<div class="primary-cta-block workspace-cta">
			<a class="button-book" href="#">Book a Tour</a>
			</div>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

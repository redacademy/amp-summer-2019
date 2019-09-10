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

			
			<div class="front-page-workspace"> 
			<?php while ( have_posts() ) : the_post(); ?>

				<a class="front-page-each-workspace" href="<?php echo get_the_permalink(); ?>">
					<div>
						<div class="front-page-workspace-thumbnail"><?php the_post_thumbnail(); ?></div>
						<div class="front-page-workspace-title">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</a>
					
			<?php endwhile; 
			else : ?> <p>Please add a workspace</p>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
			</div> <!-- #workspace-post-content -->
			

			<div class="primary-cta-block"> 
			<button class="button-book" href="#">Book a Tour</button>
			</div>

		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

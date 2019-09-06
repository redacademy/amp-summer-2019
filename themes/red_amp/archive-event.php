<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	   
	
    
	

	<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<div class="events-title">
				<?php post_type_archive_title('<h1>','</h1>');?>
			</div>

			<div class="events-description">
			<?php
			echo CFS()->get('option_event_description', 134); // TODO change id to match options page on staging site
			?>
            </div>
			
            </header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
			<?php echo	"<a href=".esc_url( get_permalink()). ">"; ?>
				<?php
				   
				//    echo CFS()-> get('event_date', 127);
				   $event_date = date( 'jS F Y' ,strtotime(CFS()-> get('event_date')));
				//    var_dump( $event_date );
				//    if(!empty($event_date)){
					echo $event_date;
				//    }
					get_template_part( 'template-parts/content' );
					
				?>
				<?php echo '</a>'?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

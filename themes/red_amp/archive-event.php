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
            <div class ="events-wrapper">
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

			
           
			<section class="custom-loop">
				<?php
					$list_events = array( 
						'post_type' => 'event',
						'orderby' => array(
							'date' => 'ASC',
						),
						'posts_per_page' => -1,
					);
					$events = new WP_Query( $list_events );
				    
				?>
				
				<!-- Start loop for events -->
				<?php if ( $events->have_posts() ) : ?>
					<div class="loop-type-events">		
						<?php while ( $events->have_posts() ) : $events->the_post(); ?>

							<div class="loop-item-container">
								<a href="<?= esc_url(get_permalink()); ?>">
									<div class="event-image"> 
                                    	<img src="<?php echo get_the_post_thumbnail_url();?>">
									</div>
								
								<div class="event-information">
									<p class="event-name">
										<?php the_title();?>
									</p>

									<p class="event-date">
										<?php	$event_date = date( 'jS F Y' ,strtotime(CFS()-> get('event_date')));
				
				                    	 echo $event_date; ?>
									</p>
									
									<p class="event-content">	
										<?php the_content();?>
                                	</p>      
								</div>
								</a>
							</div>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				<!-- End loop for events -->

				<?php else : ?>
					<h2>Nothing found!</h2>
				<?php endif; ?>

			</section>
		
















		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>

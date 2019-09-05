<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		
		<div class="workspace-content">
			<?php 
			$fields = CFS()->get( 'workspace_area' );
			foreach ( $fields as $field ) : 
				$images =  $field['workspace_images' ];
				foreach ( $images as $image ) : ?>
				<img src="<?php echo $image['workspace_image']; ?>" height="310" width="460">	 <?php
				endforeach;	
				?>
				<p> <?php echo $field['workspace_title']; ?> </p>
				<p> <?php echo $field['workspace_description'];  ?> </p>


				<div>
				<p>membership cost:</p></p>$<?php echo $field['workspace_cost'];  ?>/Month</p>
				</div>
				<?php 	



			endforeach;
			?>
		</div>
			

			 

			

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

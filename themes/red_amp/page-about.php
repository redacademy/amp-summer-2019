<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area about-content">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<div class="our-hq">
		<div>
			<h2>
				Our Headquarters
			</h2>
		</div>
		<div class="hq-description">
			<p>
				The old BC Electric Building. Our name, The Amp, is inspired 
	</div>
</div> <!-- end of our-hq -->

	<div class="about-page-amp-members">
    	<div>
        	<h2>
             	Amp Members
        	</h2>
    	</div>
    	<div>
       		 <p>
           		 Meet the AMP Members... share the space with like minded people and organizations...focus on positive and social change...
        	</p>
    	</div>
    <div class="about-page-amp-members-logos">
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo01.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo02.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo03.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo04.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo05.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo06.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo07.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo08.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo09.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo10.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo11.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/Member_Logo12.png' ?>" alt="">
        </div>
    </div>

		<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
	</div><!-- #primary -->

	<div class="about-page-workspace-button bottom-book-button-about-page" style="text-align: center;">
    	<button class="button-book"> Book a Tour</button>
	</div>
<?php get_footer(); ?>

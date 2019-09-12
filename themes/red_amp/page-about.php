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

	<div class="team-section">
		<div class="team-title">
			<h2>
				Meet the Team
			<h2>
		</div> <!-- h2 div -->

		<div class="the-team">
			<div class="amp-employee">
				<img src="<?php echo get_template_directory_uri();?>/images/TeresaMayo.png"/>
					<div class="individual">
						<h3>Teresa Mayo</h3>
							<p>Coworking Community Manager</p>
					</div> <!-- end of Teresa info -->
			</div> <!-- enf of amp-employee -->

		<div class="amp-employee">
			<img src="<?php echo get_template_directory_uri();?>/images/ChuckRumsey.jpg"/>
				<div class="individual">
					<h3>Chuck Rumsey</h3>
						<p>President and CEO - ECOTRUST</p>
				</div> <!-- end of Teresa info -->
		</div> <!-- enf of amp-employee -->

		<div class="amp-employee">
			<img src="<?php echo get_template_directory_uri();?>/images/YumiKosaka.png"/>
				<div class="individual">
					<h3>Yumi Kosaka</h3>
						<p>Accountant</p>
				</div> <!-- end of Teresa info -->
			</div> <!-- enf of amp-employee -->
		</div> <!-- end of the-team -->
		
	</div> <!-- end of team section -->

	<div class="headquarters">
		<div class="hq-description">
			<h2>
				Our Headquarters
			</h2>
			<p>
				The old BC Electric Building. Our name, The Amp, is inspired by our location in the old BC Electric Building. An Ampere is a unit of electric current named after a French mathematician. 'Ampeer' is the name we give to the many teams and individuals who make The AMP the home for work in the heart of Vancouver.
			</p>
		</div> <!-- hq-description -->
	
		<div class="amp-building">
			<img src="<?php echo get_template_directory_uri();?>/images/Building1.jpg" alt="building"/>
		</div> <!-- amp-building -->
	</div> <!-- end of hq-div -->

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

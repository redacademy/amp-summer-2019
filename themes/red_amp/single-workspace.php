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
					$index = 0;
					foreach ( $fields as $field ) :  
					?>
					<div class="workspace-wrapper">
						
						<div class="workspace-details workspace-desktop-hidden">
							<h1> <?php echo esc_html($field['workspace_title']); ?></h1>			
						</div> <!-- End of workspace-details mobile hidden -->	

						<div id="workspace-carousel-<?php echo $index;?>" class='row container-carousel'>	
							<?php $index++; ?>
							<?php
								$images =  $field['workspace_images' ];
								foreach ( $images as $image ) : ?>
								
							<div class="single-workspace-content carousel-cell">
							
									<a href="#" class="thumbnail" id="carousel-selector-">
										<img src="<?php echo $image['workspace_image']; ?>" width="460" alt="Image"/>
									</a>
								
							</div> <!-- End of single-workspace-content carousel-cell -->
								<?php
								endforeach;	
								?>

						</div> <!-- End of row container-carousel -->

						<div class="workspace-details">
							<h1 class="workspace-mobile-hidden"> <?php echo esc_html($field['workspace_title']); ?> </h1>
							<p> <?php echo esc_html($field['workspace_description']);  ?> </p>
							<p><?php echo esc_html($field['workspace_cost']);  ?></p>
						</div> <!-- End of workspace-details -->

					</div><!-- workspace-wrapper -->
				<?php 	
				endforeach;
				?>

			</div> <!-- End of workspace content -->
			
		
		

			
			
			
			<?php 
			$icons = CFS()->get( 'workspace_icons' );
			$icon_class = "workspace-icon-flex-three";
			$icons_class = "workspace-icons";  
			$icon_text_class = "workspace-icon-title";
			$numIcons = count($icons);
			if (($numIcons % 3 ) == 0)
			{ 
				
				$icon_class = "workspace-icon-flex-three";
				$icons_class = "workspace-icons";
				$icon_text_class = "workspace-icon-title";
				
				
			}
			else 
			{    $icon_class = "workspace-icon-flex-two";
				$icons_class = "workspace-icons-flex-two";
				$icon_text_class = "workspace-icon-title-flex-two";
			}	
			?>
			<div class="<?php echo $icon_text_class; ?>">
				<h1>Amenities Included</h1>	
			</div>
			<div class="<?php echo $icons_class; ?>">
			<?php
						
			foreach($icons as $icon):
				
				switch ($icon) {
					case 'High Speed Wifi':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/wifi.png'; ?>" alt="wifi" /> </div>
						<p> <?php  echo "High Speed Wifi";
					?> </p>	</div> <?php
					break;
					case '24/7 Access':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/clock.png'; ?>" alt="access" /> </div>
					<p> <?php  echo "24/7 Access";
					?> </p>	</div> <?php
						break;
					case 'Access 9am-5pm':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/clock.png'; ?>" alt="access" /> </div>
					<p> <?php  echo "Access 9am-5pm";
					?> </p>	</div> <?php
						break;
					case 'Kitchen and Loungue Area':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/sofa.png'; ?>" alt="kitchen" /> </div>
					<p> <?php  echo "Kitchen and Loungue Area";
					?> </p>	</div> <?php
						break;
					case 'Front Desk Reception':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/desk.png'; ?>" alt="front-desk" /> </div>
					<p> <?php  echo "Front Desk Reception";
					?> </p>	</div> <?php
						break;
					case 'Tea & Coffee':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/coffee.png'; ?>" alt="tea" /> </div>
					<p> <?php  echo "Tea & Coffee";
					?> </p>	</div> <?php
						break;	
					case 'Phone Booths':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/phone.png'; ?>" alt="phone" /> </div>
					<p> <?php  echo "Phone Booths";
					?> </p>	</div> <?php
						break;
					case 'Secure Bike locker':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/bike.png'; ?>" alt="bike" /> </div>
					<p> <?php  echo "Secure Bike locker";
					?> </p>	</div> <?php
					break;
					case 'Dog Friendly':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/dog.png'; ?>" alt="dog" /> </div>
					<p> <?php  echo "Dog Friendly";
					?> </p>	</div> <?php
					break;
					case 'Gym & Showers':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/gym.png'; ?>" alt="gym" /> </div>
					<p> <?php  echo "Gym & Showers";
					?> </p>	</div> <?php
					break;
					case 'Photocopier/Printer & Scanner':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/printer.png'; ?>" alt="photocopier" /> </div>
					<p> <?php  echo "Photocopier / Printer & Scanner";
					?> </p>	</div> <?php
					break;
					case 'Access to Booking Meeting/Event Rooms':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/calendar.png'; ?>" alt="meeting" /> </div>
					<p> <?php  echo "Access to Booking Meeting / Event Rooms";
					?> </p>	</div> <?php
					break;
					case 'Custom-built FSC Wooden Desks':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/desk.png'; ?>" alt="desks" /> </div>
					<p> <?php  echo "Custom-built FSC Wooden Desks";
					?> </p>	</div> <?php
					break;
					case 'Capacity up to 30 people':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/people.png'; ?>" alt="people" /> </div>
					<p> <?php  echo "Capacity up to 30 people";
					?> </p>	</div> <?php
					break;
					case 'Projector and Flip Chart':
					?> <div class="<?php echo $icon_class; ?> workspace-icon-content-holder"> <div class="workspace-icon-image-holder"> <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/projector.png'; ?>" alt="projectors" /> </div>
					<p> <?php  echo "Projector and Flip Chart";
					?> </p>	</div> <?php
					break;	
												
				}
				endforeach;
				?>
			<?php endwhile; ?> <!-- End of while loop -->

		</div> <!-- End of workspace icons -->

		<div class="workspace-icon-title">
			<p class="workspace-icon-text">Join our community of like-minded organizations!</p>
			<p class="workspace-icon-text-mobile">See More</p>
			<div class="front-page-button-arrow">
				<button class="button-arrow-amp-workspace button-arrow-amp-community"><i class="fas fa-chevron-down"></i></button>
			</div>
		</div>

		<div class="primary-cta-block">
			<a href="<?php echo esc_url(get_the_permalink(189)); ?>" class="button-book book-tour-popup" href="#">Book a Tour</a>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

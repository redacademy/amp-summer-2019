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
							<h1> <?php echo $field['workspace_title']; ?> </h1>
							<p> <?php echo $field['workspace_description'];  ?> </p>
							<p><?php echo $field['workspace_cost'];  ?></p>
						</div> <!-- End of workspace-details -->

					</div><!-- workspace-wrapper -->
				<?php 	
				endforeach;
				?>

			</div> <!-- End of workspace content -->
			
		
		

			
		
		<h1>Amenities Included</h1>	
		


		<div class="workspace-icons">
			<?php 
			$icons = CFS()->get( 'workspace_icons' );
			
			foreach($icons as $icon):
				
				switch ($icon) {
					case 'High Speed Wifi':
						?> <div> <img src="<?php echo get_template_directory_uri() . '/images/wifi.png'; ?>" alt="wifi" />
							<?php  echo "High Speed Wifi";
						?>	</div> <?php
						break;
					case '24/7 Access':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/clock.png'; ?>" alt="access" />
					<?php  echo "24/7 Access";
					?>	</div> <?php
						break;
					case 'Access 9am-5pm':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/clock.png'; ?>" alt="access" />
					<?php  echo "Access 9am-5pm";
					?>	</div> <?php
						break;
					case 'Kitchen and Loungue Area':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/sofa.png'; ?>" alt="kitchen" />
					<?php  echo "Kitchen and Loungue Area";
					?>	</div> <?php
						break;
					case 'Front Desk Reception':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/desk.png'; ?>" alt="front-desk" />
					<?php  echo "Front Desk Reception";
					?>	</div> <?php
						break;
					case 'Tea & Coffee':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/coffee.png'; ?>" alt="tea" />
					<?php  echo "Tea & Coffee";
					?>	</div> <?php
						break;	
					case 'Phone Booths':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/phone.png'; ?>" alt="phone" />
					<?php  echo "Phone Booths";
					?>	</div> <?php
						break;
					case 'Secure Bike locker':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/bike.png'; ?>" alt="bike" />
					<?php  echo "Secure Bike locker";
					?>	</div> <?php
					break;
					case 'Dog Friendly':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/dog.png'; ?>" alt="dog" />
					<?php  echo "Dog Friendly";
					?>	</div> <?php
					break;
					case 'Gym & Showers':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/gym.png'; ?>" alt="gym" />
					<?php  echo "Gym & Showers";
					?>	</div> <?php
					break;
					case 'Photocopier/Printer & Scanner':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/printer.png'; ?>" alt="photocopier" />
					<?php  echo "Photocopier/Printer & Scanner";
					?>	</div> <?php
					break;
					case 'Access to Booking Meeting/Event Rooms':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/calendar.png'; ?>" alt="meeting" />
					<?php  echo "Access to Booking Meeting/Event Rooms";
					?>	</div> <?php
					break;
					case 'Custom-built FSC Wooden Desks':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/desk.png'; ?>" alt="desks" />
					<?php  echo "Custom-built FSC Wooden Desks";
					?>	</div> <?php
					break;
					case 'Capacity up to 30 people':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/people.png'; ?>" alt="people" />
					<?php  echo "Capacity up to 30 people";
					?>	</div> <?php
					break;
					case 'Projector and Flip Chart':
					?> <div> <img src="<?php echo get_template_directory_uri() . '/images/projector.png'; ?>" alt="projectors" />
					<?php  echo "Capacity up to 30 people";
					?>	</div> <?php
					break;	
												
				}
				endforeach;
				?>
			<?php endwhile; ?> <!-- End of while loop -->

		</div> <!-- End of workspace icons -->

		<div class="primary-cta-block">
			<button class="button-book" href="#">Book a Tour</button>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

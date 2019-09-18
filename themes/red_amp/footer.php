<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div> <!-- #content -->


<footer id="colophon" class="site-footer container" role="contentinfo">

	<!-- wrap-whole-footer-except .site-rights -->
	<div class="footer-content">

		<!-- start of CONTACT div -->
		<div class="contact">
			<div class="site-footer-name-address">
				<p><span class="make-strong">The AMP</span><br>
					425 Carrall Street<br>Vancouver,BC<br>V6B 6E3</p>
			</div>


			<div class="contact-info">
				<a href="tel:6043434590">
					<div class="contact-info-img-container img-phone"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Phone footer.svg" alt="phone-logo" />
						<p>604-343-4590</p>
					</div>
				</a>
				<a href="mailto:info@theamp.space">
					<div class="contact-info-img-container img-email"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Icon email.svg" alt="email-logo" />
						<p>info@theamp.space</p>
					</div>
				</a>

				<div class="social-icon-mobile hidden-mobile">
					<span><img class="social-icon-mobile-image" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Facebook.svg" alt="logo" /></span>
					<span><img class="social-icon-mobile-image" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/LinkedIn.svg" alt="logo" /></span>
					<span><img class="social-icon-mobile-image" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/twitter.svg" alt="logo" /></span>
				</div>
			</div>
		</div>
		<!-- end of CONTACT div -->

		<!-- .footer-newsletter-form -->
		<div class="footer-newsletter-form">
			<p class="hidden-mobile">Sign up for our Newsletter</p>
			<p class="show-mobile">Sign up for our newsletter to learn more about our community!</p>

			<!-- <form action="/action_page.php">

				<input name="firstname" type="email" id="email-address" placeholder="Enter E-mail">

				<input type="submit" value="OK">
			</form> -->
			<!-- BEGIN GRAVITY FORM -->
			<?php gravity_form( 2, false, false, false, '', false ); ?>
			<!-- END GRAVITY FORM -->
		</div>
		<!-- end of footer-newsletter-form -->

		<!-- .social-icon Desktop -->
		<div class="social-icon show-mobile">

			<div class="social-icon-images show-mobile">
				<span>
					<a href="https://www.facebook.com/AmpVancouver" target="_blank">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Facebook.svg" alt="logo" />
					</a>
				</span>
				<span>
					<a href="https://www.linkedin.com/company/the-amp-vancouver/" target="_blank">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/LinkedIn.svg" alt="logo" />
					</a>
				</span>
				<span>
					<a href="https://twitter.com/AmpVancouver" target="_blank">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/twitter.svg" alt="logo" />
					</a>
				</span>
			</div>

			<div class="site-rights show-mobile">
				<p>© All rights reserved - The Amp Vancouver 2019</p>
			</div>
		</div>
		<!-- end of social-icon Desktop-->

		<!-- .site-rights Mobile -->
		<div class="site-rights-mobile hidden-mobile">
			<p>© All rights reserved - The Amp Vancouver 2019</p>
		</div>
		
		<!-- end of social-icon Mobile -->

	</div>
</footer><!-- #colophon -->


<!-- Adding the form of book a tour in the footer -->
<?php
echo "<div class='book-tour-form-modal-outer-wrapper'>";
echo "<div class='book-tour-form-modal'>";
// TODO try adding a close button
echo "<button class='close-book-tour'>X</button>";
gravity_form(1, false, false, false, '', true);
echo "</div>";
echo "</div>";
?>
<!-- End of the form of Book a tour -->

<?php wp_footer(); ?>

</body>

</html>
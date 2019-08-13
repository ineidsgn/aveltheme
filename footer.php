<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

        </div><!-- .site-content -->


		<a href="<?php echo site_url(); ?>/contacts">
			<section class="contact-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 text-center">
							<h2><?php _e( 'Contatti', 'aveltheme' ); ?></h2>
						</div>
					</div>
				</div>
			</section>
		</a>


        <footer id="colophon" class="site-footer" role="contentinfo">

	        <div class="footer-main">
		        <div class="container">
			        <div class="row">
				        <div class="col-md-3">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_footer.png" class="img-fluid"/>
					        <div class="top-30"></div>
					        <div class="top-20"><?php _e( '© Copyright 2018 Avel Lenttan', 'aveltheme' ); ?></div>
				        </div>
				        <div class="col-md-4">
							<div class="top-20"></div>
					        <div class="top-20">
						        <div class="row">
							        <div class="col-6">
								        <?php
								        if( has_nav_menu('footer_1') ) {
									        wp_nav_menu(array(
										        'theme_location' => 'footer_1',
										        'container' => false
									        ));
								        }
								        ?>
							        </div>
							        <div class="col-6">
								        <?php
								        if(has_nav_menu('footer_2')) {
									        wp_nav_menu(array(
										        'theme_location' => 'footer_2',
										        'container' => false,
									        ));
								        }
								        ?>
							        </div>
						        </div>
					        </div>
				        </div>
				        <div class="col-md-2">

				        </div>
				        <div class="col-md-3">
					        <div class="top-20"></div>
					        <div class="top-20 social-footer-menu">
						        <?php
						        if(has_nav_menu('social')) {
							        wp_nav_menu(array(
								        'theme_location' => 'social',
								        'container' => false,
							        ));
						        }
						        ?>
					        </div>
				        </div>
			        </div>
		        </div>
	        </div>

        </footer><!-- .site-footer -->

    </div><!-- .site -->

    <?php wp_footer(); ?>

	<figure class="popup-window registration-modal" style="display: none;">
		<div class="modal-body">
			<div class="close-modal">Close</div>
			<h2><?php _e( 'Registration Form','aveltheme' ); ?></h2>
			<div class="top-1r"></div>
			<div class="row">
				<div class="col-lg-8">
					<div><?php _e( 'Insert your personal data to create the account.','aveltheme' ); ?></div>
					<div class="top-3r"></div>
					<div class="row no-gutters">
						<div class="col-md-4">
							<p>
								<input type="text" name="email" class="form-control" placeholder="Email *" />
							</p>
						</div>
						<div class="col-md-4">
							<p>
								<input type="password" name="password" class="form-control" placeholder="Password" />
							</p>
						</div>
					</div>
					<div class="top-05r hidden-mobile"></div>
					<div class="row no-gutters">
						<div class="col-md-4">
							<p>
								<input type="text" name="username" class="form-control" placeholder="Username *" />
							</p>
						</div>
						<div class="col-md-4">
							<p>
								<input type="text" name="name" class="form-control" placeholder="Name" />
							</p>
						</div>
						<div class="col-md-4">
							<p>
								<input type="text" name="surname" class="form-control" placeholder="Surname" />
							</p>
						</div>
					</div>
					<div class="top-05r hidden-mobile"></div>
					<div class="row no-gutters">
						<div class="col-md-4">
							<p>
								<input type="text" name="country" class="form-control" placeholder="Country" />
							</p>
						</div>
					</div>
					<div class="top-3r">
						<p><i>* This field is mandatory.</i></p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-1"></div>
						<div class="col-lg-11">
							<div>
								<p><?php _e( 'I read and understand the privacy policy and I am more than 16 years old.','aveltheme' ); ?></p>
							</div>
							<div class="top-2r">
							</div>
							<div class="top-2r">
								<button class="btn btn-submit"><?php _e( 'Submit','aveltheme' ); ?></button>
							</div>
						</div>
					</div>

				</div>
			</div>


		</div>

	</figure>

</body>
</html>

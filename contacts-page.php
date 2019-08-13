<?php
/* Template Name: Contacts page */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <figure class="contacts-page">

	            <?php

	            // check if there is Banner group
	            if( have_rows('contact_banner') ):

		            while ( have_rows('contact_banner') ) : the_row();

			            if( get_row_layout() == 'banner_fields' ):

				            ?>

				            <section class="contact-banner text-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/home/banner_bg.jpg');">

					            <img class="banner-logo img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/avellenttan/banner_logo.png"/>

				            </section>

				            <?php

			            endif;

		            endwhile;

	            else :

		            // no layouts found
		            echo "No data found.";

	            endif;

	            // check if there is Section 1 group
	            if( have_rows('contact_section_1') ):

		            while ( have_rows('contact_section_1') ) : the_row();

			            if( get_row_layout() == 'section_1_fields' ):

				            ?>

				            <section class="section-1">

					            <div class="container">

						            <div class="row">
							            <div class="col-12 text-center">
								            <div class="top-50"></div>
								            <h1><?php the_sub_field('title'); ?></h1>
								            <div class="top-40"></div>
								            <div><?php the_sub_field('text'); ?></div>
							            </div>
						            </div>

					            </div>

				            </section>

				            <?php

			            endif;

		            endwhile;

	            else :

		            // no layouts found
		            echo "No data found.";

	            endif;

	            // check if there is Section 2 group
	            if ( have_rows('section_contact_form') ):

		            while ( have_rows('section_contact_form') ) : the_row();

			            if ( get_row_layout() == 'cf_section_fields' ):

				            ?>

				            <section class="cf-section">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-md-6 left-image-wrap hidden-mobile">
								            <img class="left-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact/avel_contact.png"/>
							            </div>
							            <div class="col-md-5">
								            <div class="top-50 hidden-mobile"></div>
								            <div class="top-50"></div>
								            <div class="top-20 hidden-mobile"></div>
								            <h3><?php the_sub_field('title'); ?></h3>
								            <div class="top-50"></div>
								            <?php
								            $cf_short = get_sub_field('cf_shortcode');
								            $cf_short = "[contact-form-7 id='".$cf_short."' title='']";
								            echo do_shortcode( $cf_short );
								            ?>
								            <div class="top-50"></div>
								            <div class="top-50"></div>
								            <div class="top-50"></div>
							            </div>
						            </div>

					            </div>

				            </section>

				            <?php

			            endif;

		            endwhile;

	            else :

		            // no layouts found
		            echo "No data found.";

	            endif;


				get_template_part('visualizer');

	            ?>

            </figure>
		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>

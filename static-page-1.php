<?php
/* Template Name: Avel Lenttan page */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <figure class="avel-page">

	            <?php

	            // check if there is Banner group
	            if( have_rows('avel_banner') ):

		            while ( have_rows('avel_banner') ) : the_row();

			            if( get_row_layout() == 'banner_fields' ):

				            ?>

				            <section class="avel-banner text-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/home/banner_bg.jpg');">

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
	            if( have_rows('avel_section_1') ):

		            while ( have_rows('avel_section_1') ) : the_row();

			            if( get_row_layout() == 'section_1_fields' ):

				            ?>

				            <section class="section-1">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-xl-3 left-bg hidden-mobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/avellenttan/section_1_left_bg.jpg')">
							            </div>
							            <div class="col-sm-8 col-lg-6 col-xl-4">
								            <h1><?php the_sub_field('section_1_title'); ?></h1>
								            <div class="serif-text small-text"><?php the_sub_field('section_1_text'); ?></div>
								            <div class="top-20"></div>
								            <div class="top-50">
									            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/avellenttan/section_1_logo.png" />
								            </div>
								            <div class="top-50"></div>
								            <div class="top-50"></div>
							            </div>
							            <div class="col-lg-6 col-xl-5 right-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/avellenttan/avel.jpg')"></div>

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
	            if( have_rows('avel_section_2') ):

		            while ( have_rows('avel_section_2') ) : the_row();

			            if( get_row_layout() == 'section_2_fields' ):

				            ?>

				            <section class="section-2">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-md-5 left-bg hidden-mobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/avellenttan/section_2_left.jpg')"></div>
							            <div class="col-md-7">
								            <div class="row">
									            <div class="col-lg-1"></div>
									            <div class="col-lg-8">
										            <div class="pre-title"><?php the_sub_field('pre_title'); ?></div>
										            <div class="top-5p"></div>
										            <div class="top-5p hidden-mobile"></div>
										            <h3><?php the_sub_field('title'); ?></h3>
										            <div class="top-5p"></div>
										            <div class="top-5p hidden-mobile"></div>
										            <div class="serif-text small-text"><?php the_sub_field('text'); ?></div>
										            <div class="top-5p hidden-mobile"></div>
										            <div class="top-10p"></div>
									            </div>
								            </div>
								            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/avellenttan/section_2_right.jpg" />
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


	            // check if there is Section 3 group
	            if( have_rows('avel_section_3') ):

		            while ( have_rows('avel_section_3') ) : the_row();

			            if( get_row_layout() == 'section_3_fields' ):

				            ?>

				            <section class="section-3" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/avellenttan/section_3_right.jpg')">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-xl-2 left-bg hidden-mobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/avellenttan/section_3_left.jpg')"></div>
							            <div class="col-xl-1"></div>
							            <div class="col-md-6 col-xl-4">
								            <div class="top-10p"></div>
								            <div class="top-10p hidden-mobile"></div>
								            <div class="pre-title"><?php the_sub_field('pre_title'); ?></div>
								            <div class="top-5p"></div>
								            <h3><?php the_sub_field('title'); ?></h3>
								            <div class="top-20p"></div>
								            <div class="top-20p hidden-mobile"></div>
								            <div class="serif-text small-text"><?php the_sub_field('text'); ?></div>
								            <div class="top-20p"></div>
								            <div class="top-20p hidden-mobile"></div>
							            </div>
							            <div class="col-xl-5 col-md-3 right-bg"></div>
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


	            // check if there is Section 3 group
	            if( have_rows('avel_section_4') ):

		            while ( have_rows('avel_section_4') ) : the_row();

			            if( get_row_layout() == 'section_4_fields' ):

				            ?>

				            <section class="section-4">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-md-6">
								            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/avellenttan/secttion_4_left.png" />
							            </div>
							            <div class="col-md-6">
								            <div class="top-20p"></div>
								            <div class="pre-title"><?php the_sub_field('pre_title'); ?></div>
								            <div class="top-5p"></div>
								            <h3><?php the_sub_field('title'); ?></h3>
								            <div class="top-10p"></div>
								            <div class="row">
									            <div class="col-lg-9">
										            <div class="small-text serif-text"><?php the_sub_field('text'); ?></div>
									            </div>
								            </div>
								            <div class="top-10p"></div>
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

	            ?>

            </figure>
		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>

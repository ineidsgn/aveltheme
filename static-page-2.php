<?php
/* Template Name: Materials page */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <figure class="materials-page">

	            <?php

	            // check if there is Banner group
	            if( have_rows('materials_banner') ):

		            while ( have_rows('materials_banner') ) : the_row();

			            if( get_row_layout() == 'banner_fields' ):

				            ?>

				            <section class="materials-banner text-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/materials/banner.jpg');">


				            </section>

				            <?php

			            endif;

		            endwhile;

	            else :

		            // no layouts found
		            echo "No data found.";

	            endif;

	            // check if there is Section 2 group
	            if( have_rows('materials_section_2') ):

		            while ( have_rows('materials_section_2') ) : the_row();

			            if( get_row_layout() == 'section_2_fields' ):

				            ?>

				            <section class="materials-section">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-md-5 left-bg hidden-mobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/materials/section_2_left.jpg')"></div>
							            <div class="col-md-7">
								            <div class="row">
									            <div class="col-lg-1"></div>
									            <div class="col-lg-8">
													<h3><?php the_sub_field('title'); ?></h3>
										            <div class="top-10p"></div>
										            <div class="top-10p hidden-mobile"></div>
										            <div class="small-text"><?php the_sub_field('text'); ?></div>
										            <div class="top-20p"></div>
									            </div>
								            </div>
								            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/materials/section_2_right.jpg" />
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
	            if( have_rows('materials_section_3') ):

		            while ( have_rows('materials_section_3') ) : the_row();

			            if( get_row_layout() == 'section_3_fields' ):

				            ?>

				            <section class="materials-section">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-md-5 left-bg hidden-mobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/materials/section_3_left.jpg')"></div>
							            <div class="col-md-7">
								            <div class="row">
									            <div class="col-lg-1"></div>
									            <div class="col-lg-8">
										            <h3><?php the_sub_field('title'); ?></h3>
										            <div class="top-10p"></div>
										            <div class="top-5p hidden-mobile"></div>
										            <div class="top-10p hidden-mobile"></div>
										            <div class="small-text"><?php the_sub_field('text'); ?></div>
										            <div class="top-20p"></div>
									            </div>
								            </div>
								            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/materials/section_3_right.jpg" />
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
	            if( have_rows('materials_section_4') ):

		            while ( have_rows('materials_section_4') ) : the_row();

			            if( get_row_layout() == 'section_4_fields' ):

				            ?>

				            <section class="materials-section">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-md-5 left-bg hidden-mobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/materials/section_4_left.jpg')"></div>
							            <div class="col-md-7">
								            <div class="row">
									            <div class="col-lg-1"></div>
									            <div class="col-lg-8">
										            <h3><?php the_sub_field('title'); ?></h3>
										            <div class="top-5p hidden-mobile"></div>
										            <div class="top-10p"></div>
										            <div class="top-10p hidden-mobile"></div>
										            <div class="small-text"><?php the_sub_field('text'); ?></div>
										            <div class="top-10p"></div>
									            </div>
								            </div>
								            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/materials/section_4_right.jpg" />
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

<?php
/* Template Name: Material page */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <figure class="material-page">

	            <?php

	            if ( get_field('inverted_header')[0] == 'Yes' ) { $inv_header = "inverted"; } else { $inv_header = ""; }

	            $stone = get_field('stone');

	            // check if there is Banner group
	            if( have_rows('material_banner') ):

		            while ( have_rows('material_banner') ) : the_row();

			            if( get_row_layout() == 'banner_fields' ):

				            ?>

				            <section class="material-banner" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $stone; ?>/banner_bg.jpg?1');">

					            <div class="container-fluid">
						            <h1 class="<?php echo $inv_header; ?>"><?php the_sub_field('title'); ?></h1>
					            </div>

				            </section>

				            <?php

			            endif;

		            endwhile;

	            else :

		            // no layouts found
		            echo "No data found.";

	            endif;

	            // check if there is Section 1 group
	            if( have_rows('material_section_1') ):

		            while ( have_rows('material_section_1') ) : the_row();

			            if( get_row_layout() == 'section_1_fields' ):

				            ?>

				            <section class="section-1">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-sm-12 col-xl-5 left-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $stone; ?>/section_1_left.jpg')">
								            <div class="row">
									            <div class="col-md-5"></div>
									            <div class="col-md-7">
										            <div class="top-20p"></div>
										            <div class="top-5p"></div>
										            <div class="pre-title"><?php the_sub_field('pre_title'); ?></div>
										            <div class="top-5p"></div>
										            <h3><?php the_sub_field('title'); ?></h3>
										            <div class="small-text"><?php the_sub_field('text'); ?></div>
										            <div class="top-30p"></div>
									            </div>
								            </div>
							            </div>
							            <div class="col-md-4 col-xl-7 right-bg hidden-mobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $stone; ?>/section_1_right.jpg')"></div>
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
	            if( have_rows('material_section_2') ):

		            while ( have_rows('material_section_2') ) : the_row();

			            if( get_row_layout() == 'section_2_fields' ):

				            ?>

				            <section class="section-2" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $stone; ?>/section_2_bg.jpg')">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-lg-7 left-bg" style="background-image: url('<?php the_sub_field('image_2'); ?>')">
								            <div class="row">
									            <div class="col-xl-2"></div>
									            <div class="col-xl-9">
										            <div class="top-20p"></div>
										            <div class="pre-title"><?php the_sub_field('pre_title'); ?></div>
										            <div class="top-5p"></div>
										            <h3><?php the_sub_field('title'); ?></h3>
									            </div>
								            </div>
							            </div>
							            <div class="col-lg-5 right-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $stone; ?>/section_2_right.jpg')">
								            <div class="row">
									            <div class="col-md-5 col-lg-1 col-5"></div>
									            <div class="col-md-7 col-lg-11 col-7">
										            <div class="small-text"><?php the_sub_field('text'); ?></div>
										            <div class="top-10p"></div>
									            </div>
								            </div>
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
	            if( have_rows('material_section_3') ):

		            while ( have_rows('material_section_3') ) : the_row();

			            if( get_row_layout() == 'section_3_fields' ):

				            ?>

				            <section class="section-3" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $stone; ?>/section_3_left.jpg');">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-xl-7">
							            </div>
							            <div class="col-xl-5 right-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $stone; ?>/section_3_right.jpg');">
								            <div class="top-10p"></div>
								            <div class="top-5p"></div>
								            <div class="row">
									            <div class="col-lg-8">
										            <h3><?php the_sub_field('title'); ?></h3>
									            </div>
								            </div>
								            <div class="top-10p"></div>
								            <div class="row">
									            <div class="col-9">
										            <div class="small-text"><?php the_sub_field('text'); ?></div>
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

	            <section class="section-4 text-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $stone; ?>/section_4_bg.jpg');"></section>

	            <?php

	            get_template_part('visualizer');

	            ?>

            </figure>
		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>

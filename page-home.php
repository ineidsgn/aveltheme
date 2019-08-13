<?php
/* Template Name: Home page */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <figure class="home-page">

	            <?php

	            // check if there is Home Banner group
	            if( have_rows('home_banner') ):

		            while ( have_rows('home_banner') ) : the_row();

			            if( get_row_layout() == 'banner_fields' ):

				            ?>

				            <section class="main-banner" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/home/banner_bg.jpg');">

					            <img class="banner-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/banner_right.png"/>

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-sm-5 text-center">
								            <img class="img-fluid banner-left" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/banner_left.png"/>
							            </div>
							            <div class="col-sm-2"></div>
							            <div class="col-sm-5 text-center">
								            <img class="img-fluid banner-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/banner_logo.png"/>
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

	            // check if there is Section 1 group
	            if( have_rows('home_section_1') ):

		            while ( have_rows('home_section_1') ) : the_row();

			            if( get_row_layout() == 'section_1_fields' ):

				            ?>

				            <section class="section-1">

					            <div class="container">

						            <div class="row">
							            <div class="col-12 text-center">
								            <h1><?php the_sub_field('section_1_title'); ?></h1>
								            <p><?php the_sub_field('section_1_text'); ?></p>
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
	            if( have_rows('home_section_2') ):

		            while ( have_rows('home_section_2') ) : the_row();

			            if( get_row_layout() == 'section_2_fields' ):

				            ?>

				            <section class="section-2" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/home/section_1_bg.jpg');">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-12 text-center">
								            <h2><?php the_sub_field('title'); ?></h2>
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

	            // check if there is Section Style group
	            if( have_rows('home_style_section') ):

		            while ( have_rows('home_style_section') ) : the_row();

			            if( get_row_layout() == 'style_section_fields' ):

				            ?>

				            <section class="section-style" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/home/style_bg.png');">

					            <div class="container">

						            <div class="row">
							            <div class="col-md-6">
								            <h3><?php the_sub_field('text_left'); ?></h3>
							            </div>
							            <div class="col-md-6">
								            <div class="right-text"><?php the_sub_field('text'); ?></div>
								            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/style_logo.png"/>
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
	            if( have_rows('home_section_3') ):

		            while ( have_rows('home_section_3') ) : the_row();

			            if( get_row_layout() == 'section_3_fields' ):

				            ?>

				            <section class="section-3" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/home/section_3_bg.jpg');">

					            <div class="section-3-int">

						            <div class="container">

							            <div class="row">
								            <div class="col-12">
									            <div class="pre-title"><?php the_sub_field('pre_title'); ?></div>
								            </div>
								            <div class="col-12">
									            <h3><?php the_sub_field('title'); ?></h3>
								            </div>
							            </div>
							            <div class="row">
								            <div class="col-md-6">
									            <a href="<?php the_sub_field('link_url'); ?>" class="arrow-link"><?php the_sub_field('link_text'); ?></a>
								            </div>
								            <div class="col-md-6">
									            <div class="top-30 d-md-none d-lg-none d-xl-none"></div>
									            <?php the_sub_field('bottom_text'); ?>
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

	            // check if there is Section 4 group
	            if( have_rows('home_section_4') ):

		            while ( have_rows('home_section_4') ) : the_row();

			            if( get_row_layout() == 'section_4_fields' ):

				            ?>

				            <section class="section-4" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/home/section_4_bg.jpg');">

					            <div class="container">

						            <div class="row">
							            <div class="col-12">
								            <div class="pre-title"><?php the_sub_field('pre_title'); ?></div>
							            </div>
							            <div class="col-12">
								            <h3><?php the_sub_field('title'); ?></h3>
							            </div>
						            </div>
						            <div class="row">
							            <div class="col-md-6">
								            <div class="bottom-text"><?php the_sub_field('bottom_text'); ?></div>
								            <a href="<?php the_sub_field('link_url'); ?>" class="arrow-link"><?php the_sub_field('link_text'); ?></a>
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

<?php
/* Template Name: Mirror Collection Anniversary page */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <figure class="mirror-anniversary-page">

	            <?php

	            // check if there is Banner group
	            if( have_rows('mirror_ani_banner') ):

		            while ( have_rows('mirror_ani_banner') ) : the_row();

			            if( get_row_layout() == 'banner_fields' ):

				            ?>

				            <section class="mirror-banner text-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/mirrorani/banner.jpg');">

					            <h1 data-content="<?php the_sub_field('banner_title'); ?>"><?php the_sub_field('banner_title'); ?></h1>

				            </section>

				            <?php

			            endif;

		            endwhile;

	            else :

		            // no layouts found
		            echo "No data found.";

	            endif;

	            // check if there is Section 1 group
	            if( have_rows('mirror_ani_section_1') ):

		            while ( have_rows('mirror_ani_section_1') ) : the_row();

			            if( get_row_layout() == 'section_1_fields' ):

				            ?>

				            <section class="section-1">

					            <div class="container">

						            <div class="row">
							            <div class="col-12 text-center" >
								            <div class="pre-title"><?php the_sub_field('pre_title'); ?></div>
								            <div class="top-10"></div>
								            <h3><?php the_sub_field('title'); ?></h3>
								            <div class="top-5p"></div>
								            <div class="small-text"><?php the_sub_field('text'); ?></div>
								            <div class="top-5p"></div>
								            <div class="category-switch">
									            <div class="row">
										            <div class="col-lg-3"></div>
										            <div class="col-lg-6">
											            <div class="row">
												            <div class="col-4" ><a class="scroll-cat" data-cat="anelli" href="#">ANELLI</a></div>
												            <div class="col-4"><a class="scroll-cat" data-cat="orechhini" href="#">ORECHHINI</a></div>
												            <div class="col-4"><a class="scroll-cat" data-cat="collane" href="#">COLLANE</a></div>
											            </div>
										            </div>
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

	            // check if there is Section 2 group
	            if( have_rows('mirror_ani_section_2') ):

		            while ( have_rows('mirror_ani_section_2') ) : the_row();

			            if( get_row_layout() == 'section_2_fields' ):

				            ?>

				            <section class="mirror-section" id="anelli">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-md-5 left-bg hidden-mobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/mirrorani/section_2_left.jpg')"></div>
							            <div class="col-md-7">
								            <div class="row">
									            <div class="col-lg-1"></div>
									            <div class="col-lg-8">
													<h3><?php the_sub_field('title'); ?></h3>
										            <div class="top-20p"></div>
										            <div class="small-text"><?php the_sub_field('text'); ?></div>
										            <div class="top-10">
											            <a class="arrow-link" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a>
										            </div>
										            <div class="top-10p"></div>
									            </div>
								            </div>
								            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mirrorani/section_2_right.jpg" />
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
	            if( have_rows('mirror_ani_section_3') ):

		            while ( have_rows('mirror_ani_section_3') ) : the_row();

			            if( get_row_layout() == 'section_3_fields' ):

				            ?>

				            <section class="mirror-section" id="orechhini">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-md-5 left-bg hidden-mobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/mirrorani/section_3_left.jpg'); top: -75px;"></div>
							            <div class="col-md-7">
								            <div class="row">
									            <div class="col-lg-1"></div>
									            <div class="col-lg-8">
										            <h3><?php the_sub_field('title'); ?></h3>
										            <div class="top-20p"></div>
										            <div class="small-text"><?php the_sub_field('text'); ?></div>
										            <div class="top-10">
											            <a class="arrow-link" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a>
										            </div>
										            <div class="top-10p"></div>
									            </div>
								            </div>
								            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mirrorani/section_3_right.jpg" />
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
	            if( have_rows('mirror_ani_section_4') ):

		            while ( have_rows('mirror_ani_section_4') ) : the_row();

			            if( get_row_layout() == 'section_4_fields' ):

				            ?>

				            <section class="mirror-section" id="collane">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-md-5 left-bg hidden-mobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/mirrorani/section_4_left.jpg')"></div>
							            <div class="col-md-7">
								            <div class="row">
									            <div class="col-lg-1"></div>
									            <div class="col-lg-8">
										            <h3><?php the_sub_field('title'); ?></h3>
										            <div class="top-20p"></div>
										            <div class="small-text"><?php the_sub_field('text'); ?></div>
										            <div class="top-10">
											            <a class="arrow-link" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a>
										            </div>
										            <div class="top-10p"></div>
									            </div>
								            </div>
								            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mirrorani/section_4_right.jpg" />
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

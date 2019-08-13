<?php
/* Template Name: Visualizer page */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <figure class="visualizer-page">

	            <?php

	            // check if there is Section 1 group
	            if( have_rows('section_1') ):

		            while ( have_rows('section_1') ) : the_row();

			            if( get_row_layout() == 'section_1_fields' ):

				            ?>

				            <section class="section-1 text-center">

					            <div class="top-5p"></div>

					            <div class="pre-title"><?php the_sub_field('section_1_pre_title'); ?></div>

					            <div class="top-05r"></div>
					            <div class="top-2r"></div>

					            <h1><?php the_sub_field('section_1_title'); ?></h1>

				            </section>

				            <?php

			            endif;

		            endwhile;

	            else :

		            // no layouts found
		            echo "No data found.";

	            endif;


	            // check if there is Category tabs group
	            if( have_rows('collection_tabs') ):

		            while ( have_rows('collection_tabs') ) : the_row();

			            if( get_row_layout() == 'collection_tabs_fields' ):

				            ?>

				            <section class="collection-tabs">

					            <div class="container-fluid">

						            <div class="row">
							            <div class="col-12">

								            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

										            <div class="tab-pane fade show active" id="nav-cat1" role="tabpanel" aria-labelledby="nav-cat1-tab">
														<iframe src="<?php echo get_stylesheet_directory_uri(); ?>/rotating/ring_anniversary/published/NewProject1.html"></iframe>
										            </div>

										            <div class="tab-pane fade" id="nav-cat2" role="tabpanel" aria-labelledby="nav-cat2-tab">
											            <iframe src="<?php echo get_stylesheet_directory_uri(); ?>/rotating/ring_top/published/Top yellow.html"></iframe>
										            </div>

										            <div class="tab-pane fade" id="nav-cat3" role="tabpanel" aria-labelledby="nav-cat3-tab">
											            <iframe src="<?php echo get_stylesheet_directory_uri(); ?>/rotating/ring_medium/published/NewProject4.html"></iframe>
										            </div>

										            <div class="tab-pane fade" id="nav-cat4" role="tabpanel" aria-labelledby="nav-cat4-tab">
											            <iframe src="<?php echo get_stylesheet_directory_uri(); ?>/rotating/ring_basic/published/NewProject3.html"></iframe>
										            </div>
								            </div>

								            <nav>
									            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
										            <a class="nav-item nav-link active tab-anniversary" id="nav-cat1-tab" data-toggle="tab" href="#nav-cat1" role="tab" aria-controls="nav-cat1" aria-selected="true">
											            <div class="tab-icon" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/img/visualizer/tab_anniversary.png');"></div>
											            <span><?php the_sub_field('collection_1_name'); ?></span>
										            </a>
										            <a class="nav-item nav-link tab-top" id="nav-cat2-tab" data-toggle="tab" href="#nav-cat2" role="tab" aria-controls="nav-cat2" aria-selected="false">
											            <div class="tab-icon" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/img/visualizer/tab_top.png');"></div>
											            <span><?php the_sub_field('collection_2_name'); ?></span>
										            </a>
										            <a class="nav-item nav-link tab-medium" id="nav-cat3-tab" data-toggle="tab" href="#nav-cat3" role="tab" aria-controls="nav-cat3" aria-selected="false">
											            <div class="tab-icon" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/img/visualizer/tab_medium.png');"></div>
											            <span><?php the_sub_field('collection_3_name'); ?></span>
										            </a>
										            <a class="nav-item nav-link tab-basic" id="nav-cat4-tab" data-toggle="tab" href="#nav-cat4" role="tab" aria-controls="nav-cat4" aria-selected="false">
											            <div class="tab-icon" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/img/visualizer/tab_basic.png');"></div>
											            <span><?php the_sub_field('collection_4_name'); ?></span>
										            </a>
									            </div>
								            </nav>

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
	            if( have_rows('section_2') ):

		            while ( have_rows('section_2') ) : the_row();

			            if( get_row_layout() == 'section_2_fields' ):

				            ?>

				            <div class="top-5p"></div>

				            <section class="section-2 text-center">

					            <div class="top-5p"></div>

					            <div class="pre-title"><?php the_sub_field('pre_title'); ?></div>

					            <div class="top-2r"></div>

					            <h3><?php the_sub_field('title'); ?></h3>

					            <div class="top-1r"></div>
					            <div class="top-05r"></div>

					            <div><?php the_sub_field('sub_title'); ?></div>

					            <div class="top-5p"></div>

				            </section>

				            <?php

			            endif;

		            endwhile;

	            else :

		            // no layouts found
		            echo "No data found.";

	            endif;


	            // check if there is Visualizer group
	            if( have_rows('visualizer_section') ):

		            while ( have_rows('visualizer_section') ) : the_row();

			            if( get_row_layout() == 'visualizer_section_fields' ):

				            ?>

				            <section class="visualizer-section">

					            <div class="container-fluid">

						            <div class="row align-items-end">

							            <div class="col-lg-1"></div>
							            <div class="col-lg-2">
								            <div class="product-number">
									            <span><?php the_sub_field('product_code_label'); ?></span>
									            <p>R74587MB</p>
								            </div>
							            </div>
							            <div class="col-lg-6">
								            <div id="prod_img" class="product-image" data-line="top" data-color="yel" data-stone="cit" data-modules="pav"></div>
							            </div>
							            <div class="col-xl-3 text-center">
								            <div class="top-1r"></div>
								            <a href="#" class="btn btn-buy-this"><?php the_sub_field('buy_this_ring_text'); ?></a>
							            </div>
						            </div>

						            <div class="top-5p"></div>

						            <div class="row">
							            <div class="col-lg-2 col-xl-3"></div>
							            <div class="col-lg-8 col-xl-6">
								            <div class="row">
									            <div class="col-sm-6">
										            <div class="row">
											            <div class="col-6">
												            <h4><?php the_sub_field('line'); ?></h4>
												            <div class="builder-block builder-line basic" data-line="bas">
													            <?php the_sub_field('basic'); ?>
												            </div>
												            <div class="builder-block builder-line medium" data-line="med">
													            <?php the_sub_field('medium'); ?>
												            </div>
												            <div class="builder-block builder-line top selected" data-line="top">
													            <?php the_sub_field('top'); ?>
												            </div>
												            <div class="builder-block builder-line anniversary" data-line="ani">
													            <?php the_sub_field('anniversary'); ?>
												            </div>
											            </div>
											            <div class="col-6">
												            <h4><?php the_sub_field('color'); ?></h4>
												            <div class="builder-block builder-color yellow-gold selected bas med top" data-color="yel" style="display: none">
													            <?php the_sub_field('yellow_gold'); ?>
												            </div>
												            <div class="builder-block builder-color rose-gold bas med top" data-color="ros" style="display: none">
													            <?php the_sub_field('rose_gold'); ?>
												            </div>
												            <div class="builder-block builder-color white-gold bas med top ani" data-color="whi" style="display: none">
													            <?php the_sub_field('white_gold'); ?>
												            </div>
											            </div>
										            </div>
										            <div class="top-1r"></div>
									            </div>
									            <div class="col-sm-6">
										            <div class="row">
											            <div class="col-6">
												            <h4><?php the_sub_field('stones'); ?></h4>
												            <div class="builder-block builder-stone citrine selected bas-ros bas-whi bas-yel med-whi med-yel top-whi top-yel" data-stone="cit" style="display: none">
													            <?php the_sub_field('citrine'); ?>
												            </div>
												            <div class="builder-block builder-stone topaz bas-ros bas-whi med-ros med-whi top-ros top-whi" data-stone="tpz" style="display: none">
													            <?php the_sub_field('topaz'); ?>
												            </div>
												            <div class="builder-block builder-stone agate bas-ros med-ros top-ros" data-stone="aga" style="display: none">
													            <?php the_sub_field('agate'); ?>
												            </div>
												            <div class="builder-block builder-stone pink-tourmaline bas-ros bas-whi med-ros med-whi med-yel top-ros top-whi" data-stone="pto" style="display: none">
													            <?php the_sub_field('pink_tourmaline'); ?>
												            </div>
												            <div class="builder-block builder-stone green-tourmaline bas-ros bas-yel top-ros top-yel" data-stone="gto" style="display: none">
													            <?php the_sub_field('green_tourmaline'); ?>
												            </div>
												            <div class="builder-block builder-stone onyx bas-ros bas-yel med-ros med-yel top-yel" data-stone="ony" style="display: none">
													            <?php the_sub_field('onyx'); ?>
												            </div>
												            <div class="builder-block builder-stone citrine-agate bas-ros bas-yel med-whi med-yel" data-stone="cit_aga" style="display: none">
													            <?php the_sub_field('citrine'); ?> + <?php the_sub_field('agate'); ?>
												            </div>
												            <div class="builder-block builder-stone citrine-ptourmaline bas-ros med-ros med-whi" data-stone="aga_pto" style="display: none">
													            <?php the_sub_field('pink_tourmaline'); ?> + <?php the_sub_field('agate'); ?>
												            </div>
												            <div class="builder-block builder-stone citrine-gtourmaline bas-ros med-ros" data-stone="cit_gto" style="display: none">
													            <?php the_sub_field('citrine'); ?> + <?php the_sub_field('green_tourmaline'); ?>
												            </div>
												            <div class="builder-block builder-stone onyx-ptourmaline bas-ros med-ros" data-stone="ony_pto" style="display: none">
													            <?php the_sub_field('onyx'); ?> + <?php the_sub_field('pink_tourmaline'); ?>
												            </div>
												            <div class="builder-block builder-stone citrine-topaz bas-whi" data-stone="cit_tpz" style="display: none">
													            <?php the_sub_field('citrine'); ?> + <?php the_sub_field('topaz'); ?>
												            </div>
												            <div class="builder-block builder-stone agate-gtourmaline bas-yel" data-stone="aga_gto" style="display: none">
													            <?php the_sub_field('agate'); ?> + <?php the_sub_field('green_tourmaline'); ?>
												            </div>
												            <div class="builder-block builder-stone onyx-gtourmaline bas-yel" data-stone="ony_gto" style="display: none">
													            <?php the_sub_field('onyx'); ?> + <?php the_sub_field('green_tourmaline'); ?>
												            </div>
												            <div class="builder-block builder-stone ptourmaline-gtourmaline med-ros" data-stone="gto_pto" style="display: none">
													            <?php the_sub_field('pink_tourmaline'); ?> + <?php the_sub_field('green_tourmaline'); ?>
												            </div>
												            <div class="builder-block builder-stone agate-topaz med-whi" data-stone="aga_tpz" style="display: none">
													            <?php the_sub_field('agate'); ?> + <?php the_sub_field('topaz'); ?>
												            </div>
												            <div class="builder-block builder-stone pave ani" data-stone="pav" style="display: none">
													            <?php the_sub_field('pave'); ?>
												            </div>
											            </div>
											            <div class="col-6">
												            <h4><?php the_sub_field('modules'); ?></h4>
												            <div class="builder-block builder-modules pave ani top" data-modules="pav" style="display: none">
													            <?php the_sub_field('pave'); ?>
												            </div>
												            <div class="builder-block builder-modules sgriffato med" data-modules="sgr" style="display: none">
													            <?php the_sub_field('sgriffato'); ?>
												            </div>
												            <div class="builder-block builder-modules gold ani" data-modules="gol" style="display: none">
													            <?php the_sub_field('gold'); ?>
												            </div>
												            <div class="builder-block builder-modules stone bas" data-modules="sto" style="display: none">
													            <?php the_sub_field('stone'); ?>
												            </div>
											            </div>
										            </div>
										            <div class="top-1r"></div>
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

	            ?>

            </figure>
		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>

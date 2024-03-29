<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="top-50"></div>
<div class="top-50"></div>
<div class="top-50"></div>

<div class="row">
    <div class="col-md-12">
        <figure class="internal-page">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						get_template_part( 'content', 'page' );

						// End the loop.
					endwhile;
					?>

                </main><!-- .site-main -->
            </div><!-- .content-area -->
        </figure>
    </div>
</div>

<?php get_footer(); ?>

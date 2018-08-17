<?php
/**
 * The template for displaying archive pages.
 *
 * @package PEAuto_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <section class="banner-container">
                <div>
                    <?php if (is_category( 'portfolio' )): ?>
                        <h2>Portfolio</h2>
                    <?php elseif(is_category( 'sold-portfolio' )): ?>
                        <h2>Sold Portfolio</h2>
                    <?php endif; ?>
                </div>
                <div class="divider">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/divider-gold.svg" alt="Logo border" />
                </div>
            </section>

            <section class="portfolio-container"></section>

            <section class="luxury-car-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/car-bentley.svg" alt="Silver Bentley" />
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

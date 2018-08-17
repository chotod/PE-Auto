<?php
/**
 * The template for displaying all pages.
 *
 * @package PEAuto_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <section class="hero-container">
                <a href="">Book Tour</a>
            </section>

            <section class="featured-portfolio-container">
                <h2>Featured Portfolio</h2>

                <div class="divider">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/divider-gold.svg" alt="Logo border" />
                </div>

                <div class="featured-portfolio-wrapper"></div>
            </section>

            <section class="featured-info-container">
                <div>
                    <p>Featured Portfolio</p>

                    <div class="divider">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/divider-gold.svg" alt="Logo border" />
                    </div>

                    <div></div>
                </div>
            </section>

            <section class="luxury-car-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/car-bentley.svg" alt="Silver Bentley" />
            </section>

            <section class="home-form-container">
                <?php echo the_field('home_form'); ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

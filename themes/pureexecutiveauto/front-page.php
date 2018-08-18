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

            <section class="home-about-container">
                <div class="aboutus-wrapper centered">
                    <p class="page-title">Who We Are</p>

                    <div class="divider">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/divider-goldbig.svg" alt="Logo border" />
                    </div>

                    <div>
                        <?php while(have_posts()) : the_post(); ?>
                            <?php the_content();?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>

            <section class="luxury-car-container bentley centered">
            </section>

            <section class="home-form-container centered">
                <?php echo the_field('home_form'); ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

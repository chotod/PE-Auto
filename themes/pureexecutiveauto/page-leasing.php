<?php
/**
 * The template for displaying all pages.
 *
 * @package PEAuto_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <section class="page-info-container">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'page' ); ?>
                <?php endwhile; // End of the loop. ?>
                <div>
                    <p><?php echo the_field('page_information'); ?></p>
                    <div class="divider">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/divider-grey.svg" alt="Logo border"/>
                    </div>
                </div>
            </section>

            <section class="luxury-car-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/car-lamborghini.svg" alt="Blue Lamborghini" />
            </section>

            <section class="leasing-form-container">
                <?php echo the_field('application_form'); ?>
            </section>
            
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package PEAuto_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <section class="contact-map-container">
                <?php echo the_field('contact_google_maps'); ?>
            </section>

            <section class="company-contact-container">
                <div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/location-icon.svg" alt="Location icon" />
                        <p>Pure Executive Auto</p>
                    </div>
                    <p><?php echo the_field('contact_address'); ?></p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/phone-icon.svg" alt="Telephone icon" />
                    <a href="tel:<?php echo the_field('contact_telephone'); ?>"><?php echo the_field('contact_telephone'); ?></a>
                </div>
            </section>

            <div class="divider">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/divider-gold.svg" alt="Logo border" />
            </div>

            <section class="luxury-car-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/car-bentley.svg" alt="Silver Bentley" />
            </section>

            <section class="contact-form-container">
                <?php echo the_field('contact_form'); ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

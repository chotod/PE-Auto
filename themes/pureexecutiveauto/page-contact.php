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
            </section>

            <section class="company-contact-container r-container">
                <div class="company-address-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/location-icon.svg" alt="Location icon" />
                    <div class="address-info-wrapper company-info">
                        <p class="address-title">Pure Executive Auto</p>
                        <p class="address-info"><?php echo the_field('contact_address'); ?></p>
                    </div>
                </div>
                <div class="company-telephone-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/phone-icon.svg" alt="Telephone icon" />
                    <a class="company-info" href="tel:<?php echo the_field('contact_telephone'); ?>"><?php echo the_field('contact_telephone'); ?></a>
                </div>
            </section>

            <div class="divider centered">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/divider-gold.svg" alt="Logo border" />
            </div>

            <section class="luxury-car-container bentley centered">
            </section>

            <section class="contact-form-container l-container centered">
                <?php $posts = get_field('contact_form');
                if( $posts ): 
                    foreach( $posts as $p ): 
                    $cf7_id= $p->ID;
                    echo do_shortcode( '[contact-form-7 id="'.$cf7_id.'" ]' ); 
                    endforeach;
                endif; ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

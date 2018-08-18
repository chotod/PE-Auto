<?php
/**
 * Template Name: Application Page
 *
 * @package Pure Executive Auto Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="page-title centered">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; // End of the loop. ?>

            <section class="page-info-container">
                <div>
                    <?php echo the_field('page_information'); ?>
                    <div class="divider">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/divider-grey.svg" alt="Logo border"/>
                    </div>
                </div>
            </section>

            <section class="luxury-car-container ferrari centered">
            </section>

            <section class="application-form-container centered">
                <?php echo the_field('application_form'); ?>
            </section>
            
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
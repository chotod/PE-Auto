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
                <div class="category-heading">
                    <?php if (is_category( 'portfolio' )): ?>
                        <p>Portfolio</p>
                    <?php elseif(is_category( 'sold-portfolio' )): ?>
                        <p>Sold Portfolio</p>
                    <?php elseif(is_category( 'featured-portfolio' )): ?>
                        <p>Featured Portfolio</p>
                        <?php elseif(is_category( 'uncategorized' )): ?>
                        <p>Uncategorized</p>
                    <?php endif; ?>
                </div>
                <div class="divider">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/divider-gold.svg" alt="Logo border" />
                </div>
            </section>

            <section class="portfolio-container">
                <?php if (is_category( 'portfolio' )): ?>
                    
                    <div class="cars-gallery-container">
                        <?php query_posts( array ( 'category_name' => 'portfolio' ) );
                        while (have_posts()) : the_post(); ?>

                            <div class="car-wrapper">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                    <div class="label-wrapper">
                                        <p class="car-title"><?php the_title(); ?></p>
                                        <?php if(get_field('car_subtitle')) : ?>
                                            <p class="car-subtitle"><?php echo the_field('car_subtitle'); ?></p>
                                        <?php endif; ?>
                                        <?php if(get_field('car_price')) : ?>
                                            <p class="car-price"><?php echo the_field('car_price'); ?></p>
                                        <?php else: ?>
                                            <p class="car-price">coming soon</p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>

                <?php elseif(is_category( 'sold-portfolio' )): ?>

                    <div class="cars-gallery-container">
                        <?php query_posts( array ( 'category_name' => 'sold-portfolio' ) );
                        while (have_posts()) : the_post(); ?>

                            <div class="car-wrapper">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                    <div class="label-wrapper">
                                        <p class="car-title"><?php the_title(); ?></p>
                                        <?php if(get_field('car_subtitle')) : ?>
                                            <p class="car-subtitle"><?php echo the_field('car_subtitle'); ?></p>
                                        <?php endif; ?>
                                        <?php if(get_field('car_price')) : ?>
                                            <p class="car-price"><?php echo the_field('car_price'); ?></p>
                                        <?php else: ?>
                                            <p class="car-price">sold</p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>

                <?php elseif(is_category( 'featured-portfolio' )): ?>

                    <div class="cars-gallery-container">
                        <?php query_posts( array ( 'category_name' => 'featured-portfolio' ) );
                        while (have_posts()) : the_post(); ?>

                            <div class="car-wrapper">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                    <div class="label-wrapper">
                                        <p class="car-title"><?php the_title(); ?></p>
                                        <?php if(get_field('car_subtitle')) : ?>
                                            <p class="car-subtitle"><?php echo the_field('car_subtitle'); ?></p>
                                        <?php endif; ?>
                                        <?php if(get_field('car_price')) : ?>
                                            <p class="car-price"><?php echo the_field('car_price'); ?></p>
                                        <?php else: ?>
                                            <p class="car-price">coming soon</p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>

                <?php endif; ?>
            </section>

            <section class="luxury-car-container bentley"></section>

            <section class="contact-form-container l-container centered">
			    <?php echo do_shortcode('[contact-form-7 id="109" title="Car Contact Form"]'); ?>
		    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

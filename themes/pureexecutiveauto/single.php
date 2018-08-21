<?php
/**
 * The template for displaying all single posts.
 *
 * @package PEAuto_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<section class="banner-container">
                <div class="category-heading">
					<?php the_title(); ?>
                </div>
                <div class="">
					<?php if(get_field('car_subtitle')) : ?>
            			<p class="car-subtitle"><?php echo the_field('car_subtitle'); ?></p>
					<?php endif; ?>
						<?php if(get_field('car_price')) : ?>
                            <p class="car-price">$<?php echo the_field('car_price'); ?></p>
                        <?php else: ?>
                            <p class="car-price">coming soon</p>
						<?php endif; ?>
                </div>
            </section>

			<?php the_post_thumbnail('large'); ?>
			<?php the_content(); ?>
			<?php the_title(); ?>
			<?php if(get_field('car_subtitle')) : ?>
            <p class="car-subtitle"><?php echo the_field('car_subtitle'); ?></p>
			<?php endif; ?>
			<p class="car-price">$<?php echo the_field('car_price'); ?></p>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

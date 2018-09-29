<?php
/**
 * The template for displaying all single posts.
 *
 * @package PEAuto_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="banner-container">
                <div class="category-heading">
					<p><?php the_title(); ?></p>
				</div>

                <div class="category-subheading">
					<?php if(get_field('car_subtitle')) : ?>
            			<p class="car-subtitle"><?php echo the_field('car_subtitle'); ?></p>
					<?php endif; ?>

					<?php if(in_category( 'portfolio' )): ?>
						<?php if(get_field('car_price')) : ?>
                        	<p class="car-price"><?php echo the_field('car_price'); ?></p>
                    	<?php else: ?>
                        	<p class="car-price">coming soon</p>
						<?php endif; ?>
                    <?php elseif(in_category( 'sold-portfolio' )): ?>
						<?php if(get_field('car_price')) : ?>
                        	<p class="car-price"><?php echo the_field('car_price'); ?></p>
                    	<?php else: ?>
                        	<p class="car-price">sold</p>
						<?php endif; ?>
                    <?php endif; ?>
                </div>
            </section>

			<section class="single-car-container">
				<?php if(have_rows('car_photos')): ?>
					<ul id="light-slider">
						<?php while(have_rows('car_photos')): the_row();
							$image = get_sub_field('photo_gallery'); 
							$image_array_thumb = wp_get_attachment_image_src($image, 'thumbnail');
							$image_array_full = wp_get_attachment_image_src($image, 'full');
							$image_url_thumb = $image_array_thumb[0];
							$image_url_full = $image_array_full[0]; ?>

							<li data-thumb="<?php echo $image_url_thumb; ?>" data-src="<?php echo $image_url_full; ?>">
								<?php echo wp_get_attachment_image($image, "full"); ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</section>

			<div class="divider centered">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/divider-gold.svg" alt="Logo border" />
				<p class="single-car-title"><?php the_title(); ?></p>
			</div>

			<?php if(get_field('car_description')) : ?>
				<section class="single-description-container l-container">
					<div class="single-car-desc"><?php echo the_field('car_description'); ?></div>
				</section>
			<?php endif; ?>

			<?php if(get_field('car_specifications')) : ?>
				<section class="single-specs-container l-container">
					<p class="specs-heading">Car Specs:</p>
					<div class="single-car-specs"><?php echo the_field('car_specifications'); ?></div>
				</section>
			<?php endif; ?>

		<section class="luxury-car-container bentley centered">
		</section>

		<section class="contact-form-container l-container centered">
			<?php echo do_shortcode('[contact-form-7 id="109" title="Car Contact Form"]'); ?>
		</section>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

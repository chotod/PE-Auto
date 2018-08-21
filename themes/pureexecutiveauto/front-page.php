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
                <a href="tel:<?php echo the_field('tour_number'); ?>">Book Tour</a>
            </section>

            <section class="featured-portfolio-container">
                <p class="page-title centered">Featured Portfolio</p>

                <div class="divider">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/divider-gold.svg" alt="Logo border" />
                </div>

                <div class="featured-portfolio-wrapper">
                    <?php $args = array( 'category_name' => 'featured-portfolio', 'post_type' =>  'post', 'posts_per_page' => '3' ); 
                    $postslist = get_posts( $args );    
                    foreach ($postslist as $post) :  setup_postdata($post); ?> 
                        <div class="featured-car-wrapper">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); ?>
                            </a>
                            <div class="featured-label-wrapper">
                                <div>
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
                                <a href="<?php the_permalink(); ?>"><p class="more-info">i</p></a>
                            </div><!-- .featured-label-wrapper -->
                        </div>
                    <?php endforeach; wp_reset_postdata();?>
                </div>
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

            <section class="home-form-container l-container centered">
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

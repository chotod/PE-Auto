<?php
/**
 * Template Name: Leasing Page
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

            <section class="page-info-container l-container">
                <div>
                    <div class="info-box"><?php echo the_field('page_information'); ?></div>
                    <div class="divider">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/divider-grey.svg" alt="Logo border"/>
                    </div>
                </div>
            </section>

            <section class="luxury-car-container lambo centered">
            </section>

            <section class="leasing-form-container l-container centered">
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
<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package PEAuto_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1>Oops! That page can't be found.</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<?php $url = home_url(); ?>
					<p>It looks like nothing was found at this location. Maybe try one of the links below or return <a href="<?php echo esc_url( $url ); ?>">Home</a></p>
				</div><!-- .page-content -->

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
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

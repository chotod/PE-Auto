<?php
/**
 * The template for displaying the footer.
 *
 * @package PEAuto_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<?php $url = home_url(); ?>
					<p>Copyright © 2018 <a href="<?php echo esc_url( $url ); ?>">Pure Executive Auto,</a> a division of Pure Drive Auto Group Inc. All rights reserved.</p>
				</div><!-- .site-info -->
				<div class="footer-divider">
                	<img src="<?php echo get_template_directory_uri(); ?>/assets/divider-grey.svg" alt="Logo border" />
            	</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

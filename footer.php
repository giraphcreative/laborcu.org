<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
$admin_email = get_option( 'admin_email' );
?>
	
	</section>
	
	<footer class="footer">
		<div class="footer-columns">
			<div class="narrow">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/logo-white.svg" class="logo-footer" />
				<div class="footer-address">
					<?php print apply_filters( 'the_content', get_field( 'footer-address', 'option' ) ); ?>
				</div>
			</div>
			<div class="wide">
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-one" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-one', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-two" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-two', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-three" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-three', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-four" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-four', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-five" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-five', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
			</div>
		</div>
		<div class="footer-columns">
			<div class="narrow">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/icon-equal-housing.png" /> &nbsp;
				<img src="<?php bloginfo( 'template_url' ) ?>/img/icon-ncua.png" />
			</div>
			<div class="wide two">
				<div class="social-icons">
					<a href="<?php print get_field( 'social-twitter', 'option' ) ?>" class="icon-gear" target="_blank"><img src="<?php bloginfo( 'template_url' ) ?>/img/social-twitter.svg" class="social-icon" /></a>
					<a href="<?php print get_field( 'social-facebook', 'option' ) ?>" class="icon-gear" target="_blank"><img src="<?php bloginfo( 'template_url' ) ?>/img/social-facebook.svg" class="social-icon" /></a>
					<a href="<?php print get_field( 'social-instagram', 'option' ) ?>" class="icon-gear" target="_blank"><img src="<?php bloginfo( 'template_url' ) ?>/img/social-instagram.svg" class="social-icon" /></a>
					<a href="<?php print get_field( 'social-linkedin', 'option' ) ?>" class="icon-gear" target="_blank"><img src="<?php bloginfo( 'template_url' ) ?>/img/social-linkedin.svg" class="social-icon" /></a>
				</div>
				<div class="footer-aux">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-aux', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
			</div>
		</div>
	</footer>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>